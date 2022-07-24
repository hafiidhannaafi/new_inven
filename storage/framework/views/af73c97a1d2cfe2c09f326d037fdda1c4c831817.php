
<?php $__env->startSection('content'); ?>

<?php $__env->startSection('title', 'asetbergerak'); ?>
<?php $__env->startSection('asetbergerak', 'active'); ?>
<?php $__env->startSection('forms-nav', 'show'); ?>



<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>


<main id="main" class="main">

    <div class="pagetitle">
        
        
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Formulir Input Data Aset Bergerak</h5>

                        <!-- validation Form Elements -->

                        <form action="<?php echo e(route('create')); ?>" method="POST"
                            enctype="multipart/form-data"class=" needs-validation" novalidate>
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3">
                                <label for="validationCustom01" class="col-sm-2 col-form-label">Kode</label>
                                <div class="col-sm-10">
                                    <input type="text" id="validationCustom01" name="kode" class="form-control"
                                        required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="jenis_barangs_id" id="validationTooltip06"
                                        aria-label="Default select example">
                                        <option selected>Pilih Nama Barang</option>
                                        <?php $__currentLoopData = $jenisbarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"> <?php echo e($data->jenis_barang); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <input type="text" id="validationTooltip02" name="spesifikasi"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip03" class="col-sm-2 col-form-label">File Gambar</label>
                                <div class="col-sm-10">
                                    <input class="form-control"required type=file name="foto"
                                        oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                                    <img id="pic" style="width: 250px;">
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                
                                <div class="col-sm-10">
                                    <input type="hidden" value="1" name="jenis_asets_id" id="validationTooltip02"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            


                            <div class="row mb-3">
                                <label for="validationTooltip04" class="col-sm-2 col-form-label">Kegunaan</label>
                                <div class="col-sm-10">
                                    <input type="text" id="validationTooltip04" name="kegunaan" class="form-control"
                                        required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row mb-3">
                                <label for="validationTooltip05" class="col-sm-2 col-form-label">Tanggal
                                    Perolehan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="validationTooltip05" name="tanggal_perolehan"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Asal Perolehan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="asal_perolehans_id" id="validationTooltip06"
                                        aria-label="Default select example">
                                        <option selected>Silakan Pilih Asal Perolehan</option>
                                        <?php $__currentLoopData = $dataasalperolehan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($data->id); ?>"> <?php echo e($data->nama_asalperolehan); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                        <input type="text" id="validationTooltip04" name="nilai_perolehan"
                                            class="form-control" placeholder="Username" aria-label="Username"
                                            aria-describedby="basic-addon1" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Legalitas</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="validationTooltip04" name="legalitas"
                                            class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                

                                

                                


                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="validationTooltip04" name="lokasi"
                                            class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Penanggung
                                        Jawab</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="validationTooltip04" name="penanggung_jawab"
                                            class="form-control" required>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="validationTooltip04" class="col-sm-2 col-form-label">Jumlah
                                        awal</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="validationTooltip04" value="1"
                                            name="jumlah_awal" class="form-control" required readonly>
                                        <div class="invalid-feedback">
                                            Harus di isi
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    
                                    <div class="col-sm-10">
                                        <input type="hidden" name="jumlah" class="form-control">
                                    </div>
                                </div>

                                

                                <div class="row mb-3">
                                    <label for="validationTooltip06" class="col-sm-2 col-form-label">Satuan</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" id="validationTooltip06" name="satuans_id"
                                            aria-label="Default select example">
                                            <option selected>Silakan Pilih Satuan</option>
                                            <?php $__currentLoopData = $datasatuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($data->id); ?>"> <?php echo e($data->nama_satuan); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            <option selected>Kondisi Barang</option>
                                            <option value="Baik">Baik</option>
                                            <option value="Cukup">Cukup</option>
                                            <option value="Tidak Baik">Tidak Baik</option>
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
                                        <input type="text" id="validationTooltip04" name="ket"
                                            class="form-control"required>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/dataasetbergerak/form.blade.php ENDPATH**/ ?>