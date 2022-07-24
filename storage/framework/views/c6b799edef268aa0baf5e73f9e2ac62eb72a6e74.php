
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title', 'asetbergerak'); ?>
<?php $__env->startSection('asetbergerak', 'active'); ?>
<?php $__env->startSection('forms-nav', 'show'); ?>

<main id="main" class="main">

    <div class="pagetitle">

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Silakan Cek Data Barang </h5>


                        

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>

                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">
                                        Nama barang
                                    </th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Jumlah Awal</th>
                                    <th scope="col">Sisa barang</th>
                                    <th scope="col">Detail</th>


                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $nomor = 1;
                                ?>
                                <?php $__currentLoopData = $inputbarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(($data->jenis_asets_id == 1 || $data->jenis_asets_id == 3 || $data->jenis_asets_id == 4) &&
                                        $data->jumlah > 0): ?>
                                        <tr>
                                            <th> <?php echo e($nomor++); ?></th>
                                            <td> <?php echo e($data->kode); ?> <?php echo e($data->jenis_barangs->jenis_barang); ?>

                                                <?php echo e($data->spesifikasi); ?> </td>

                                            <td>
                                                <img src="<?php echo e(asset('fotobarang/' . $data->foto)); ?>"
                                                    style="width: 100px;" alt="...">
                                            </td>
                                            <td><?php echo e($data->jumlah_awal); ?> <?php echo e($data->satuans->nama_satuan); ?> </td>
                                            <td>
                                                <?php if($data->jumlah <= 0): ?>
                                                    <span class="badge bg-danger">
                                                        kosong</span>
                                                <?php else: ?>
                                                    <?php echo e($data->jumlah); ?> <?php echo e($data->satuans->nama_satuan); ?>

                                                <?php endif; ?>

                                            <td>

                                                <!-- Large Modal -->

                                                <button type="button" class="btn btn btn-sm"
                                                    style="background-color:  #012970; color:#FFFFFF"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modaldetail<?php echo e($data->id); ?>">
                                                    <i class="bi bi-eye"></i>
                                                </button>

                                                <div class="modal fade" id="modaldetail<?php echo e($data->id); ?>"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail Data Aset</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <!-- Card with an image on left -->


                                                                <div class="card mb-3">
                                                                    <div class="row g-0">
                                                                        <div class="col-md-4">
                                                                            <img src="<?php echo e(asset('fotobarang/' . $data->foto)); ?>"
                                                                                class="img-fluid rounded-start"
                                                                                alt="...">
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="card-body">
                                                                                


                                                                                <h5 class="card-title text-center">
                                                                                    <?php echo e($data->jenis_barangs->jenis_barang); ?>

                                                                                    <?php echo e($data->spesifikasi); ?></h5>

                                                                                <p class="card-text">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label ">
                                                                                        Kode </div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->kode); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Nama </div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->jenis_barangs->jenis_barang); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Tipe</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->spesifikasi); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Jenis aset</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->jenis_asets->nama_jenisaset); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Kegunaan</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->kegunaan); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Tgl Perolehan</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->tanggal_perolehan); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Asal Perolehan</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->asal_perolehans->nama_asalperolehan); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Nilai Perolehan</div>
                                                                                    <div class="col-lg-7 col-md-8"> Rp.
                                                                                        <?php echo e($data->nilai_perolehan); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Legalitas</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->legalitas); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Luas</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->luas); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Beban Penyusutan</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->beban_penyusutan); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Nilai Buku</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->nilai_buku); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Lokasi</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->lokasi); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Penanggung Jawab</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->penanggung_jawab); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Jumlah</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->jumlah); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Satuan</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->satuans->nama_satuan); ?>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Kondisi</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->kondisi); ?></div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-5 col-md-4 label">
                                                                                        Ket</div>
                                                                                    <div class="col-lg-7 col-md-8">
                                                                                        <?php echo e($data->ket); ?></div>
                                                                                </div>

                                                                            </div>
                                                                        </div>



                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- End Card with an image on left -->

                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>
                    </div>
                </div><!-- End Large Modal-->

                
                
                </td>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tr>

                </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>

        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/cekdata.blade.php ENDPATH**/ ?>