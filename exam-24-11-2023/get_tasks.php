<?php
require_once 'db.php';

$result = $conn->query('SELECT * FROM tasks');
$tasks = [];

while ($row = $result->fetch_assoc()) {
    $tasks[] = $row;
}

echo '<h3 style="margin: 20px;">Not Completed</h3>';
echo '<ul class="list-group">';
foreach ($tasks as $task) {
    if (!$task['completed']) {
        echo '<li class="list-group-item" >';
        echo ' ' . $task['task_name'];
        echo '<form action="delete_task.php" method="post" style="display: inline-block; margin-left: 10px;">';
        echo '<input type="hidden" name="id" value="' . $task['id'] . '">';
        echo '<button type="submit" class="btn btn-danger btn-sm">Delete</button>';
        echo '</form>';
        echo '<form action="update_task.php" method="post" style="display: inline-block; margin-left: 10px;">';
        echo '<input type="hidden" name="id" value="' . $task['id'] . '">';
        echo '<button type="submit" class="btn btn-success btn-sm">Done</button>';
        echo '</form>';
        echo '</li>';
    }
}
echo '</ul>';

echo '<h3 style="margin: 20px;">Completed</h3>';
echo '<ul class="list-group">';
foreach ($tasks as $task) {
    if ($task['completed']) {
        echo '<li class="list-group-item">';
        echo ' ' . $task['task_name'];
        echo '</li>';
    }
}
echo '</ul>';

$result->free_result();
$conn->close();
?>
