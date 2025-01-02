<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $task = mysqli_real_escape_string($conn, $_POST['task']);

    $query = "UPDATE tasks SET task='$task' WHERE id='$id'";
    mysqli_query($conn, $query);

    header("Location: home.php");
}
?>




