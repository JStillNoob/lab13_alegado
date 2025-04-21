<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog App</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4" style="max-width: 800px; margin: 0 auto;">

    <!-- Logout button aligned to the top right -->
    <div class="d-flex justify-content-end mb-3">
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="text-center">
                <h1 class="mb-3">Blog App</h1>
                <p class="d-inline">Manage your blog.</p>
            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="task-list">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3>Available blogs</h3>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-md">Add blog</a>
                </div>

                @foreach($posts as $post)
                    <div class="task-item border p-3 mb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>{{ $post->title }}</h3>
                            <div class="btn-group">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Show</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

                @if($posts->isEmpty())
                    <p>No posts available.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional, for features like modals, dropdowns, etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
