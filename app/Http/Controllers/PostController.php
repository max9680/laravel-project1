<?php

namespace App\Http\Controllers;

use App\Models\Dream;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $post = Post::find(1);
        dd($post->likes);
    }

    public function second() {
        $dream = Dream::find(1);

        dump($dream->title);
        dump($dream->description);
        dd($dream->created_at);
    }

    public function third() {
        return 'this is my third page';
    }
}
