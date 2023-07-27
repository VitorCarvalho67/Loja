<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <div class="form-group">
                <label for="email_users">Email</label>
                <input type="email" name="email_users" class="form-control" id="email_users" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="password_users">Password</label>
                <input type="password" name="password_users" class="form-control" id="password_users" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
