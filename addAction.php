<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = mysqli_real_escape_string($conn, $_POST['task']);
    $user_id = $_SESSION['user_id'];

    $query = "INSERT INTO tasks (task, user_id) VALUES ('$task', '$user_id')";
    mysqli_query($conn, $query);

    header("Location: home.php");
    exit();
}
?>





