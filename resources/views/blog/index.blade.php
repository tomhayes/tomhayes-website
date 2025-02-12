<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <h1>Blog Posts</h1>
    @foreach ($blogPosts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>Author: {{ $post->user->name }}</p>
            <p>Published on: {{ $post->created_at->format('F j, Y') }}</p>
        </div>
    @endforeach
</body>
</html>