
<?php $__env->startSection('content'); ?>
    

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" />

    <main id="main" class="main">

        <div class="pagetitle">
            
            
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Data Barang Masuk</h5>

                            <form action="/filterbarangmasuk" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Dari </label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tglawal" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Ke</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="tglakhir" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <button style=" float :right; background-color:   #012970; color:#FFFFFF"
                                            type="submit" class="btn btn-sm">Search</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div><!-- End Default Card -->

                    <?php if(isset($data)): ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Data Barang Masuk</h5>
                                <a href="/laporanbarangmasuk/<?php echo e($startDate); ?>/<?php echo e($endDate); ?>"
                                    class="btn btn-secondary btn-sm float-right mr-4"><i class="bi bi-print"></i> Cetak
                                    Laporan </a> <br>
                                <br>


                                <!-- Table with stripped rows -->
                                <table id="example" class="table-border display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>

                                            <th scope="col">Nama</th>

                                            <th scope="col">Tgl Masuk</th>
                                            <th scope="col">Jumlah Satuan</th>
                                            <th scope="col">Supplier</th>
                                            <th scope="col">Kondisi</th>
                                            <th scope="col">Ket</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        ?>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th><?php echo e($nomor++); ?></th>
                                                <td> <?php echo e($data->barangs->kode); ?> -
                                                    <?php echo e($data->barangs->jenis_barangs->jenis_barang); ?>

                                                    <?php echo e($data->barangs->spesifikasi); ?> </td>
                                                <td> <?php echo e($data->tanggal_masuk); ?></td>
                                                <td> <?php echo e($data->jumlah_masuk); ?></td>
                                                <td> <?php echo e($data->supplier); ?></td>
                                                <td> <?php echo e($data->kondisi); ?></td>
                                                <td> <?php echo e($data->ket); ?></td>


                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->

                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>


            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    });
                });
            </script>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/laporan/barangmasuk.blade.php ENDPATH**/ ?>