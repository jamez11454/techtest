<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Please import User Data
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('import')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="file" name="file" class="form-control">
                <br>
                <button class="button is-link">Import User Data</button>
                <a id="custom-button" href="/customers/import"><span class="button is-link">Return</span></a>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Portpholio\Laravel\Laravel\CustomerDetails\techtest\resources\views/customers/import.blade.php ENDPATH**/ ?>