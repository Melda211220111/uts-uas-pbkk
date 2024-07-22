
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Kendaraan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Merk</th>
                        <td><?php echo e($kendaraan->merk); ?></td>
                    </tr>
                    <tr>
                        <th>Model</th>
                        <td><?php echo e($kendaraan->model); ?></td>
                    </tr>
                    <tr>
                        <th>Plat Nomor</th>
                        <td><?php echo e($kendaraan->plat_nomor); ?></td>
                    </tr>
                    <tr>
                        <th>Harga Sewa</th>
                        <td><?php echo e($kendaraan->harga_sewa); ?></td>
                    </tr>
                </table>
                <a href="<?php echo e(route('kendaraan.index')); ?>" class="btn btn-secondary">OK</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/kendaraan/show.blade.php ENDPATH**/ ?>