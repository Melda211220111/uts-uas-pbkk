
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Detail Kendaraan</h1>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <div>
                        <strong>ID:</strong> <?php echo e($kwitansi->id); ?>

                    </div>
                    <div>
                        <strong>Nomor Kwitansi:</strong> <?php echo e($kwitansi->nomor_kwitansi); ?>

                    </div>
                    <div>
                        <strong>Tanggal:</strong> <?php echo e($kwitansi->tanggal); ?>

                    </div>
                    <div>
                        <strong>Jumlah:</strong> <?php echo e($kwitansi->jumlah); ?>

                    </div>
                    <div>
                        <strong>Sewa ID:</strong> <?php echo e($kwitansi->sewa_id); ?>

                    </div>
                </table>
                <a href="<?php echo e(route('kwitansi.index')); ?>" class="btn btn-secondary">OK</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/kwitansi/show.blade.php ENDPATH**/ ?>