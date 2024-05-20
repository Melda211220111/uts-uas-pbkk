<?php $__env->startSection('content'); ?>
    <h1>Tambah Penyewa</h1>
    <form action="<?php echo e(route('penyewa.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Nama Penyewa</label>
        <input type="text" name="nama_penyewa">
        <label>Alamat</label>
        <input type="text" name="alamat">
        <label>No Hp</label>
        <input type="text" name="no_hp">
        <button type="submit">Simpan</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts_kendaraan-main\resources\views/penyewa/create.blade.php ENDPATH**/ ?>