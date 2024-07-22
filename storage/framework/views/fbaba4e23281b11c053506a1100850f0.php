
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Tambah Kendaraan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('kendaraan.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Merk</label>
                        <input type="text" name="merk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <textarea name="model" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Plat Nomor</label>
                        <textarea name="plat_nomor" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Harga Sewa</label>
                        <textarea name="harga_sewa" class="form-control" required></textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/kendaraan/create.blade.php ENDPATH**/ ?>