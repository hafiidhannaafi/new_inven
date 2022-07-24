
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title', 'datakepala'); ?>
<?php $__env->startSection('datakepala', 'active'); ?>
<?php $__env->startSection('formss-nav', 'show'); ?>

<main id="main" class="main">


    <section class="section">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Kepala Unit</h5>
                        
                        <a href="/data-kepala/form" type="button" class="btn btn-sm"
                            style="background-color:  #012970; color:#FFFFFF">Tambah</a>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Posisi</th>
                                    <th scope="col">Telp</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                ?>
                                <?php $__currentLoopData = $akun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($data->roles_id == 2): ?>
                                        <tr>
                                            <th> <?php echo e($nomor++); ?></th>
                                            <td><?php echo e($data->name); ?></td>
                                            <td><?php echo e($data->email); ?></td>
                                            <td><?php echo e($data->alamat); ?></td>
                                            <td><?php echo e($data->posisi); ?></td>
                                            <td><?php echo e($data->telephone); ?></td>
                                            <td><?php echo e($data->roles->roles); ?></td>
                                            <td>
                                                <?php if($data->status == 1): ?>
                                                    <a href="<?php echo e(url('ubah/status/' . $data->id)); ?>" type="button"
                                                        class="btn btn-outline-primary btn-sm">Aktif</a>
                                                <?php else: ?>
                                                    <a href="<?php echo e(url('ubah/status/' . $data->id)); ?>" type="button"
                                                        class="btn btn-outline-danger btn-sm">Non-Aktif</a>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <a href="/data-kepala/edit/<?php echo e($data->id); ?>" type="button"
                                                    class="btn btn" style="background-color: #05b3c3; color:#FFFFFF"><i
                                                        class="bi bi-pencil"></i></a>
                                                <a href="/data-kepala/hapus/<?php echo e($data->id); ?>"
                                                    onclick="return confirm('Hapus Data?')" type="button"
                                                    class="btn btn-danger"><i class="bi bi-trash delete"></i></a>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/datakepala/index.blade.php ENDPATH**/ ?>