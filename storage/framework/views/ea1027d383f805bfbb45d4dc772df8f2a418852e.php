
<?php $__env->startSection('content'); ?>
    <main id="main" class="main">

        <!-- Default Card -->
        <div class="card">
            <div class="card-body"><br>
                <center> <img src="admin/logo-lptp.png" class="card-img-bottom" style="width: 90px;" alt="...">
                    <center>
                        <h5 class="card-title text-center pb-0 fs-4">Selamat Datang <?php echo e(auth()->user()->name); ?>

                        </h5>
                        <h5 class="card-title">Sistem Informasi Inventaris Barang Lembaga Pengembangan Pedesaan
                            (LPTP) Surakarta</h5>
                        
            </div>

        </div><!-- End Card with an image on bottom -->


        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">



                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Jumlah jenis Barang<span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>
                                                <?php echo e($jumlah); ?>

                                            </h6>
                                            <span class="text-success small pt-1 fw-bold"><?php echo e($asetbergerak); ?></span> <span
                                                class="text-muted small pt-2 ps-1">Aset bergerak</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php echo e($asettidakbergerak); ?></span>
                                            <span class="text-muted small pt-2 ps-1">Aset tidak bergerak</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php echo e($asetperalatan); ?></span> <span
                                                class="text-muted small pt-2 ps-1">Aset Peralatan</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php echo e($asetperlengkapan); ?></span>
                                            <span class="text-muted small pt-2 ps-1">Aset Perlengakapan</span>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Jumlah Barang<span> </span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart-check"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6> <?php
                                                $varjumlah = 0;
                                                foreach ($inputbarang as $ib) {
                                                    $varjumlah += $ib->jumlah;
                                                }
                                                echo $varjumlah;
                                            ?> </h6>
                                            <span class="text-success small pt-1 fw-bold"><?php
                                            $varjumlah = 0;
                                            foreach ($inputbarang as $ib) {
                                                if ($ib->jenis_asets_id == 1) {
                                                    $varjumlah += $ib->jumlah;
                                                }
                                            }
                                            echo $varjumlah;
                                            ?></span> <span
                                                class="text-muted small pt-2 ps-1">Aset bergerak</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php
                                            $varjumlah = 0;
                                            foreach ($inputbarang as $ib) {
                                                if ($ib->jenis_asets_id == 2) {
                                                    $varjumlah += $ib->jumlah;
                                                }
                                            }
                                            echo $varjumlah;
                                            ?></span> <span
                                                class="text-muted small pt-2 ps-1">Aset tidak bergerak</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php
                                            $varjumlah = 0;
                                            foreach ($inputbarang as $ib) {
                                                if ($ib->jenis_asets_id == 3) {
                                                    $varjumlah += $ib->jumlah;
                                                }
                                            }
                                            echo $varjumlah;
                                            ?></span> <span
                                                class="text-muted small pt-2 ps-1">Aset Peralatan</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php
                                            $varjumlah = 0;
                                            foreach ($inputbarang as $ib) {
                                                if ($ib->jenis_asets_id == 4) {
                                                    $varjumlah += $ib->jumlah;
                                                }
                                            }
                                            echo $varjumlah;
                                            ?></span> <span
                                                class="text-muted small pt-2 ps-1">Aset Perlengakapan</span>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Pengajuan Pinjam</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-arrow-up-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6> <?php echo e($peminjaman); ?></h6>
                                            <span class="text-success small pt-1 fw-bold"><?php echo e($pengajuan); ?></span> <span
                                                class="text-muted small pt-2 ps-1">Pengajuan</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php echo e($disetujui); ?></span> <span
                                                class="text-muted small pt-2 ps-1">Disetujui & dipinjam</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php echo e($ditolak); ?></span> <span
                                                class="text-muted small pt-2 ps-1">Ditolak</span><br>
                                            <span class="text-success small pt-1 fw-bold"><?php echo e($dibatalkan); ?></span> <span
                                                class="text-muted small pt-2 ps-1">Dibatalkan</span><br>
                                            <span class="text-success small pt-1 fw-bold"> <?php echo e($dikembalikan); ?></span> <span
                                                class="text-muted small pt-2 ps-1">Dikembalikan</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Jumlah Barang yang dipinjam<span></span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>




                                            </h6>
                                            <span class="text-success small pt-1 fw-bold">12</span> <span
                                                class="text-muted small pt-2 ps-1">Aset bergerak</span><br>
                                            <span class="text-success small pt-1 fw-bold">12</span> <span
                                                class="text-muted small pt-2 ps-1">Aset tidak bergerak</span><br>
                                            <span class="text-success small pt-1 fw-bold">12</span> <span
                                                class="text-muted small pt-2 ps-1">Aset Peralatan</span><br>
                                            <span class="text-success small pt-1 fw-bold">12</span> <span
                                                class="text-muted small pt-2 ps-1">Aset Perlengakapan</span>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->



                        <!-- Reports -->
                        


                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title"> Peraturan Admin<span></span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1. </div>

                                    <div class="activity-content">
                                        Admin dapat menambahkan akun admin baru dan kepala unit
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2. </div>

                                    <div class="activity-content">
                                        Menginput barang sesuai jenis aset barang tersebut
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">3. </div>

                                    <div class="activity-content">
                                        Menginput pencatatan barang keluar karena hilang atau rusak setelah ada pelaporan
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4. </div>

                                    <div class="activity-content">
                                        Menverifikasi status apabila peminjam telah datang untuk
                                        pengambilan
                                        barang serta pengembalikan barang
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">5. </div>

                                    <div class="activity-content">
                                        Melakukan cetak laporan sesuai tanggal yang diinput
                                    </div>
                                </div><!-- End activity item-->



                            </div>

                        </div>
                    </div><!-- End Recent Activity -->





                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnnn\resources\views/admin.blade.php ENDPATH**/ ?>