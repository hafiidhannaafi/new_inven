
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
                        <center>
                            <h5 class="card-title">Proses Peminjaman <?php echo e(auth()->user()->name); ?></h5>
                            <center>

                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col sm">No</th>
                                            <th scope="col">Kode </th>
                                            <th scope="col">Nama </th>
                                            <th scope="col">Tgl Pengajuan</th>
                                            <th scope="col">Tgl Peminjaman</th>
                                            <th scope="col">Tgl Pengembalian</th>
                                            <th scope="col">Detail</th>

                                            <th scope="col">Status </th>

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

                                                
                                                <th><?php echo e($nomor++); ?></th>
                                                <td> <?php echo e($data->kode_peminjaman); ?></td>
                                                <td> <?php echo e($data->nama_peminjam); ?></td>
                                                <td> <?php echo date('d F Y', strtotime($data->tgl_pengajuan)); ?> </td>
                                                <td> <?php echo date('d F Y', strtotime($data->tgl_pinjam)); ?> </td>
                                                <td>

                                                    <?php
                                                    $d = Carbon\Carbon::parse($data->tgl_kembali);
                                                    $e = Carbon\Carbon::parse(now());
                                                    if ($d >= $e) {
                                                        $waktu = $d->diffInDays($e) + 1;
                                                    } else {
                                                        $waktu = -$d->diffInDays($e);
                                                    } ?>


                                                    <?php echo e(date('d F Y', strtotime($data->tgl_kembali))); ?>



                                                    <?php if($waktu < 0): ?>
                                                        <p style="color:#cd0b30;" class="small fst-italic">Sudah
                                                            Terlewat <?php echo e(-$waktu); ?>

                                                            hari</p>
                                                    <?php elseif($waktu > 0): ?>
                                                        <p style="color:#012970;" class="small fst-italic"><b>
                                                                <?php echo e($waktu); ?> Hari Lagi </b>
                                                        </p>
                                                    <?php else: ?>
                                                        <p style="color:#012970;" class="small fst-italic"><b>Hari
                                                                Terakhir</b></p>
                                                    <?php endif; ?>


                                                </td>

                                                <td>
                                                    <a href="/detailbarang/<?php echo e($data->kode_peminjaman); ?>"
                                                        style=" float :right; background-color:   #012970; color:#FFFFFF"
                                                        button type="button" class="btn btn-sm"><i
                                                            class="bi bi-eye"></i></a>
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

                                                    <?php if($status->status_konfirmasis_id == 2): ?>
                                                        <?php if($status->status_peminjamans_id == 1): ?>
                                                <td><span class="badge bg-secondary">
                                                        <?php echo e($status->status_peminjamans->status_peminjamans); ?></span>
                                                </td>
                                            <?php elseif($status->status_peminjamans_id == 2): ?>
                                                <td><span class="badge bg"
                                                        style="background-color: #FFA500; color:#FFFFFF">
                                                        <?php echo e($status->status_peminjamans->status_peminjamans); ?></span>
                                                </td>
                                            <?php elseif($status->status_peminjamans_id == 3): ?>
                                                <td>

                                                    <?php
                                                    $d = Carbon\Carbon::parse($data->tgl_kembali);
                                                    $e = Carbon\Carbon::parse(now());
                                                    if ($d >= $e) {
                                                        $waktu = $d->diffInDays($e) + 1;
                                                    } else {
                                                        $waktu = -$d->diffInDays($e);
                                                    } ?>


                                                    <?php if($waktu < 0): ?>
                                                        <span
                                                            class="badge bg-danger"><?php echo e($status->status_peminjamans->status_peminjamans); ?></span>
                                                    <?php elseif($waktu >= 0): ?>
                                                        <span
                                                            class="badge bg-info"><?php echo e($status->status_peminjamans->status_peminjamans); ?></span>
                                                    <?php endif; ?>


                                                    


                                                </td>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        </td>
                                        </td>

                                        <td>
                                            <?php if($status->status_konfirmasis_id == 1): ?>
                                                <a href="/status_batal/<?php echo e($data->kode_peminjaman); ?>" type="button"
                                                    class="btn btn-danger btn-sm">
                                                    batalkan</a>
                                            <?php elseif($status->status_konfirmasis_id == 2 || $status->status_konfirmasis_id == 5): ?>
                                            <?php endif; ?>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/staff/peminjaman.blade.php ENDPATH**/ ?>