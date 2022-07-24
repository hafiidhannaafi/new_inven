 <!-- ======= Sidebar Admin ======= -->
 <?php if(auth()->user()->roles_id == '1'): ?>
     <aside id="sidebar" class="sidebar">
         <ul class="sidebar-nav" id="sidebar-nav">


             <li class="nav-item <?php echo e(request()->is('redirects*') ? 'active' : ''); ?>">
                 <a class="nav-link collapsed" href="<?php echo e(url('/dashboard')); ?>">
                     <i class="bi bi-grid"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#formss-nav" data-bs-toggle="collapse" href="#">
                     <i class="bi bi-person"></i><span>Data User</span><i class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="formss-nav" class="nav-content collapse <?php echo $__env->yieldContent('formss-nav'); ?>" data-bs-parent="#sidebar-nav">
                     <li>
                         <a class="<?php echo $__env->yieldContent('datauser'); ?>" href="<?php echo e(url('data-user')); ?> ">
                             <i class="bi bi-circle"></i><span>Staff Peminjam</span>
                         </a>
                     </li>
                     <li>
                         <a class="<?php echo $__env->yieldContent('dataadmin'); ?>" href="<?php echo e(url('data-admin')); ?>">
                             <i class="bi bi-circle"></i><span>Admin</span>
                         </a>
                     </li>
                     <li>
                         <a class="<?php echo $__env->yieldContent('datakepala'); ?>" href="<?php echo e(url('data-kepala')); ?>">
                             <i class="bi bi-circle"></i><span>Kepala Unit</span>
                         </a>
                     </li>
                 </ul>
             </li><!-- End Forms Nav -->

             <li class="nav-item <?php echo $__env->yieldContent('components-nav'); ?>">
                 <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse">
                     <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="components-nav" class="nav-content collapse <?php echo $__env->yieldContent('components-nav'); ?>" data-bs-parent="#sidebar-nav">

                     <li>
                         <a class=" <?php echo $__env->yieldContent('jenisaset'); ?>" href="<?php echo e(url('/datajenisaset')); ?>">
                             <i class="bi bi-circle"></i><span>Data Jenis Aset</span>
                         </a>
                     </li>

                     <li>
                         <a class=" <?php echo $__env->yieldContent('asalperolehan'); ?>" href="<?php echo e(url('dataasalperolehan')); ?>">
                             <i class="bi bi-circle"></i><span>Data Asal Perolehan</span>
                         </a>
                     </li>

                     <li>
                         <a class=" <?php echo $__env->yieldContent('datasatuan'); ?>" href="<?php echo e(url('/datasatuan')); ?>">
                             <i class="bi bi-circle"></i><span>Data Satuan</span>
                         </a>
                     </li>

                     <li>
                         <a class=" <?php echo $__env->yieldContent('jenisbarang'); ?>" href="<?php echo e(url('/jenisbarang')); ?>">
                             <i class="bi bi-circle"></i><span>Data Jenis Barang</span>
                         </a>
                     </li>

                     

                     
                     


                 </ul>
             </li><!-- End Forms Nav -->



             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                     <i class="bi bi-journal-text"></i><span>Data Jenis Aset</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="forms-nav" class="nav-content collapse  <?php echo $__env->yieldContent('forms-nav'); ?>" data-bs-parent="#sidebar-nav">

                     <li>
                         <a class=" <?php echo $__env->yieldContent('asetbergerak'); ?>" href="<?php echo e(url('/data-asetbergerak')); ?>">
                             <i class="bi bi-circle"></i><span>Data Aset Bergerak</span>
                         </a>
                     </li>

                     <li>
                         <a class=" <?php echo $__env->yieldContent('asettidakbergerak'); ?>" href="<?php echo e(url('/data-aset')); ?>">
                             <i class="bi bi-circle"></i><span>Data Tidak Bergerak</span>
                         </a>
                     </li>

                     <li>
                         <a class=" <?php echo $__env->yieldContent('peralatan'); ?>" href="<?php echo e(url('/data-peralatan')); ?> ">
                             <i class="bi bi-circle"></i><span>Data Peralatan</span>
                         </a>
                     </li>
                     <li>
                         <a class=" <?php echo $__env->yieldContent('perlengkapan'); ?>" href="<?php echo e(url('/data-perlengkapan')); ?> ">
                             <i class="bi bi-circle"></i><span>Data Perlengkapan</span>
                         </a>
                     </li>
                 </ul>
             </li><!-- End Forms Nav -->

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                     href="<?php echo $__env->yieldContent('charts-nav'); ?>">
                     <i class="bi bi-bar-chart <?php echo $__env->yieldContent('charts-nav'); ?>"></i><span>Pencatatan</span><i
                         class="bi bi-chevron-down ms-auto <?php echo $__env->yieldContent('charts-nav'); ?>"></i>
                 </a>
                 <ul id="charts-nav" class="nav-content collapse  <?php echo $__env->yieldContent('charts-nav'); ?>" data-bs-parent="#sidebar-nav">

                     <li>
                         <a class="<?php echo $__env->yieldContent('barangmasuk'); ?>" href="<?php echo e(url('/barang-masuk')); ?>">
                             <i class="bi bi-circle"></i><span>Stok Masuk</span>
                         </a>
                     </li>

                     <li>
                         <a class="<?php echo $__env->yieldContent('barangkeluar'); ?>" href="<?php echo e(url('/barang-keluar')); ?>">
                             <i class="bi bi-circle"></i><span>Stok/Barang Keluar</span>
                         </a>
                     </li>



                 </ul>
             </li><!-- End Charts Nav -->

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#iconss-nav" data-bs-toggle="collapse" href="#">
                     <i class="bi bi-cart" <?php echo $__env->yieldContent('iconss-nav'); ?>></i><span>Data Transaksi</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="iconss-nav" class="nav-content collapse" <?php echo $__env->yieldContent('iconss-nav'); ?> data-bs-parent="#sidebar-nav">
                     <li>
                         <a class="<?php echo $__env->yieldContent('riwayat'); ?>" href="<?php echo e(url('/peminjaman/peminjaman')); ?>">
                             <i class="bi bi-circle"></i><span>Data Peminjaman</span>
                         </a>
                     </li>

                     <li>
                         <a class="<?php echo $__env->yieldContent('riwayat'); ?>" href="<?php echo e(url('/peminjaman/riwayat')); ?>">
                             <i class="bi bi-circle"></i><span>Riwayat Peminjaman</span>
                         </a>
                     </li>

                     



                 </ul>
             </li><!-- End Icons Nav -->

             <li class="nav-item <?php echo e(request()->is('redirects*') ? 'active' : ''); ?>">
                 <a class="nav-link collapsed" href="<?php echo e(url('/laporan/menu')); ?>">
                     <i class="bi bi-layout-text-window-reverse"></i>
                     <span>Laporan</span>
                 </a>
             </li>



         </ul>

     </aside><!-- End Sidebar Admin-->
 <?php endif; ?>


 <!-- ======= Sidebar Kepala Unit ======= -->
 <?php if(auth()->user()->roles_id == '2'): ?>
     <aside id="sidebar" class="sidebar">

         <ul class="sidebar-nav" id="sidebar-nav">

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="<?php echo e(url('/dashboard')); ?>">
                     <i class="bi bi-grid"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="<?php echo e(url('/kepalaunit/pengajuan')); ?>">
                     <i class="bi bi-menu-button-wide"></i>
                     <span>Data Pengajuan</span>
                 </a>
             </li>


             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#formsss-nav" data-bs-toggle="collapse"
                     href="#">
                     <i class="bi bi-journal-text"></i><span>Data Aset</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="formsss-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                     <li>
                         <a class=" <?php echo $__env->yieldContent('asetbergerak'); ?>" href="/aset/bergerak">
                             <i class="bi bi-circle"></i><span>Data Aset Bergerak</span>
                         </a>
                     </li>
                     <li>
                         <a class=" <?php echo $__env->yieldContent('asettidakbergerak'); ?>" href="/aset/tidakbergerak">
                             <i class="bi bi-circle"></i><span>Data Aset Tidak Bergerak</span>
                         </a>
                     </li>
                     <li>
                         <a class=" <?php echo $__env->yieldContent('asetperalatan'); ?>" href="/aset/peralatan">
                             <i class="bi bi-circle"></i><span>Data Peralatan</span>
                         </a>
                     </li>
                     <li>
                         <a class=" <?php echo $__env->yieldContent('asetperlengkapan'); ?>"href="/aset/perlengkapan">
                             <i class="bi bi-circle"></i><span>Data Perlengkapan</span>
                         </a>
                     </li>
                 </ul>
             </li><!-- End Forms Nav -->

             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                     href="#">
                     <i class="bi bi-bar-chart"></i><span>Pencatatan</span><i class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                     <li>
                         <a class="active" href="/pencatatan/barangmasuk">
                             <i class="bi bi-circle"></i><span>Stok Masuk</span>
                         </a>
                     </li>
                     <li>
                         <a class="active" href="/pencatatan/barangkeluar">
                             <i class="bi bi-circle"></i><span>Stok/ Barang Keluar</span>
                         </a>
                     </li>



                 </ul>
             </li><!-- End Charts Nav -->

             <li class="nav-item <?php echo e(request()->is('redirects*') ? 'active' : ''); ?>">
                 <a class="nav-link collapsed" href="<?php echo e(url('/laporan/menu')); ?>">
                     <i class="bi bi-layout-text-window-reverse"></i>
                     <span>Laporan</span>
                 </a>
             </li>


         </ul>
         </li>


         </ul>

     </aside><!-- End Sidebar Kepala unit-->
 <?php endif; ?>

 <!-- ======= Sidebar Peminjam ======= -->
 <?php if(auth()->user()->roles_id == '3'): ?>
     <aside id="sidebar" class="sidebar">

         <ul class="sidebar-nav" id="sidebar-nav">

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="<?php echo e(url('/dashboard')); ?>">
                     <i class="bi bi-grid"></i>
                     <span>Dashboard</span>
                 </a>
             </li>

             

             
             


             




             <!-- End Forms Nav -->

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="<?php echo e(url('/cekdata')); ?>">
                     <i class="bi bi-journal-text"></i>
                     <span>Cek Data Barang</span>
                 </a>
             </li>


             <li class="nav-item ">
                 <a class="nav-link collapsed" href="<?php echo e(url('/peminjaman/form')); ?>">
                     <i class="bi bi-journal-text"></i>
                     <span>Formulir Peminjaman</span>
                 </a>
             </li>

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="<?php echo e(url('/staff/peminjaman')); ?>">
                     <i class="bi bi-cart"></i>
                     <span>Proses Peminjaman</span>
                 </a>
             </li>

             <li class="nav-item ">
                 <a class="nav-link collapsed" href="<?php echo e(url('/staff/riwayat')); ?> ">
                     <i class="bi bi-cart-check-fill"></i>
                     <span>Riwayat Peminjaman</span>
                 </a>
             </li>





         </ul>

     </aside><!-- End Sidebar peminjam-->
 <?php endif; ?>
<?php /**PATH D:\tugas_akhir\invennnn\resources\views/layouts/includes/sidebar.blade.php ENDPATH**/ ?>