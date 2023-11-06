<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <h2>Login</h2>
    <form action="authenticate.php" method="post">
        <div class="mb-3">
        <label class="form-label" for="username">Username:</label>
        </div>
        <div class="mb-3">
        <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <br>
        <label class="form-label" for="password">Password:</label>
        <input class="form-control" type="password" id="password" name="password" required>
        <br>
        <button class="btn btn-primary" type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
