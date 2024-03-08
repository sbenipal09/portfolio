<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        form {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #c0c0c0;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #c0c0c0;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #007BFF;
            color: #ffffff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars('../php/forgetpass.php'); ?>" enctype="multipart/form-data">
    
        <label for="username"> Username:</label>
        <input type="text" id="username" name="username">
        <label for="newpassword">New Password:</label>
        <input type="password" id="newpassword" name="newpassword">
        <input type="submit" value="Update Password">
    </form>
</body>
</html>
