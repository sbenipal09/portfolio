<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../NewForm/myindex.css">
</head>
<body>
    <div class="form-container">
        <form action="../NewForm/login.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="links">
                <a href="../NewForm/signup.php">Sign up if you don't have an account</a>
                <a href="../forgethtml.php">Forgot password?</a> 
            </div>
        </form>
    </div>
</body>
</html>
