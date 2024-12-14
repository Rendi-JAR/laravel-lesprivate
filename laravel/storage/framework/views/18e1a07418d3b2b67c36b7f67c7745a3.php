<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Students List</h1>
    <a href="<?php echo e(route('students.create')); ?>">Add New Student</a>
    <?php if(session('success')): ?>
        <p><?php echo e(session('success')); ?></p>
    <?php endif; ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->id); ?></td>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->phone); ?></td>
                <td><?php echo e($student->course); ?></td>
                <td>
                    <a href="<?php echo e(route('students.edit', $student)); ?>">Edit</a>
                    <form action="<?php echo e(route('students.destroy', $student)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <a href="<?php echo e(route('students.report')); ?>" class="btn btn-primary">Download Report</a>
</body>
</html>
<?php /**PATH C:\laragon\www\les-privat-new\resources\views/students/index.blade.php ENDPATH**/ ?>