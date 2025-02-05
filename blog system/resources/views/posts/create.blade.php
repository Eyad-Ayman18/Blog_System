<html>
<head><title>Create Post</title></head>
<body>
    <h1>Create New Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <p>{{ $message }}</p> @enderror

        <label>Description:</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description') <p>{{ $message }}</p> @enderror

        <button type="submit">Create</button>
    </form>
</body>
</html>