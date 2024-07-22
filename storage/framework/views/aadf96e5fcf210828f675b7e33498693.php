
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Edit Penyewa</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('penyewa.update', $penyewa->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo e($penyewa->nama); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required><?php echo e($penyewa->alamat); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <textarea name="telepon" class="form-control" required><?php echo e($penyewa->telepon); ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/penyewa/edit.blade.php ENDPATH**/ ?>