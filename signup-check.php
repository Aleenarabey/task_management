<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    if ($password !== $cpassword) {
        header("Location: signup.php?error=Passwords do not match");
        exit();
    }

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=Username already taken");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

    if (mysqli_query($conn, $query)) {
        header("Location: signup.php?success=Account created successfully");
    } else {
        header("Location: signup.php?error=Account creation failed");
    }
}
?>


