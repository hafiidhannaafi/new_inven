
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title', 'barangkeluar'); ?>
<?php $__env->startSection('barangkeluar', 'active'); ?>
<?php $__env->startSection('charts-nav', 'show'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        
        
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Barang Keluar</h5>

                        <a href="/barang-keluar/form" type="button" class="btn btn-sm"
                            style="background-color:  #012970; color:#FFFFFF">Tambah</a>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    
                                    <th scope="col">Nama</th>
                                    
                                    <th scope="col">Tgl keluar</th>
                                    <th scope="col">Jumlah Satuan</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Ket</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                ?>
                                <?php $__currentLoopData = $barangkeluar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e($nomor++); ?></th>
                                        <td> <?php echo e($data->barangs->kode); ?> -
                                            <?php echo e($data->barangs->jenis_barangs->jenis_barang); ?>

                                            <?php echo e($data->barangs->spesifikasi); ?> </td>
                                        <td> <?php echo date('d F Y', strtotime($data->tanggal_keluar)); ?></td>
                                        <td> <?php echo e($data->jumlah_keluar); ?></td>
                                        <td> <?php echo e($data->kondisi); ?></td>
                                        <td> <?php echo e($data->ket); ?></td>
                                        <td>

                                            <?php if($data->status == 0): ?>
                                                <a href="/barang-keluar/status_keluar/<?php echo e($data->id); ?>"
                                                    type="button" class="btn btn-success btn-sm"><i
                                                        class="bi bi-check-lg"></i></a>
                                            <?php else: ?>
                                            <?php endif; ?>
                                            <a href="/barang-keluar/edit/<?php echo e($data->id); ?>" type="button"
                                                class="btn btn-sm" style="background-color: #05b3c3; color:#FFFFFF"><i
                                                    class="bi bi-pencil delete"></i></a>
                                            <a href="/barang-keluar/hapus/<?php echo e($data->id); ?>"
                                                onclick="return confirm('Hapus Data?')" type="button"
                                                class="btn btn-danger btn-sm"><i class="bi bi-trash delete"></i></a>
                                        </td>

                                    </tr>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/barangkeluar/index.blade.php ENDPATH**/ ?>