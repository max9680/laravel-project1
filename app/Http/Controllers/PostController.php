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

    public function show(Post $post) {

        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {

        return view('post.edit', compact('post'));
    }

    public function update(Post $post) {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);

        $post->update($data);

        return redirect()->route('posts.show', $post->id);
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
