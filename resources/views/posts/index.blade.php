@extends('backend.app')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">All Posts</h1>
        <a href="{{ route('posts.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">+ New Post</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
            <div class="bg-white p-4 rounded-lg shadow">
                @if($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" class="w-full h-40 object-cover rounded mb-2">
                @endif
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                {{-- <p class="text-gray-600">{{ Str::limit($post->description, 100) }}</p> --}}
                {{-- <p class="text-gray-600">{{ Str::limit(strip_tags($post->description), 100) }}</p> --}}
                <p class="text-gray-600">{!! html_entity_decode(Str::limit($post->description, 100)) !!}</p>

                <div class="mt-3 flex justify-between">
                    <a href="{{ route('posts.show', $post) }}" class="text-blue-600 hover:underline">View</a>
                    <a href="{{ route('posts.edit', $post) }}" class="text-yellow-600 hover:underline">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
