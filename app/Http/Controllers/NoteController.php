<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    private $note;

    public function __construct() {
        $note = new Note();
        $this->note = $note;
    }

    public function index() {
        $notes = $this->note->all();
        return view('home', ['notes' => $notes]);
    }

    public function create(Request $request) {
        $inputs = $request->all();
        $this->note->fill($inputs);
        $this->note->save();
        return redirect()->route('note.index');
    }
}
