<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="signup-check.php" method="post">
        <h2>Signup</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter username" required><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password" required><br>
        <label>Confirm Password</label>
        <input type="password" name="cpassword" placeholder="Confirm password" required><br>
        <button type="submit">Signup</button>
        <a href="index.php" class="btn">Already have an account?</a>
    </form>
</body>
</html>






