<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-lg text-gray-700 mb-4">by <span class="font-semibold">{{ $post->author->name }}</span></p>
        
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <p class="text-lg text-gray-800">{{ $post->content }}</p>
        </div>

        <p class="text-lg text-gray-700">Status: 
            <span class="font-semibold {{ $post->published ? 'text-green-500' : 'text-yellow-500' }}">
                {{ $post->published ? 'Published' : 'Draft' }}
            </span>
        </p>

        <a href="{{ route('posts.index') }}" class="inline-block mt-6 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
            Back to Posts
        </a>
    </div>

</body>
</html>
