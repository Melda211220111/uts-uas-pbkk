
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Tambah Kwitansi</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('kwitansi.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nomor_kwitansi">Nomor Kwitansi</label>
                        <input type="text" name="nomor_kwitansi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kwitansi">Tanggal</label>
                        <input type="date" name="tanggal_kwitansi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sewa_id">Sewa ID</label>
                        <select name="sewa_id" class="form-control">
                            <?php $__currentLoopData = $sewa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sewa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($sewa->id); ?>"><?php echo e($sewa->id); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/kwitansi/create.blade.php ENDPATH**/ ?>