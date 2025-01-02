<?php
include "connection.php";

$id = $_GET['id'];
$query = "SELECT * FROM tasks WHERE id='$id'";
$result = mysqli_query($conn, $query);
$task = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="editAction.php" method="post">
        <h2>Edit Task</h2>
        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        <label>Task</label>
        <input type="text" name="task" value="<?php echo $task['task']; ?>" required><br>
        <button type="submit">Save Changes</button>
        <a href="home.php" class="btn">Cancel</a>
    </form>
</body>
</html>





