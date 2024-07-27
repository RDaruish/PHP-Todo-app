<?php

require_once __DIR__ . '/../src/config/database.php';
require_once __DIR__ . '/../src/controllers/TaskController.php';

$controller = new TaskController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->store();
} else {
    $controller->create();
}
