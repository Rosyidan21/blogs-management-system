<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Post</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Add New Post</h1>

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Title Input -->
            <div>
                <label for="title" class="block text-lg font-medium text-gray-700">Title:</label>
                <input type="text" name="title" required class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Content Textarea -->
            <div>
                <label for="content" class="block text-lg font-medium text-gray-700">Content:</label>
                <textarea name="content" required class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Author Select -->
            <div>
                <label for="author_id" class="block text-lg font-medium text-gray-700">Author:</label>
                <select name="author_id" required class="w-full p-3 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Published Checkbox -->
            <div class="flex items-center">
                <input type="checkbox" name="published" class="h-5 w-5 text-blue-500 border-gray-300 rounded focus:ring-2 focus:ring-blue-500">
                <label for="published" class="ml-2 text-lg text-gray-700">Published</label>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save
                </button>
            </div>
        </form>
    </div>

</body>
</html>
