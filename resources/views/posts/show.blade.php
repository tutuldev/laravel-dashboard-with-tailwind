@extends('backend.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>

    @if($post->image)
        <img src="{{ asset('storage/'.$post->image) }}" class="w-full max-w-md mb-4 rounded">
    @endif

    <p class="text-gray-700 mb-6">{{ $post->description }}</p>

    <a href="{{ route('posts.edit', $post) }}" class="text-yellow-600 hover:underline">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline ml-4" onsubmit="return confirm('Delete this post?');">
        @csrf
        @method('DELETE')
        <button class="text-red-600 hover:underline">Delete</button>
    </form>

    <div class="mt-6">
        <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">← Back to Posts</a>
    </div>
@endsection
