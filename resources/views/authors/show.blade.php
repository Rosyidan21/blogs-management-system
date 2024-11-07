<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $author->name }}</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $author->name }}</h1>
        <p class="text-lg text-gray-700 mb-6">Email: {{ $author->email }}</p>

        <h3 class="text-2xl font-semibold mb-4">Posts by {{ $author->name }}</h3>

        <ul class="space-y-4">
            @foreach ($author->posts as $post)
                <li class="p-4 bg-white rounded shadow">
                    <a href="{{ route('posts.show', $post->id) }}" class="text-xl font-medium text-blue-600 hover:underline">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</body>
</html>
