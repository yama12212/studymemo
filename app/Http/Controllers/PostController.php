<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

    }

    public function new() {
        return view('post.new');
    }
}
