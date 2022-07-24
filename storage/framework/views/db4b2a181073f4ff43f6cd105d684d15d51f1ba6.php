
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title', 'pengajuan'); ?>
<?php $__env->startSection('pengajuan', 'active'); ?>
<?php $__env->startSection('iconss-nav', 'show'); ?>

<main id="main" class="main">

    <div class="pagetitle">

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row align-items-top">
            <div class="col-lg-14">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Peminjaman</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode </th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Tgl Pengajuan</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Status </th>
                                    <th scope="col">verifikasi</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                ?>
                                <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $status = App\Models\DetailPeminjaman::where('kode_peminjaman', $data->kode_peminjaman)->first();
                                    ?>
                                    <?php if($status->status_konfirmasis_id == 1 ||
                                        ($status->status_konfirmasis_id == 2 && $status->status_peminjamans_id == 1) ||
                                        ($status->status_konfirmasis_id == 2 && $status->status_peminjamans_id == 2)): ?>
                                        <tr>
                                            <th><?php echo e($nomor++); ?></th>
                                            <td> <?php echo e($data->kode_peminjaman); ?></td>
                                            <td> <?php echo e($data->nama_peminjam); ?></td>
                                            <td> <?php echo date('d F Y', strtotime($data->tgl_pengajuan)); ?> </td>
                                            <td>
                                                <a href="/detailbarangadmin/<?php echo e($data->kode_peminjaman); ?>"
                                                    style="  background-color:   #012970; color:#FFFFFF" button
                                                    type="button" class="btn btn-sm"><i class="bi bi-eye"></i></a>
                                            </td>

                                            <?php
                                                $status = App\Models\DetailPeminjaman::where('kode_peminjaman', $data->kode_peminjaman)->first();
                                            ?>
                                            <td>
                                                <?php if($status->status_konfirmasis_id == 1): ?>
                                                    <span class="badge bg-secondary">
                                                        <?php echo e($status->status_konfirmasis->status_konfirmasi); ?></span>
                                                <?php elseif($status->status_konfirmasis_id == 2): ?>
                                                    <span class="badge bg-success">
                                                        <?php echo e($status->status_konfirmasis->status_konfirmasi); ?></span>
                                                <?php elseif($status->status_konfirmasis_id == 3): ?>
                                                    <span class="badge bg-danger">
                                                        <?php echo e($status->status_konfirmasis->status_konfirmasi); ?></span>
                                                <?php elseif($status->status_konfirmasis_id == 4): ?>
                                                    <span class="badge bg-secondary">
                                                        <?php echo e($status->status_konfirmasis->status_konfirmasi); ?></span>
                                                <?php elseif($status->status_konfirmasis_id == 5): ?>
                                                    <span
                                                        class="badge bg-danger"><?php echo e($status->status_konfirmasis->status_konfirmasi); ?></span>
                                                <?php endif; ?>

                                                <br>
                                                <?php if($status->status_konfirmasis_id == 2): ?>
                                                    <?php if($status->status_peminjamans_id == 1): ?>
                                                        <span class="badge bg-secondary">
                                                            <?php echo e($status->status_peminjamans->status_peminjamans); ?></span>
                                                    <?php elseif($status->status_peminjamans_id == 2): ?>
                                                        <span class="badge bg"
                                                            style="background-color: #FFA500; color:#FFFFFF">
                                                            <?php echo e($status->status_peminjamans->status_peminjamans); ?></span>
                                                    <?php elseif($status->status_peminjamans_id == 3): ?>
                                                        <span
                                                            class="badge bg-info"><?php echo e($status->status_peminjamans->status_peminjamans); ?></span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </td>

                                            <td>
                                                <?php if($status->status_konfirmasis_id == 2): ?>
                                                    <!--STATUS PEMINJAMAN  -->
                                                    <a href="/status_barangdiambil/<?php echo e($data->kode_peminjaman); ?>"
                                                        type="button" class="btn btn btn-sm"
                                                        style="background-color: #FFA500; color:#FFFFFF"><i
                                                            class="bi bi-bag-check-fill"></i></a>
                                                    <!--STATUS PENGEMBALIAN-->
                                                    <a href="/status_kembali/<?php echo e($data->kode_peminjaman); ?>"
                                                        type="button" class="btn btn-info btn-sm"><i
                                                            class="bi bi-person-check-fill"
                                                            style=" color:#FFFFFF"></i></a>
                                                <?php elseif($status->status_peminjamans_id == 2 || $status->status_peminjamans_id == 3): ?>
                                                    <span class="badge border-dark border-1 text-dark small fst-italic"
                                                        style="color:#012970;">sudah
                                                        diverifikasi</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                
                                                <a href="/peminjaman/hapus/<?php echo e($data->id); ?>"
                                                    onclick="return confirm('Hapus Data?')" type="button"
                                                    class="btn btn-danger btn-sm"><i class="bi bi-trash delete"></i></a>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/peminjaman/peminjaman.blade.php ENDPATH**/ ?>