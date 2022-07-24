
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
                        <h5 class="card-title">Formulir Input Barang Keluar</h5>

                        <!-- validation Form Elements -->

                        <form action="<?php echo e(route('inputbarangkeluar')); ?>" method="POST" enctype="multipart/form-data"
                            class=" needs-validation" novalidate>
                            <?php echo csrf_field(); ?>
                            


                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Nama Barang</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="barangs_id" id="validationTooltip06"
                                        aria-label="Default select example">
                                        <option selected>Pilih Nama Barang</option>

                                        <?php $__currentLoopData = $inputbarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($data->jumlah_awal > 0): ?>
                                                <option value="<?php echo e($data->id); ?>"> <?php echo e($data->kode); ?> -
                                                    <?php echo e($data->jenis_barangs->jenis_barang); ?>

                                                    <?php echo e($data->spesifikasi); ?>

                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>


                            


                            <div class="row mb-3">
                                <label for="validationTooltip05" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                                <div class="col-sm-10">
                                    <input type="date" id="validationTooltip05" name="tanggal_keluar"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip04" class="col-sm-2 col-form-label">Jumlah</label>
                                <div class="col-sm-10">
                                    <input type="text" id="validationTooltip04" name="jumlah_keluar"
                                        class="form-control" required>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row mb-3">
                                <label for="validationTooltip06" class="col-sm-2 col-form-label">Kondisi</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="kondisi" id="validationTooltip06"
                                        aria-label="Default select example">
                                        <option selected>Pilih Kondisi Barang- Hilang/Rusak</option>
                                        <option value="Hilang">Hilang</option>
                                        <option value="Rusak">Rusak</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Harus di isi
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="validationTooltip04" class="col-sm-2 col-form-label">Keterangan</label>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/barangkeluar/form.blade.php ENDPATH**/ ?>