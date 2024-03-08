<?php
 
require_once '../NewForm/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['username']) && !empty($_POST['password'])) {
    $user = new User($_POST['username'], $_POST['password']);
    $user->signup();
} else {
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Please fill in all fields.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="../NewForm/mysignup.css">
</head>
<body>
    <form action="signup.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
