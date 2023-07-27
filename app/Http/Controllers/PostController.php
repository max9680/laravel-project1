<?php

namespace App\Http\Controllers;


use App\Models\Dream;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $post = Post::where('is_published', 1)->first();

//        foreach ($posts as $post) {
//            dump($post->title);
//        }
        dd($post->title);
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

//        Post::create([
//            'title' => 'title of post from phpstorm',
//            'content' => 'some content',
//            'image' => 'imaginy.jpg',
//            'likes' => 20,
//            'is_published' => 1,
//        ]);

        foreach ($postsArr as $item) {
            Post::create($item);
//            dd($item);
        }
        dd('created');
    }

    public function update() {
        $post = Post::find(5);

        $post->update([
            'title' => 'updated',
                'content' => 'updated',
                'image' => 'updated',
                'likes' => 'updated',
                'is_published' => 'updated',
            ]
        );
        dd('updated');
    }

    public function delete() {
        $post = Post::withTrashed()->find(4);
        $post->restore();

        dd($post);

        $post->delete();
        dd('deleted');
    }

    public function firstOrCreate() {
//        $post = Post::find(1);

        $anotherPost = [
            'title' => 'some title',
            'content' => 'some content',
            'image' => 'imaginy.jpg',
            'likes' => 2000,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'some title'
            ], $anotherPost);

        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate() {
        $anotherPost = [
            'title' => 'some title',
            'content' => 'some new content',
            'image' => 'imaginy.jpg',
            'likes' => 2000,
            'is_published' => 1,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some new title'
            ], $anotherPost);

        dump($post->content);
        dd('finished');
    }
}
