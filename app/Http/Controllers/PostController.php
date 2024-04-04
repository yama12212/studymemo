<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    private $post;

    public function __construct() {
        $posts = new Post();
        $this->post = $posts;
    }

    public function index($id) {
        $posts = $this->post->all()->where('note_id', $id);
        return view('post.index', ['posts' => $posts]);
    }

    public function new() {
        return view('post.new');
    }
}
