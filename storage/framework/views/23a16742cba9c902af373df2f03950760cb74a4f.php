
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
                        <h5 class="card-title">Formulir Edit Data Aset Bergerak</h5>

                        <!-- validation Form Elements -->

                        <form action="/data-asetbergerak/update/<?php echo e($inputbarang->id); ?>" method="POST"
                            enctype="multipart/form-data" needs-validation" novalidate>
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="validationCustom01" class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo e($inputbarang->kode); ?>" id=" "
                                        name="kode" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="jenis_barangs_id" id=" "
                                        aria-label="Default select example">
                                        

                                        <?php
                                        foreach ($jenisbarang as $data) {
                                            echo "<option value='$data->id'";
                                            echo $inputbarang['jenis_barangs_id'] == $data->id ? 'selected' : '';
                                            echo ">$data->jenis_barang </option>";
                                        }
                                        ?>


                                    </select>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="validationTooltip02"
                                    class="col-sm-2 col-form-label">Tipe/Spesifikasi</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo e($inputbarang->spesifikasi); ?>" name="spesifikasi"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip03" class="col-sm-2 col-form-label">File Gambar</label>
                                <div class="col-sm-10">

                                    <object data="<?php echo e(asset('filebarang/' . $inputbarang->foto)); ?>"></object>
                                    <input type="file" value="<?php echo e(asset('filebarang/' . $inputbarang->foto)); ?>"
                                        name="foto" class="form-control"required>


                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="validationTooltip04" class="col-sm-2 col-form-label">Kegunaan</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?php echo e($inputbarang->kegunaan); ?>" name="kegunaan"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip05" class="col-sm-2 col-form-label">Tanggal
                                    Perolehan</label>
                                <div class="col-sm-10">
                                    <input type="date" value="<?php echo e($inputbarang->tanggal_perolehan); ?>"
                                        name="tanggal_perolehan" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Asal Perolehan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="asal_perolehans_id" id=" "
                                        aria-label="Default select example">
                                        



                                        

                                        <?php
                                        foreach ($dataasalperolehan as $asal) {
                                            echo "<option value='$asal->id'";
                                            echo $inputbarang['asal_perolehans_id'] == $asal->id ? 'selected' : '';
                                            echo ">$asal->nama_asalperolehan </option>";
                                        }
                                        ?>


                                    </select>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="validationTooltip04" class="col-sm-2 col-form-label">Nilai Perolehan/Harga
                                </label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Rp</span>
                                        <input type="text" value="<?php echo e($inputbarang->nilai_perolehan); ?>"
                                            id=" " name="nilai_perolehan" class="form-control"
                                            placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"
                                            required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Legalitas</label>
                                    <div class="col-sm-10">
                                        <input type="text" value=" <?php echo e($inputbarang->legalitas); ?>" id=" "
                                            name="legalitas" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                


                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo e($inputbarang->lokasi); ?>" id=" "
                                            name="lokasi" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Penanggung
                                        Jawab</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo e($inputbarang->penanggung_jawab); ?>"
                                            id=" " name="penanggung_jawab" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Jumlah
                                        awal</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo e($inputbarang->jumlah_awal); ?>"
                                            id=" " name="jumlah_awal" class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip06" class="col-sm-2 col-form-label">Satuan</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id=" " name="satuans_id"
                                            aria-label="Default select example">
                                            


                                            <?php
                                            foreach ($datasatuan as $data) {
                                                echo "<option value='$data->id'";
                                                echo $inputbarang['satuans_id'] == $data->id ? 'selected' : '';
                                                echo ">$data->nama_satuan</option>";
                                            }
                                            ?>


                                        </select>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip06" class="col-sm-2 col-form-label">Kondisi</label>
                                    <div class="col-sm-10">

                                        <select class="form-select" id="validationTooltip06" name="kondisi"
                                            aria-label="Default select example">
                                            
                                            <option value="Baik"
                                                <?php echo e($inputbarang->kondisi == 'Baik' ? 'selected' : ''); ?>>Baik</option>
                                            <option value="Cukup"
                                                <?php echo e($inputbarang->kondisi == 'Cukup' ? 'selected' : ''); ?>>Cukup
                                            </option>
                                            <option value="Tidak Baik"
                                                <?php echo e($inputbarang->kondisi == 'Tidak Baik' ? 'selected' : ''); ?>>Tidak
                                                Baik
                                            </option>
                                        </select>



                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04"
                                        class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?php echo e($inputbarang->ket); ?>" id=" "
                                            name="ket" class="form-control"required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button style=" float :right; background-color:   #012970; color:#FFFFFF"
                                            type="submit" class="btn btn">Submit</button>
                                    </div>
                                </div>
                        </form><!-- End General Form Elements -->



                    </div>
                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/dataasetbergerak/edit.blade.php ENDPATH**/ ?>