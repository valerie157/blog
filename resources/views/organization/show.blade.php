<!-- resources/views/organizations/show.blade.php -->
<x-app-layout>

@section('content')
    <h2>{{ $organization->name }}</h2>
    <!-- Display other organization details as needed -->
    <a href="{{ route('organizations.index') }}">Back to List</a>
    </x-app-layout>