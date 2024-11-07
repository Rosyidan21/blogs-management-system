<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Authors</h1>
        
        <!-- Success Message -->
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Add New Author Button -->
        <a href="{{ route('authors.create') }}" class="mb-4 inline-block px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600">
            Add New Author
        </a>

        <!-- Authors List -->
        <ul class="space-y-4">
            @foreach ($authors as $author)
                <li class="p-4 bg-white rounded shadow flex justify-between items-center">
                    <div>
                        <a href="{{ route('authors.show', $author->id) }}" class="text-xl font-semibold text-blue-600 hover:underline">{{ $author->name }}</a>
                        <p class="text-gray-600">{{ $author->email }}</p>
                    </div>
                    <div class="flex space-x-2">
                        <!-- Edit Button -->
                        <a href="{{ route('authors.edit', $author->id) }}" class="px-3 py-1 bg-yellow-400 text-white font-semibold rounded hover:bg-yellow-500">
                            Edit
                        </a>
                        <!-- Delete Form -->
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-500 text-white font-semibold rounded hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
