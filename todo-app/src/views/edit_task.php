<?php include __DIR__ . '/../views/header.php'; ?>

<h1><?php echo isset($task) ? 'Edit Task' : 'Add New Task'; ?></h1>

<form method="post" action="<?php echo isset($task) ? 'edit.php?id=' . $task['id'] : 'add.php'; ?>">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($task) ? htmlspecialchars($task['title']) : ''; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary"><?php echo isset($task) ? 'Update' : 'Add'; ?></button>
</form>

<?php include __DIR__ . '/../views/footer.php'; ?>
