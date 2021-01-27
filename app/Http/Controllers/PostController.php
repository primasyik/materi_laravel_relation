<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PostController extends Controller
{
    public function index($id) {
        $user = User::find($id);
        $posts = $user->posts()->get();
        return view('posts.index', compact(['posts', 'user']));
    }
}
