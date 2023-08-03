@extends('layouts.main')
@section('content')
    <div class="grid col-span-full pt-20 px-4">

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('patch')
            <div class="flex flex-col">
                <div>
                    <label for="title">Title</label>
                </div>
                <div class="mt-2">
                    <input class="rounded border-2 border-gray-300 w-full" name="title" type="text" id="title" placeholder="title" value="{{ $post->title }}">
                </div>
                <div>
                    <label for="content">Content</label>
                </div>
                <div class="mt-2">
                    <textarea class="rounded border-2 border-gray-300 w-full" name="content" id="content" placeholder="content">{{$post->content}}</textarea>
                </div>
                <div>
                    <label for="image">Image</label>
                </div>
                <div class="mt-2">
                    <input class="rounded border-2 border-gray-300 w-full" name="image" type="text" id="image" placeholder="image" value="{{$post->image}}">
                </div>

                <div class="mt-2">
                    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" value="Update">
                </div>
            </div>
        </form>
    </div>


@endsection
