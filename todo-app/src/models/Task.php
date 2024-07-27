<?php

class Task
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllTasks()
    {
        $stmt = $this->pdo->query('SELECT * FROM tasks');
        return $stmt->fetchAll();
    }

    public function addTask($title)
    {
        $stmt = $this->pdo->prepare('INSERT INTO tasks (title) VALUES (?)');
        return $stmt->execute([$title]);
    }

    public function updateTask($id, $title)
    {
        $stmt = $this->pdo->prepare('UPDATE tasks SET title = ? WHERE id = ?');
        return $stmt->execute([$title, $id]);
    }

    public function deleteTask($id)
    {
        $stmt = $this->pdo->prepare('DELETE FROM tasks WHERE id = ?');
        return $stmt->execute([$id]);
    }

    public function toggleTask($id)
    {
        $stmt = $this->pdo->prepare('UPDATE tasks SET is_completed = NOT is_completed WHERE id = ?');
        return $stmt->execute([$id]);
    }

    public function getTaskById($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM tasks WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
