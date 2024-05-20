<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="my-4">Daftar Kendaraan</h1>
        <a href="<?php echo e(route('kendaraan.create')); ?>" class="btn btn-primary mb-3">Tambah Kendaraan</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No Pol</th>
                    <th scope="col">No Mesin</th>
                    <th scope="col">Jenis Mobil</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Kapasitas</th>
                    <th scope="col">Tarif</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $kendaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($k->no_pol); ?></td>
                        <td><?php echo e($k->no_mesin); ?></td>
                        <td><?php echo e($k->jenis_mobil); ?></td>
                        <td><?php echo e($k->nama_mobil); ?></td>
                        <td><?php echo e($k->merek); ?></td>
                        <td><?php echo e($k->kapasitas); ?></td>
                        <td><?php echo e($k->tarif); ?></td>
                        <td>
                            <a href="<?php echo e(route('kendaraan.edit', $k->no_pol)); ?>" class="btn btn-sm btn-primary">Edit</a>
                            <form action="<?php echo e(route('kendaraan.destroy', $k->no_pol)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\uts_kendaraan-main\resources\views/kendaraan/index.blade.php ENDPATH**/ ?>