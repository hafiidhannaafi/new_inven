<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sistem Inventaris - LPTP Surakarta</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('')); ?>landingpages/assets/img/favicon.png" rel="icon">
    <link href="<?php echo e(asset('')); ?>landingpages/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('landingpages/assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('landingpages/assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('landingpages/assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('landingpages/assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('landingpages/assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('landingpages/assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('landingpages/assets/css/style.css')); ?>" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?php echo e(asset('landingpages/assets/img/logo.png')); ?>" alt="">
                <span>Sistem Inventaris</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#features">Fasilitas & Tata Cara Pinjam</a></li>

                    
                    <ul>
                        
                        
                        
                        
                    </ul>
                    </li>

                    
                    
                    
                    
                    <li><a class="getstarted scrollto" href="/login">Sign In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat datang!</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Sistem Informasi Inventarisasi Barang</h2>
                    <h2 data-aos="fade-up" data-aos-delay="400">LPTP Surakarta</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="<?php echo e('/login'); ?>"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Peminjaman Barang & Keperluan Projek</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?php echo e(asset('landingpages/assets/img/hero-img.png')); ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang Sistem Inventaris LPTP Surakarta</h3>
                            <h2>Sistem informasi ini mengelola data barang dan aset yang di miliki LPTP baik di kantor
                                pusat maupun cabang.</h2>
                            <p>
                                Pengelolaan ini meliputi pendataan setiap aset atau barang, seperti barang masuk,
                                keluar, kondisi barang (rusak, hilang), peminjaman pribadi dan keperluan proyek serta
                                laporan dari data tersebut.
                            <div class="text-center text-lg-start">
                                <a href="#features"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Fasilitas sistem inventaris</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?php echo e(asset('landingpages/assets/img/about.jpg')); ?>" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Jenis Aset & Barang</h2>
                    <p> Kami Membagi menjadi 4 Jenis : </p>
                </header>

                <div class="row gy-4" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3 style="color: #4a4df6;"> Aset bergerak</h3>

                            <img src="<?php echo e(asset('landingpages/assets/img/pricing-free.png')); ?>" class="img-fluid"
                                alt="">
                            <ul>

                                <li>seperti motor, mobil, sepeda</li>
                                <li>contoh mobil dinas </li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">

                            <h3 style="color:#4a4df6;">Aset tidak bergerak</h3>

                            <img src="<?php echo e(asset('landingpages/assets/img/pricing-starter.png')); ?>" class="img-fluid"
                                alt="">
                            <ul>

                                <li>seperti tanah, gedung, rumah</li>
                                <li>contoh gedung serba guna, rumah dinas</li>

                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="box">
                            <h3 style="color: #4a4df6;">Aset Peralatan</h3>

                            <img src="<?php echo e(asset('landingpages/assets/img/pricing-business.png')); ?>" class="img-fluid"
                                alt="">
                            <ul>

                                <li>seperti peralatan mesin, perkantoran</li>
                                <li>contoh LCD, Printer, Laptop</li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="box">
                            <h3 style="color: #4a4df6;">Aset Perlengkapan</h3>

                            <img src="<?php echo e(asset('landingpages/assets/img/pricing-ultimate.png')); ?>" class="img-fluid"
                                alt="">
                            <ul>

                                <li>seperti perlengkapan kantor, administrasi</li>
                                <li>contoh bolpen, buku, pensil </li>
                            </ul>

                        </div>
                    </div>

                </div>

            </div>

        </section>


        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>FASILITAS & TATA CARA PEMINJAMAN BARANG</h2>
                    <p>Pelayanan pada sistem ini meliputi :</p>
                </header>

                <div class="row">

                    <div class="col-lg-3">
                        
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pendataan Aset & Barang</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pendataan Barang Masuk</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Pencatatan Kondisi Barang</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Peminjaman Barang</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Penggunaan Barang keperluan Proyek</h3>
                                </div>
                            </div>

                            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Laporan data</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Feature Tabs -->
                <div class="container" data-aos="fade-up">
                    <div class="row feture-tabs" data-aos="fade-up">
                        <div class="col-lg-6">
                            <h3>Tata Cara Peminjaman</h3>

                            <!-- Tabs -->
                            <ul class="nav nav-pills mb-6">
                                <li>
                                    <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Peminjaman &
                                        Keperluan Projek</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-bs-toggle="pill" href="#tab2">Pengembalian Barang</a>
                                </li>
                                <li>
                                    <a class="nav-link" data-bs-toggle="pill" href="#tab3"> </a>
                                </li>

                            </ul><!-- End Tabs -->

                            <!-- Tab Content -->
                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="tab1"><br>

                                    <h4>1. Login / Sign Up</h4>
                                    <p>Karyawan yang akan meminjam barang untuk keperluan proyek kantor/ pribadi login
                                        ke sistem dengan memasukan email dan password. Apabila belum memiliki akun maka
                                        registrasi terlebih dahulu</p>
                                    <h4>2. Mengecek ketersediaan barang</h4>
                                    <p>Karyawan mengecek ketersediaan barang dan tanda bahwa barang tersebut boleh
                                        dipinjam</p>
                                    <h4>3. Mengisi Formulir peminjaman</h4>
                                    <p> Mengisi data peminjaman barang serta mengupload surat pengantar. Diharapkan
                                        karyawan yang hendak staff mengajukan peminjaman jauh-jauh hari sebelum
                                        penggunaan barang <br>
                                        note : peminjaman barang bergerak, elektronik max 1 item per jenis barang</p>

                                    <h4>4. Menunggu status persetujuan</h4>
                                    <p> Memantau status pengajuan untuk
                                        mengetahui pengajuan diterima atau ditolak. Memerlukan proses 3-5 hari</p>
                                    <h4>5. Mengambil barang</h4>
                                    <p> Apabila status peminjaman diterima, karyawan mengambil barang di kantor</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-number"></i>
                                        <h4></h4>
                                    </div>
                                    <p> </p>

                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi"></i>
                                        <h4></h4>
                                    </div>
                                    <p></p>
                                </div><!-- End Tab 1 Content -->



                                <div class="tab-pane fade show" id="tab2"><br>


                                    <h4>1. Karyawan Mengembalikan Barang ke kantor</h4>
                                    <p> karyawan mengembalikan barang sesuai tanggal yang ditentukan</p>
                                    <h4>2. Admin mengecek kondisi barang dan konfirmasi status pengembalian</h4><br>

                                    <h4>3. Peminjaman selesai</h4>
                                    
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi"></i>
                                        <h4></h4>
                                    </div>
                                    <p></p>
                                </div><!-- End Tab 2 Content -->

                                <div class="tab-pane fade show" id="tab3">
                                    <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita.
                                        Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.
                                    </p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                                    </div>
                                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima
                                        commodi dolorum non eveniet magni quaerat nemo et.</p>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="bi bi-check2"></i>
                                        <h4>Incidunt non veritatis illum ea ut nisi</h4>
                                    </div>
                                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                                        tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi
                                        at. Dolorem quo tempora. Quia et perferendis.</p>
                                </div><!-- End Tab 3 Content -->
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <img src="<?php echo e(asset('landingpages/assets/img/features-2.png')); ?>" class="img-fluid"
                                alt="">
                        </div>


                    </div><!-- End Feature Tabs -->
                    


                    <!-- Feature Icons -->

                    




                    <!-- ======= F.A.Q Section ======= -->
                    

                    

                    

                    

                </div>
            </div>

            </div>

            </div>

        </section><!-- End F.A.Q Section -->

        <!-- ======= Portfolio Section ======= -->
        

        

        



        <!-- ======= Contact Section ======= -->
        

        

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="<?php echo e(asset('landingpages/assets/img/logo.png')); ?>" alt="">
                            <span>Sistem Inventaris</span>
                        </a>
                        <p>LPTP- Lembaga Pengembangan Teknologi Pedesaan Surakarta</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Link kami</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang</a></li>

                            <li><i class="bi bi-chevron-right"></i> <a href="#">Tata Cara</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Kontak kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Pelayanan LPTP</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Training</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Magang</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Kelas Pertanian</a></li>


                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Kontak kami</h4>
                        <p>
                            Jl. Raya Palur Km. 5 Tagal Asri
                            RT.04/RW.06
                            Jurug
                            Ngringo<br>
                            Kecamatan Jaten
                            Kabupaten Karanganyar <br>
                            Jawa Tengah 57731
                            Indonesia<br><br>
                            <strong>Jam Buka:<br></strong> Senin - Jumat 08.00-16.00 WIB<br>
                            Sabtu-Minggu Tutup<br>
                            <strong>Phone:</strong> (0271) 826620<br>

                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>LPTP Surakarta</span></strong>. All Rights Reserved 2022
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('landingpages/assets/vendor/purecounter/purecounter.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpages/assets/vendor/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpages/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpages/assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpages/assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpages/assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpages/assets/vendor/php-email-form/validate.js')); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('landingpages/assets/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\tugas_akhir\invennnn\resources\views/landingpages.blade.php ENDPATH**/ ?>