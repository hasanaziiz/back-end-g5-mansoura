<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskName = $_POST['taskName'];

    $stmt = $conn->prepare('INSERT INTO tasks (task_name) VALUES (?)');
    $stmt->bind_param('s', $taskName);
    $stmt->execute();
    $stmt->close();

    header('Location: index.php');
    exit;
}
?>
