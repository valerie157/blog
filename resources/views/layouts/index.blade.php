<!-- resources/views/blogs/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Blog Posts</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create New Post</a>
        <hr>
        @if ($blogs->isEmpty())
            <p>No blog posts yet.</p>
        @else
            <div class="list-group">
                @foreach ($blogs as $blog)
                    <a href="{{ route('blogs.show', $blog->id) }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">{{ $blog->title }}</h5>
                        <small>{{ $blog->created_at->format('M d, Y') }}</small>
                    </a>
                @endforeach
            </div>
            <div class="mt-3">
                {{ $blogs->links() }}
            </div>
        @endif
    </div>
@endsection
