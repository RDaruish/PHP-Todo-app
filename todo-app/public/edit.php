<?php

require_once __DIR__ . '/../src/config/database.php';
require_once __DIR__ . '/../src/controllers/TaskController.php';

$controller = new TaskController($pdo);

$id = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->update($id);
} else {
    $controller->edit($id);
}
