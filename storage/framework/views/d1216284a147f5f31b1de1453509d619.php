<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Tambah Kwitansi</h1>
        <form action="<?php echo e(route('kwitansi.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="tgl_kwitansi">Tanggal Kwitansi</label>
                <input type="date" name="tgl_kwitansi" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts_kendaraan-main\resources\views/kwitansi/create.blade.php ENDPATH**/ ?>