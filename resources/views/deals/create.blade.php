<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Deal</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-lg p-8 bg-white mt-10 rounded shadow">
        <h1 class="text-2xl font-bold text-center mb-6">Create New Deal</h1>
        
        <form action="{{ route('deals.store') }}" method="POST">
            @csrf 
            
            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
                <input type="text" id="name" name="name" required
                       class="block w-full px-4 py-3 border rounded-lg bg-gray-200 focus:outline-none focus:bg-white">
            </div>
            
            <!-- Description Input -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <textarea id="description" name="description" required
                          class="block w-full px-4 py-3 border rounded-lg bg-gray-200 focus:outline-none focus:bg-white"></textarea>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded-lg font-semibold">Create Deal</button>
        </form>
    </div>
</body>
</html>
