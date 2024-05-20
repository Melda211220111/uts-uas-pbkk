<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Edit Kendaraan</h1>
        <form action="<?php echo e(route('kendaraan.update', $kendaraan->no_pol)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="no_pol">No Pol</label>
                <input type="text" name="no_pol" value="<?php echo e($kendaraan->no_pol); ?>" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="no_mesin">No Mesin</label>
                <input type="text" name="no_mesin" value="<?php echo e($kendaraan->no_mesin); ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="jenis_mobil">Jenis Mobil</label>
                <select name="jenis_mobil" class="form-control">
                    <option value="mpv" <?php echo e($kendaraan->jenis_mobil == 'mpv' ? 'selected' : ''); ?>>MPV</option>
                    <option value="city" <?php echo e($kendaraan->jenis_mobil == 'city' ? 'selected' : ''); ?>>City</option>
                    <option value="suv" <?php echo e($kendaraan->jenis_mobil == 'suv' ? 'selected' : ''); ?>>SUV</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" value="<?php echo e($kendaraan->nama_mobil); ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="merek">Merek</label>
                <select name="merek" class="form-control">
                    <option value="honda" <?php echo e($kendaraan->merek == 'honda' ? 'selected' : ''); ?>>Honda</option>
                    <option value="toyota" <?php echo e($kendaraan->merek == 'toyota' ? 'selected' : ''); ?>>Toyota</option>
                    <option value="daihatsu" <?php echo e($kendaraan->merek == 'daihatsu' ? 'selected' : ''); ?>>Daihatsu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="text" name="kapasitas" value="<?php echo e($kendaraan->kapasitas); ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="tarif">Tarif</label>
                <input type="number" name="tarif" value="<?php echo e($kendaraan->tarif); ?>" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts_kendaraan-main\resources\views/kendaraan/edit.blade.php ENDPATH**/ ?>