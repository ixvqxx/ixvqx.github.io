<?php
// Start session
session_start();

// Check if password is submitted
if(isset($_POST['password'])) {
    $password = $_POST['password'];

    // Replace 'your_password' with your actual password
    if($password === 'your_password') {
        // Password is correct, set session and redirect to admin panel
        $_SESSION['auth'] = true;
        header('Location: admin-panel.php');
        exit();
    } else {
        // Password is incorrect, redirect back to login page
        header('Location: login.html');
        exit();
    }
}

// Check if user is authenticated, if not, redirect to login page
if(!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h2>Welcome to Admin Panel</h2>
    <p>You are logged in!</p>
    <!-- Add your admin panel content here -->
</body>
</html>
