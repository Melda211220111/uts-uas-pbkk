<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Daftar Penyewa</h1>
    <a href="<?php echo e(route('penyewa.create')); ?>" class="btn btn-primary mb-3">Tambah Penyewa</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Hp</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $penyewa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($p->id_penyewa); ?></td>
                    <td><?php echo e($p->nama_penyewa); ?></td>
                    <td><?php echo e($p->alamat); ?></td>
                    <td><?php echo e($p->no_hp); ?></td>
                    <td>
                        <a href="<?php echo e(route('penyewa.edit', $p->id_penyewa)); ?>" class="btn btn-sm btn-primary">Edit</a>
                        <form action="<?php echo e(route('penyewa.destroy', $p->id_penyewa)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts_kendaraan-main\resources\views/penyewa/index.blade.php ENDPATH**/ ?>