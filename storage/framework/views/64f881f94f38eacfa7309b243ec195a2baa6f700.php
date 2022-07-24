
<?php $__env->startSection('content'); ?>
    

    <main id="main" class="main">

        <div class="pagetitle">
            
            
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row align-items-top">
                <div class="col-lg-14">



                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body"><br>
                            <center> <img src="admin/logo-lptp.png" class="card-img-bottom" style="width: 90px;"
                                    alt="...">
                                <center>
                                    <h5 class="card-title text-center pb-0 fs-4">Selamat Datang <?php echo e(auth()->user()->name); ?>

                                    </h5>
                                    <h5 class="card-title">Sistem Informasi Inventaris Barang Lembaga Pengembangan Pedesaan
                                        (LPTP) Surakarta</h5>
                                    
                        </div>

                    </div><!-- End Card with an image on bottom -->

                </div>
            </div>

            </div>
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views//kepalaunit.blade.php ENDPATH**/ ?>