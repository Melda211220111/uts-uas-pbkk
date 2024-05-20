<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit Penyewa</h1>
    <form action="<?php echo e(route('penyewa.update', $penyewa->id_penyewa)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label>Nama Penyewa</label>
            <input type="text" name="nama_penyewa" value="<?php echo e($penyewa->nama_penyewa); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?php echo e($penyewa->alamat); ?>" class="form-control">
        </div>
        <div class="form-group">
            <label>No Hp</label>
            <input type="text" name="no_hp" value="<?php echo e($penyewa->no_hp); ?>" class="form-control">
        </div>
        <button type="submit">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts_kendaraan-main\resources\views/penyewa/edit.blade.php ENDPATH**/ ?>