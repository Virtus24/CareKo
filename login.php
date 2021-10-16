
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>User Login</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="POST" action="signin.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>

    <p>
        Don't have an account?
        <a href="register.php">Sign up</a>
    </p>

    </form>

</body>
</html>