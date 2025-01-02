<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 align="center">TASK MANAGEMENT SYSTEM</h1>
    <p><center>GET ORGANIZED AND DO YOUR TASK CORRECTLY</center></p>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter username" required><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required><br>
        <button type="submit">Login</button>
        <a href="signup.php" class="btn">Create an account</a>
    </form>
</body>
</html>


