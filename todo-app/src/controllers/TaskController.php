<?php

require_once __DIR__ . '/../models/Task.php';

class TaskController
{
    private $taskModel;

    public function __construct($pdo)
    {
        $this->taskModel = new Task($pdo);
    }

    public function index()
    {
        $tasks = $this->taskModel->getAllTasks();
        include __DIR__ . '/../views/tasks.php';
    }

    public function create()
    {
        include __DIR__ . '/../views/edit_task.php';
    }

    public function store()
    {
        $title = $_POST['title'];
        $this->taskModel->addTask($title);
        header('Location: index.php');
    }

    public function edit($id)
    {
        $task = $this->taskModel->getTaskById($id);
        include __DIR__ . '/../views/edit_task.php';
    }

    public function update($id)
    {
        $title = $_POST['title'];
        $this->taskModel->updateTask($id, $title);
        header('Location: index.php');
    }

    public function delete($id)
    {
        $this->taskModel->deleteTask($id);
        header('Location: index.php');
    }

    public function toggle($id)
    {
        $this->taskModel->toggleTask($id);
        header('Location: index.php');
    }
}
