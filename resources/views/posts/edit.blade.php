@extends('backend.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Title</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full p-2 border rounded" required>
            @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-semibold">Description</label>
            <textarea name="description" class="w-full p-2  border rounded" required>{{ old('description', $post->description) }}</textarea>
            @error('description') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-semibold">Image (optional)</label>
            @if($post->image)
                <img src="{{ asset('storage/'.$post->image) }}" class="w-32 h-32 object-cover mb-2">
            @endif
            <input type="file" name="image" class="w-full">
            @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('posts.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
    </form>
@endsection
