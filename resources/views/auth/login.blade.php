
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <form method="POST" action="/login" class="container mt-5" style="max-width: 400px;">
        @csrf
        <h2 class="mb-4 text-center">Login</h2>
    
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
        </div>
    
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
    
        <button type="submit" class="btn btn-primary w-100">Login</button>

        <p>Not registered yet? <a href="{{ route('register.form') }}">Click here</a></p>

    </form>
    