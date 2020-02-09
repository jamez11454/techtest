<?php $__env->startSection('content'); ?>
<div id="wrapper">
    <table id="customer-list">
        <tr id="headings">
            <td>First Name</td>
            <td>Last Name</td>
            <td>Company</td>
            <td>Chapter Name</td>
            <td>View More</td>
        </tr>
        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($customer->First_Name); ?></td>
            <td><?php echo e($customer->Last_Name); ?></td>
            <td><?php echo e($customer->Company); ?></td>
            <td><?php echo e($customer->Chapter_Name); ?></td>
            <td><a href="/customers/<?php echo e($customer->id); ?>">view more...</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Portpholio\Laravel\Laravel\techtest\resources\views/customers/index.blade.php ENDPATH**/ ?>