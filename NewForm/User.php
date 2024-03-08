<?php

final class User
{
    private $username;
    private $password;
    private $dbh;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->dbh = new mysqli('localhost', 'root', '', 'users', '3307');

        if ($this->dbh->connect_error) {
            die("Connection failed: " . $this->dbh->connect_error);
        }
    }
    public function login()
    {
        $username = $this->sanitize($this->username);
        $password = $this->password;
    
        $stmt = $this->dbh->prepare("SELECT * FROM account WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $hashpass = $user['password'];
            if (password_verify($password, $hashpass)) {
                $_SESSION['username'] = $username;
                echo "<div class='message success'>Logged in Successfully</div>";
            } else {
                echo "<div class='message error'>Incorrect password</div>";
            }
        } else {
            echo  "<div class='message error'>User not found, please sign up.</div>";
        }
    }
    
    
    public function signup()
{
    $username = $this->sanitize($this->username);
    $password = password_hash($this->password, PASSWORD_DEFAULT);
 
    $stmt = $this->dbh->prepare("SELECT * FROM account WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
    
        $stmt = $this->dbh->prepare("INSERT INTO account (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);
        if ($stmt->execute()) {
            echo "<script type='text/javascript'>alert('Registration successful!');</script>";
        } else {
            echo "<h4>Registration failed. Please try again.');</script>";
        }
    } else {
       
        echo "<script type='text/javascript'>alert('Username already exists. Please choose a different one.');</script>";
    }
}


    private function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login or Signup</title>
    <link rel="stylesheet" href="../NewForm/global.css">  
    
</head>
<body>
 

<script>
document.addEventListener("DOMContentLoaded", function() {
    var messages = document.querySelectorAll('.message');
    messages.forEach(function(message) {
      
        message.classList.add('show');
    });
});
</script>
</body>
</html>