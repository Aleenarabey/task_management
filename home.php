<?php
session_start();
include "connection.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM tasks WHERE user_id='$user_id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <a href="add.php" class="btn">Add New Task</a>
    <a href="logout.php" class="btn">Logout</a>
    <table>
        <tr>
            <th>Task</th>
            <th>Actions</th>
        </tr>
        <?php while ($task = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $task['task']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $task['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $task['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>






