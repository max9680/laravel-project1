<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MyPlaceController extends Controller
{
    public function index() {
        $post = Post::where('is_published', 0)->first();

//        foreach ($posts as $post) {
//            dump($post->title);
//        }

        dd($post);
    }

    public function second() {
        return 'this is my second page';
    }

    public function third() {
        return 'this is my third page';
    }
}
