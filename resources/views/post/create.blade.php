@extends('layouts.main')
@section('content')
    <div class="grid col-span-full pt-20 px-4">

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="flex flex-col">
                <div>
                    <label for="title">Title</label>
                </div>
                <div class="mt-2">
                    <input class="rounded border-2 border-gray-300 w-full" name="title" type="text" id="title"
                           placeholder="title" value = {{ old('title') }}>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="content">Content</label>
                </div>
                <div class="mt-2">
                    <textarea class="rounded border-2 border-gray-300 w-full" name="content" id="content"
                              placeholder="content">{{ old('content') }}</textarea>
                    @error('content')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="image">Image</label>
                </div>
                <div class="mt-2">
                    <input class="rounded border-2 border-gray-300 w-full" name="image" type="text" id="image"
                           placeholder="image" value="{{ old('image') }}">
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="category">Category</label>
                </div>

                <div class="mt-2">
                    <select class="rounded border-2 border-gray-300 w-full" id="category" name="category_id">
                        @foreach($categories as $category)
                            <option
                                {{ old('category_id') == $category->id ? ' selected' : '' }}

                                value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach

                    </select>

                </div>

                <div class="mt-2">
                    <label data-te-select-label-ref for="tags" data-te-select-label-ref>Tags</label>
                    <select data-te-select-init multiple class="rounded border-2 border-gray-300 w-full" id="tags"
                            name="tags[]">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="mt-2">
                    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"
                           value="Create">
                </div>
            </div>
        </form>
    </div>


@endsection
