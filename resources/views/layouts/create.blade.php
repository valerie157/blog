<!-- resources/views/blogs/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Blog Post</h1>
        <form action="{{ route('blogs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
