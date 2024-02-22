@extends('layouts.app')

@section('content')
<h1>Deals</h1>

<a href="{{ route('deals.create') }}" class="btn btn-primary mb-3">Create Deal</a>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($deals as $deal)
            <tr>
                <td>{{ $deal->name }}</td>
                <td>{{ $deal->description }}</td>
                <td>
                    <form action="{{ route('deals.destroy', ['deal' => $deal->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('deals.edit', ['deal' => $deal->id]) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection