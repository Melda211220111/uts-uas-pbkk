

<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Edit Kendaraan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('kendaraan.update', $kendaraan->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" id="merk" class="form-control" value="<?php echo e(old('merk', $kendaraan->merk)); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" id="model" class="form-control" value="<?php echo e(old('model', $kendaraan->model)); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="plat_nomor">Plat Nomor</label>
                        <input type="text" name="plat_nomor" id="plat_nomor" class="form-control" value="<?php echo e(old('plat_nomor', $kendaraan->plat_nomor)); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="harga_sewa">Harga Sewa</label>
                        <input type="number" name="harga_sewa" id="harga_sewa" class="form-control" value="<?php echo e(old('harga_sewa', $kendaraan->harga_sewa)); ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/kendaraan/edit.blade.php ENDPATH**/ ?>