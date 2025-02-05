<html>
<head><title>Blog Posts</title></head>
<body>
    <h1>Blog Posts</h1>
    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->description }}</p>
        <p>Created At: {{ $post->created_at->diffForHumans() }}</p>
        <a href="{{ route('posts.show', $post->id) }}">View</a>
        @auth
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
            <form method="POST" action="{{ route('posts.destroy', $post->id) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        @endauth
    @endforeach

    {{ $posts->links() }}
</body>
</html>