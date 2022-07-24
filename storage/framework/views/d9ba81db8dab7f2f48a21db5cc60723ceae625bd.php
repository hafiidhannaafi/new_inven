
<?php $__env->startSection('content'); ?>
    

    <main id="main" class="main">

        <div class="pagetitle">
            
            
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row align-items-top">
                <div class="col-lg-14">




                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> Detail Peminjaman Barang </h5>


                            <?php $__currentLoopData = $peminjaman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 1. Kode Peminjaman</div>
                                    <div class="col-lg-7 col-md-8"> :<?php echo e($p->kode_peminjaman); ?> </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 2. Nama peminjam </div>
                                    <div class="col-lg-7 col-md-8"> :<?php echo e($p->nama_peminjam); ?> </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 3. Jenis peminjam </div>
                                    <div class="col-lg-7 col-md-8"> : <?php echo e($p->jenis_peminjaman); ?> </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 4. Tanggal pengajuan</div>
                                    <div class="col-lg-7 col-md-8">
                                        <td>: <?php echo date('d F Y', strtotime($p->tgl_pengajuan)); ?> </td>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 5. Tanggal peminjaman </div>
                                    <div class="col-lg-7 col-md-8">
                                        <td> :<?php echo date('d F Y', strtotime($p->tgl_pinjam)); ?> </td>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 6. Tanggal pengembalian</div>
                                    <div class="col-lg-7 col-md-8">
                                        <td> : <?php echo date('d F Y', strtotime($p->tgl_kembali)); ?> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> 7. Surat Pengantar</div>
                                    <div class="col-lg-7 col-md-8"> <a href="<?php echo e(url('/download', $p->surat_pinjam)); ?>"
                                            style="  background-color:   #012970; color:#FFFFFF" button type="button"
                                            class="btn btn-sm"><i class="ri-printer-line"></i> <?php echo e($p->surat_pinjam); ?></a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <h5 class="card-title"> Detail Barang </h5>
                            <?php
                            $nomor = 1;
                            ?>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label"> Barang <?php echo e($nomor++); ?> </div>

                                    <div class="col-lg-7 col-md-8"> : <?php echo e($d->barangs->kode); ?> -
                                        <?php echo e($d->barangs->jenis_barangs->jenis_barang); ?>

                                        <?php echo e($d->barangs->spesifikasi); ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label "> Jumlah item </div>
                                    <div class="col-lg-7 col-md-8"> : <?php echo e($d->jumlah_pinjam); ?> </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <br>
                            <a href="/staff/peminjaman "
                                style=" float :left; background-color:   #012970; color:#FFFFFF" button type="button"
                                class="btn btn-sm">Kembali</a>

                        </div>
                    </div><!-- End Default Card -->


                </div>
            </div>

            </div>
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/peminjaman/data_peminjaman.blade.php ENDPATH**/ ?>