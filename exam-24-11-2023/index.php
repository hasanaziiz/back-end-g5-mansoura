<?php
include 'db.php';

// Retrieve tasks from the database
$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>To-Do List</title>
</head>
<body>
<h2>To-Do List</h2>
<form id="addForm" action="add_task.php" method="post" class="form-inline mb-3">
    <div class="form-group mr-2">
        <input type="text" name="taskName" class="form-control" placeholder="Add a new task" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Task</button>
</form>

<ul id="taskList" class="list-group">
    <?php include 'get_tasks.php'; ?>
</ul>
</body>
</html>
