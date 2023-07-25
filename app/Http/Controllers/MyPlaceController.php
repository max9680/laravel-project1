<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index() {
        $post = Post::find(1);
        echo $post->title;
        dd($post->content);
        return 'this is my page';
    }

    public function second() {
        return 'this is my second page';
    }

    public function third() {
        return 'this is my third page';
    }
}
