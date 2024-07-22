
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Data Invoice</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nomor Invoice</th>
                        <td><?php echo e($invoice->nomor); ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td><?php echo e($invoice->tanggal); ?></td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td><?php echo e($invoice->jumlah); ?></td>
                    </tr>
                    
                </table>
                <a href="<?php echo e(route('invoice.index')); ?>" class="btn btn-secondary">OK</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/invoice/show.blade.php ENDPATH**/ ?>