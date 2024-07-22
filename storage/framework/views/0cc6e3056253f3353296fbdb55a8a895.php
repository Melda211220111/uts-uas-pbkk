
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Tambah Invoice</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('invoice.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="nomor">Nomor Invoice</label>
                        <input type="text" name="nomor" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <textarea name="jumlah" class="form-control" required></textarea>
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/invoice/create.blade.php ENDPATH**/ ?>