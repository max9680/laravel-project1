<?php

namespace App\Http\Controllers;


use App\Models\Dream;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create() {

        return view('post.create');
    }

    public function store() {

        $data = request()->validate([
           'title' => 'string',
           'content' => 'string',
           'image' => 'string',
        ]);
        Post::create($data);

        return redirect()->route('posts.index');
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
