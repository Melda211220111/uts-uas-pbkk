
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Penyewa</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td><?php echo e($penyewa->nama); ?></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td><?php echo e($penyewa->alamat); ?></td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td><?php echo e($penyewa->telepon); ?></td>
                    </tr>
                </table>
                <a href="<?php echo e(route('penyewa.index')); ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/penyewa/show.blade.php ENDPATH**/ ?>