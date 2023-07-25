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

        $post = Post::where('is_published', 0)->first();

//        foreach ($posts as $post) {
//            dump($post->title);
//        }

        dd($post);
    }

    public function create() {

        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some content',
                'image' => 'imaginy.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post from phpstorm',
                'content' => 'another some content',
                'image' => 'another_imaginy.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];
    }
}
