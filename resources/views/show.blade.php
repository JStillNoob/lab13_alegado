@vite(['resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $post->title }} - Blog App</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 800px; margin: 0 auto;">

    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title text-center">{{ $post->title }}</h1>
            <p class="text-center text-muted">{{ $post->created_at->format('F j, Y') }}</p>

            <div class="post-content mt-3">
                <p>{{ $post->body }}</p>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
