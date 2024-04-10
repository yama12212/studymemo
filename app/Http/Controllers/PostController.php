<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Note;
use Auth;

class PostController extends Controller
{
    private $post;
    private $note;

    public function __construct() {
        $posts = new Post();
        $this->post = $posts;

        $notes = new Note();
        $this->note = $notes;
    }

    public function index($id) {
        $posts = $this->post->all()->where('note_id', $id);
        $noteTitle = $this->note->find($id)->title;
        return view('post.index', ['posts' => $posts, 'noteTitle' => $noteTitle]);
    }

    public function new() {
        $currentUserId = Auth::id();
        $currentUserNotes = $this->note->all()->where('user_id', $currentUserId)->toArray();
        $currentUserNotesCollect = array_column($currentUserNotes, 'title', 'id');
        return view('post.new', ['currentUserNotesCollect' => $currentUserNotesCollect]);
    }

    public function create(Request $request) {
        $inputs = $request->all();
        $noteId = $request->note_id;
        $this->post->fill($inputs);
        $this->post->save();
        return redirect()->route('post.index', ['id' => $noteId]);
    }
}
