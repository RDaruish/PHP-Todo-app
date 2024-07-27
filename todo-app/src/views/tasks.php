<?php include __DIR__ . '/../views/header.php'; ?>

<h1>To-Do List</h1>

<a href="add.php" class="btn btn-primary">Add New Task</a>

<table class="table mt-3">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?php echo $task['id']; ?></td>
                <td><?php echo htmlspecialchars($task['title']); ?></td>
                <td><?php echo $task['is_completed'] ? 'Completed' : 'Pending'; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $task['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="toggle.php?id=<?php echo $task['id']; ?>" class="btn btn-info btn-sm">
                        <?php echo $task['is_completed'] ? 'Mark as Pending' : 'Mark as Completed'; ?>
                    </a>
                    <a href="delete.php?id=<?php echo $task['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include __DIR__ . '/../views/footer.php'; ?>
