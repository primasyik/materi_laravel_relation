<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class CategoryController extends Controller
{
    public function index($id){
        $user = User::find($id);
        $post = Post::find($id);
        $categories = $post->categories;
        return view('categories.index', compact(['categories', 'post', 'user']));
    }

}
