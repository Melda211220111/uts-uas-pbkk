
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Tambah Sewa</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('sewa.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="penyewa_id">Penyewa</label>
                        <select name="penyewa_id" class="form-control">
                            <?php $__currentLoopData = $penyewa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penyewa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($penyewa->id); ?>"><?php echo e($penyewa->nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kendaraan_id">Kendaraan</label>
                        <select name="kendaraan_id" class="form-control">
                            <?php $__currentLoopData = $kendaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kendaraan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($kendaraan->id); ?>"><?php echo e($kendaraan->merk); ?> <?php echo e($kendaraan->model); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_sewa">Tanggal Sewa</label>
                        <input type="date" name="tanggal_sewa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/sewa/create.blade.php ENDPATH**/ ?>