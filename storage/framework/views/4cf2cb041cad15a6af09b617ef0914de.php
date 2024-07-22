
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Sewa Details</h1>
    <div>
        <strong>ID:</strong> <?php echo e($sewa->id); ?>

    </div>
    <div>
        <strong>Penyewa:</strong> <?php echo e($sewa->penyewa->nama); ?>

    </div>
    <div>
        <strong>Kendaraan:</strong> <?php echo e($sewa->kendaraan->merk); ?> <?php echo e($sewa->kendaraan->model); ?>

    </div>
    <div>
        <strong>Tanggal Sewa:</strong> <?php echo e($sewa->tanggal_sewa); ?>

    </div>
    <div>
        <strong>Tanggal Kembali:</strong> <?php echo e($sewa->tanggal_kembali); ?>

    </div>
    <a href="<?php echo e(route('sewa.index')); ?>" class="btn btn-secondary">Back</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/sewa/show.blade.php ENDPATH**/ ?>