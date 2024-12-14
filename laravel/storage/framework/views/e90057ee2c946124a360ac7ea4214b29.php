<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Edit Student</h1>
    <form action="<?php echo e(route('students.update', $student)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo e($student->name); ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo e($student->email); ?>" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo e($student->phone); ?>"><br>
        <label>Course:</label>
        <input type="text" name="course" value="<?php echo e($student->course); ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
<?php /**PATH C:\laragon\www\les-privat-new\resources\views/students/edit.blade.php ENDPATH**/ ?>