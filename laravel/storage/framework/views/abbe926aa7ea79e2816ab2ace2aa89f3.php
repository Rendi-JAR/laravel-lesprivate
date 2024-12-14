<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Add New Student</h1>
    <form action="<?php echo e(route('students.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Phone:</label>
        <input type="text" name="phone"><br>
        <label>Course:</label>
        <input type="text" name="course" required><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
<?php /**PATH C:\laragon\www\les-privat-new\resources\views/students/create.blade.php ENDPATH**/ ?>