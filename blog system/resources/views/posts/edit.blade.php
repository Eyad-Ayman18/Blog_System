<html>
<head><title>Edit Post</title></head>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title') <p>{{ $message }}</p> @enderror

        <label>Description:</label>
        <textarea name="description">{{ old('description', $post->description) }}</textarea>
        @error('description') <p>{{ $message }}</p> @enderror

        <button type="submit">Update</button>
    </form>
</body>
</html>