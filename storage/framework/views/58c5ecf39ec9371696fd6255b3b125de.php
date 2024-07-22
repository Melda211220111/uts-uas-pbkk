
<?php $__env->startSection('content'); ?>
<div class="section-header">
    <h1>Halaman Sewa</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Layout</a></div>
        <div class="breadcrumb-item">Default Layout</div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?php echo e(route('sewa.create')); ?>" class="btn btn-md btn-info mb-3">TAMBAH</a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Penyewa</th>
                            <th>Kendaraan</th>
                            <th>Tanggal Sewa</th>
                            <th>Tanggal Kembali</th>
                            <th>Actions</th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $sewa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $sewa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="text-center"><?php echo e($index + 1); ?></td>
                            <td><?php echo e($sewa->id); ?></td>
                            <td><?php echo e($sewa->penyewa->nama); ?></td>
                            <td><?php echo e($sewa->kendaraan->merk); ?> <?php echo e($sewa->kendaraan->model); ?></td>
                            <td><?php echo e($sewa->tanggal_sewa); ?></td>
                            <td><?php echo e($sewa->tanggal_kembali); ?></td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('sewa.destroy', $sewa->id)); ?>" method="POST">
                                    <a href="<?php echo e(route('sewa.show', $sewa->id)); ?>" class="btn btn-sm btn-dark">SHOW</a>
                                    <a href="<?php echo e(route('sewa.edit', $sewa->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="text-center">Data Kendaraan Belum Ada.</td>
                        </tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sewa-kendaraan\resources\views/sewa/index.blade.php ENDPATH**/ ?>