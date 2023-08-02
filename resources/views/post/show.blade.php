@extends('layouts.main')
@section('content')
    <div class="container pt-20 mx-auto px-4">
        <div>{{ $post->id }}. {{ $post->title }}</div>
        <div>{{ $post->content }}</div>
    </div>
    <div class="container pt-5 mx-auto px-4">
        <a href="{{ route('posts.index') }}">Back</a>
    </div>
@endsection
