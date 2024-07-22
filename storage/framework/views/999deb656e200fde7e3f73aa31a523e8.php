

<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Edit Invoice</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo e(route('invoice.update', $invoice->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group">
                        <label for="nomor">Nomor Invoice</label>
                        <input type="text" name="nomor" id="nomor" class="form-control" value="<?php echo e(old('nomor', $invoice->nomor)); ?>" required>
                    </div>
                
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo e(old('tanggal', $invoice->tanggal)); ?>">
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" value="<?php echo e(old('jumlah', $invoice->jumlah)); ?>" required>
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/invoice/edit.blade.php ENDPATH**/ ?>