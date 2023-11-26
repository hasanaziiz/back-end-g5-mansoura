<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_POST['id'];

    $stmt = $conn->prepare('UPDATE tasks SET completed = 1 WHERE id = ?');
    $stmt->bind_param('i', $taskId);
    $stmt->execute();
    $stmt->close();

    header('Location: index.php');
    exit;
}
?>
