<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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

    public function view($id) {
        $post = $this->post->find($id);
        return view('post.view', ['post' => $post]);
    }

    public function new() {
        $currentUserId = Auth::id();
        $currentUserNotes = $this->note->all()->where('user_id', $currentUserId)->toArray();
        $currentUserNotesCollect = array_column($currentUserNotes, 'title', 'id');
        return view('post.new', ['currentUserNotesCollect' => $currentUserNotesCollect]);
    }

    public function create(PostRequest $request) {
        $inputs = $request->all();
        $noteId = $request->note_id;
        $this->post->fill($inputs);
        $this->post->save();
        return redirect()->route('post.index', ['id' => $noteId]);
    }

    public function show($id) {
        $post = $this->post->find($id);
        $noteTitle = array($post->note->title);
        $noteId = $post->note->id;
        return view('post.show', ['post' => $post, 'noteTitle' => $noteTitle, 'noteId' => $noteId]);
    }

    public function edit(PostRequest $request, $id) {
        $inputs = $request->all();
        $noteId = $request->note_id;
        $post = $this->post->find($id);
        $post->fill($inputs);
        $post->save();
        return redirect()->route('post.index', ['id' => $noteId]);
    }

    public function delete($id) {
        $post = $this->post->find($id);
        $noteId = $this->note->find($post->note_id)->id;
        $post->delete();
        return redirect()->route('post.index', ['id' => $noteId]);
    }
}
