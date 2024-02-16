@extends('layouts.app')

@section('content')
    <h1>Post Details</h1>
    <p><strong>Title:</strong> {{ $post->title }}</p>
    <p><strong>Body:</strong> {{ $post->body }}</p>
    <p><strong>Created At:</strong> {{ $post->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $post->updated_at }}</p>
@endsection