<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Daftar Kwitansi</h1>
        <a href="<?php echo e(route('kwitansi.create')); ?>" class="btn btn-primary mb-3">Tambah Kwitansi</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tanggal Kwitansi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $kwitansi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($k->id_kwitansi); ?></td>
                        <td><?php echo e($k->tgl_kwitansi); ?></td>
                        <td>
                            <a href="<?php echo e(route('kwitansi.edit', $k->id_kwitansi)); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <form action="<?php echo e(route('kwitansi.destroy', $k->id_kwitansi)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts_kendaraan-main\resources\views/kwitansi/index.blade.php ENDPATH**/ ?>