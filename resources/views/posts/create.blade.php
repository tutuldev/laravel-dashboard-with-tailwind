@extends('backend.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        {{-- Title --}}
        <div>
            <label class="block font-semibold">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" class="w-full p-2 border rounded" required>
            @error('title') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Description --}}
        <div>
            <label class="block font-semibold">Description</label>
            <textarea name="description" id="description" class="w-full p-2 border rounded">{{ old('description') }}</textarea>
            @error('description') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Image --}}
        <div>
            <label class="block font-semibold">Image (optional)</label>
            <input type="file" name="image" class="w-full">
            @error('image') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        {{-- Submit Button --}}
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Create</button>
        <a href="{{ route('posts.index') }}" class="ml-4 text-gray-600 hover:underline">Cancel</a>
    </form>

    {{-- TinyMCE Editor CDN --}}
    <script src="https://cdn.tiny.cloud/1/geb2o1qxfu1e6ygw5i81yv3l1mrmai8c6sdxx4wn6lwhdlm8/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@push('scripts')
<script>
    tinymce.init({
        selector: '#description',
        plugins: 'lists link image table code',
        toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code',
        height: 300,

        // Limit allowed HTML elements and attributes
        valid_elements: 'p,b,strong,i,em,u,ul,ol,li,a[href|target],img[src|alt|width|height],table,tr,td,th,thead,tbody,tfoot,br,span[style]',

        // Disallow JavaScript links
        invalid_elements: 'script,iframe,object,embed',
        convert_urls: false,  // Prevent auto-converting URLs that might create unsafe hrefs

        // Optional: force some cleanup
        forced_root_block: 'p',
        force_p_newlines: true,
        cleanup: true,
        verify_html: true
    });
</script>

@endpush

@endsection
