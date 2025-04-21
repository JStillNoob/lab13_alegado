<!-- Bootstrap CSS CDN (add this in your <head> if not already included) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <form method="POST" action="/register" class="container mt-5" style="max-width: 500px;">
        @csrf
        <h2 class="mb-4 text-center">Register</h2>
    
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
    
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
        </div>
    
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
    
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirm password" required>
        </div>
    
        <button type="submit" class="btn btn-primary w-100">Register</button>

        <p>Already have an account? <a href="{{ route('login') }}">Click here</a></p>
    </form>
    