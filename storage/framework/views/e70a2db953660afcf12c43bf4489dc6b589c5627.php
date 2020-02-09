<?php $__env->startSection('content'); ?>
<div id="wrapper">
    <table>
        <tr>
            <td class="column1">First Name</td>
            <td><?php echo e($customer->First_Name); ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo e($customer->Last_Name); ?></td>
        </tr>
        <tr>
            <td>Company</td>
            <td><?php echo e($customer->Company); ?></td>
        </tr>
        <tr>
            <td>Profession</td>
            <td><?php echo e($customer->Profession); ?></td>
        </tr>
        <tr>
            <td>Chapter Name</td>
            <td><?php echo e($customer->Chapter_Name); ?></td>
        </tr>
        <tr>
            <td>Alt Phone Number</td>
            <td><?php echo e($customer->Alt_Phone_Number); ?></td>
        </tr>
        <tr>
            <td>Fax Number</td>
            <td><?php echo e($customer->Fax_Number); ?></td>
        </tr>
        <tr>
            <td>Cell Number</td>
            <td><?php echo e($customer->Cell_Number); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo e($customer->Email); ?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td><?php echo e($customer->Website); ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo e($customer->Address); ?></td>
        </tr>
        <tr>
            <td>City</td>
            <td><?php echo e($customer->City); ?></td>
        </tr>
        <tr>
            <td>State</td>
            <td><?php echo e($customer->State); ?></td>
        </tr>
        <tr>
            <td>ZIP</td>
            <td><?php echo e($customer->ZIP); ?></td>
        </tr>
        <tr>
            <td>Substitute</td>
            <td><?php echo e($customer->Substitute); ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                <?php if($customer->Status === 1): ?> Active
                <?php else: ?> Inactive <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>Join Date</td>
            <td><?php echo e($customer->Join_Date); ?></td>
        </tr>
        <tr>
            <td>Renewal Date</td>
            <td><?php echo e($customer->Renewal_Date); ?></td>
        </tr>
        <tr>
            <td>Sponsor</td>
            <td><?php echo e($customer->Sponsor); ?></td>
        </tr>
    </table>
    <a id="custom-button" href="/customers"><span class="button is-link">Return</span></a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Portpholio\Laravel\Laravel\techtest\resources\views/customers/show.blade.php ENDPATH**/ ?>