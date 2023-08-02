@extends('layouts.main')
@section('content')
    <div class="container pt-20 mx-auto px-4">
        @foreach($posts as $post)
            <div>{{ $post->id }}. {{ $post->title }}</div>
        @endforeach
    </div>
@endsection
