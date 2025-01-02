<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Query to fetch user details
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    // Validate user
    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        // Check if password matches
        if (password_verify($password, $user['password'])) {
            // Start session for the user
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: home.php");
            exit();
        } else {
            header("Location: login.php?error=Incorrect password");
            exit();
        }
    } else {
        header("Location: login.php?error=User not found");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
