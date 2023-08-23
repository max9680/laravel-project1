<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::all();
        $category = Category::find(1);
        $tag = Tag::find(2);

//        dd($post->tags);

        return view('post.index', compact('posts'));
    }
}
