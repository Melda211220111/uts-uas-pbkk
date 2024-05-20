<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Kwitansi</h1>
        <form action="<?php echo e(route('kwitansi.update', $kwitansi->id_kwitansi)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="tgl_kwitansi">Tanggal Kwitansi</label>
                <input type="date" name="tgl_kwitansi" value="<?php echo e($kwitansi->tgl_kwitansi); ?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts_kendaraan-main\resources\views/kwitansi/edit.blade.php ENDPATH**/ ?>