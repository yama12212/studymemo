<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Note;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    private $note;

    public function __construct() {
        $this->middleware('auth');

        $note = new Note();
        $this->note = $note;
    }

    public function index() {
        $user = Auth::id();
        $notes = $this->note->all()->where('user_id', '=', $user);
        return view('home', ['notes' => $notes]);
    }

    public function new() {
        return view('note.new');
    }

    public function create(NoteRequest $request) {
        $inputs = $request->all();
        $this->note->fill($inputs);
        $this->note->save();
        return redirect()->route('note.index');
    }

    public function show($id) {
        $note = $this->note->find($id);
        return view('note.show', ['note' => $note]);
    }

    public function edit(NoteRequest $request, $id) {
        $inputs = $request->all();
        $note = $this->note->find($id);
        $note->fill($inputs);
        $note->save();
        return redirect()->route('note.index');
    }

    public function delete($id) {
        $note = $this->note->find($id);
        $note->delete();
        return redirect()->route('note.index');
    }
}
