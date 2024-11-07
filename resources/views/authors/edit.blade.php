<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Author</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Edit Author</h1>

        <form action="{{ route('authors.update', $author->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Name Input -->
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700">Name:</label>
                <input type="text" name="name" value="{{ $author->name }}" required class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Email Input -->
            <div>
                <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
                <input type="email" name="email" value="{{ $author->email }}" required class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update
                </button>
            </div>
        </form>
    </div>

</body>
</html>
