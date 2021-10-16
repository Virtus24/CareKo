<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User Registration</title>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="POST" action="function.php">
        <div class="input-group">
        <div class="input-group">
        <div class="input-group">
            <label>Full Name</label>
            <input type="text" name="fullname" required = "">
        </div>
            <label>Address</label>
            <input type="text" name="address" required = "">
        </div>
            <label>Username</label>
            <input type="text" name="username" required = "">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="email" required = "">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required = "">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>

    <p>
        Already a member?
        <a href="login.php">Sign in</a>
    </p>

    </form>

</body>
</html>