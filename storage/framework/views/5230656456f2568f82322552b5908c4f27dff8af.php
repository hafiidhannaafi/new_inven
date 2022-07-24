

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet" />
<div class="pagetitle">
    
    
</div><!-- End Page Title -->


<div class="row">
    <div class="col-lg-12">

        <!-- Default Card -->
        <div class="card">
            <div class="card-body">
                <h3>
                    <center>SISTEM INFORMASI INVENTARIS BARANG <BR> LEMBAGA PENGEMBANGAN TEKNOLOGI PEDESAAN (LPTP)
                </h3>
                <center>
                    <p>Jl. Raya Palur Km 5, Tegal Asri Rt 4/VI, Ngringo, Jaten, Karanganyar 57772, PO Box 313 Solo
                        57103
                        Phone (62) 0271-826620, 826259 (Hunting), Fax (62) 0271-825107 E-mail : lptp@lptp.or.id,
                        Website
                        : www.lptp.or.id</p>
                </center>
                <hr style="width:max;height:2px;">
                <h4><b>
                        <center>LAPORAN DATA BARANG MASUK</center>
                    </b></h4><br>


            </div>
        </div><!-- End Default Card -->


        <div class="card">
            <div class="card-body">



                <!-- Table with stripped rows -->
                <table id="example" class="table-border display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            
                            <th scope="col">Nama</th>
                            
                            <th scope="col">Tgl Masuk</th>
                            <th scope="col">Jumlah Satuan</th>
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
                                <td> <?php echo e($data->kondisi); ?></td>
                                <td> <?php echo e($data->ket); ?></td>


                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>

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
<?php /**PATH D:\tugas_akhir\invennnn\resources\views/laporan/cetakbarangmasuk.blade.php ENDPATH**/ ?>