<!-- resources/views/deals/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Deal</title>
</head>
<body>
    <h1>Edit Deal</h1>

    
    <form action="{{ route('deals.update', $deal->id) }}" method="POST">
        @csrf
        @method('PUT')

        
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $deal->name }}">

        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $deal->description }}</textarea>

        <!-- Submit button -->
        <button type="submit">Update Deal</button>
    </form>
</body>
</html>
