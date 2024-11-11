<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Posts</h1>

        <a href="{{ route('posts.create') }}" class="inline-block mb-4 py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600">Add New Post</a>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-700 border border-green-300 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <ul class="space-y-4">
            @foreach ($posts as $post)
                <li class="p-4 bg-white rounded shadow">
                    <a href="{{ route('posts.show', $post->id) }}" class="text-xl font-medium text-blue-600 hover:underline">
                        {{ $post->title }}
                    </a>
                    <span class="text-sm text-gray-500">- by {{ $post->author->name }}</span>

                    <div class="mt-2">
                        <a href="{{ route('posts.edit', $post->id) }}" class="inline-block text-yellow-400 hover:underline">Edit</a>

                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block text-red-500 hover:underline">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
