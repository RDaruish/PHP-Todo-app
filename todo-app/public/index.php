<?php

require_once __DIR__ . '/../src/config/database.php';
require_once __DIR__ . '/../src/controllers/TaskController.php';

$controller = new TaskController($pdo);
$controller->index();
