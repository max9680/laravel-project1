<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
        $category = Category::find(1);
        $tag = Tag::find(2);

        dd($post->tags);

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];

        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {

        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {

        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];

        unset($data['tags']);

        $post->update($data);

        $post->tags()->sync($tags);

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post)
    {

        $post->delete();

        return redirect()->route('posts.index');
    }

    public function firstOrCreate()
    {
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

    public function updateOrCreate()
    {
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
