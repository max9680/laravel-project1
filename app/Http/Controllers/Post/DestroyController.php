<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
