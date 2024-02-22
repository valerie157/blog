<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deals</title>
</head>
<body>
    <h1>List of Deals</h1>

    <a href="{{ route('deals.create') }}">Create New Deal</a>

    <ul>
        @foreach ($deals as $deal)
            <li>
                {{ $deal->name }} - {{ $deal->description }}
                <a href="{{ route('deals.edit', $deal->id) }}">Edit</a> <!-- Edit  -->
                
                <form action="{{ route('deals.destroy', $deal->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button> <!-- Delete  -->
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
