<?php
 
require_once '../NewForm/User.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $user = new User($_POST['username'], $_POST['password']);
        $user->login();
    } else {
        echo "<div class='message error'>Invalid Username / Password</div>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
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