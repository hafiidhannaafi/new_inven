
<?php $__env->startSection('content'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <script>
        console.log('sdhjfdskfsdfjsdjfksd');
        $("#tgl_pinjam").change(function() {
            console.log('sdfkjndipjgodkgdfgjdfgsdhjfdskfsdfjsdjfksd');
        });
    </script>

    <script>
        var next = 0
        var total = 1
        var notIn = []
        $(function() {

            $(document).on('click', '.btn-add', function(e) {
                e.preventDefault();

                if (total <= 4) {
                    $('#btn' + next).removeClass('btn-add').addClass('btn-remove')
                        .removeClass('btn-success').addClass('btn-danger')
                        .html('<i class="fa fa-minus" aria-hidden="true">-</i>')

                    next++
                    total++

                    $('#add-barang').append(`<div class="row entry my-2">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <select
                                            onchange="barangTerpilih(this)"
                                                class="form-control select2"
                                                data-live-search="true" name="barangs_id[]" id="barangs_id${next}">
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-5">
                                        <input class="form-control form-control" value=" "
                                            id="jumlah_pinjam[] "name="jumlah_pinjam[]" type="number"
                                            placeholder=" jumlah item ">
                                    </div>



                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-success btn-sm btn-add" id="btn${next}">
                                            <i class="fa fa-plus" aria-hidden="true">+</i>
                                        </button>
                                    </div>
                                </div>`)


                    $('#barangs_id' + next).select2({
                        theme: 'bootstrap-5',
                        cache: true,
                        placeholder: 'Pilih Barang',
                        ajax: {
                            url: '<?php echo route('select.barang'); ?>',
                            dataType: 'json',
                            delay: 400,
                            data: function(params) {
                                return {
                                    q: $.trim(params.term),
                                    id: notIn
                                };
                            },
                            processResults: function(data) {
                                return {
                                    results: $.map(data, function(item) {
                                        return {
                                            text: item.spesifikasi,
                                            id: item.id
                                        }
                                    })
                                };
                            },
                        },
                    });
                } else {
                    Swal.fire({
                        title: 'Mohon Maaf!',
                        text: 'Anda Tidak Dapat Menambah Barang Lagi',
                        icon: 'error',
                        // confirmButtonText: 'Cool'
                    })
                }


            }).on('click', '.btn-remove', function(e) {
                $(this).closest('.entry').remove();
                total--
                return false;
            });

            // $('#datefield').on('input', function() {
            //     $('#datefield2').attr('min', this.value);
            // });
            // $('#datefield2').on('input', function() {
            //     $('#datefield').attr('max', this.value);
            // });


        });
    </script>


    <script>
        function barangTerpilih(el) {
            notIn = $("select[name='barangs_id[]']").map(function() {
                return $(this).val();
            }).get();
            // console.log(notIn)
        }

        $(function() {

            $('#barangs_id0').select2({
                theme: 'bootstrap-5',
                cache: true,
                placeholder: 'Pilih Barang',
                ajax: {
                    url: '<?php echo route('select.barang'); ?>',
                    dataType: 'json',
                    delay: 400,
                    data: function(params) {
                        return {
                            q: $.trim(params.term),
                            id: notIn
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.spesifikasi,
                                    id: item.id
                                }
                            })
                        };
                    },
                },
            });

            $('#barangs_id1').select2({
                theme: 'bootstrap-5',
                cache: true,
                placeholder: 'Pilih Barang',
                ajax: {
                    url: '<?php echo route('select.barang'); ?>',
                    dataType: 'json',
                    delay: 400,
                    data: function(params) {
                        return {
                            q: $.trim(params.term),
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.spesifikasi,
                                    id: item.id
                                }
                            })
                        };
                    },
                },
            });
        })
    </script>
    <script>
        $(".js-example-diacritics").select2();
    </script>


    <script>
        $.fn.select2.amd.define('select2/HideSelectedResultsAdapter', ['select2/utils', 'select2/results'],
            function(Utils, ResultsList) {
                var HideSelectedResultsAdapter = function(decorated, $element, options, dataAdapter) {
                    return decorated.call(this, $element, options, dataAdapter);
                };

                HideSelectedResultsAdapter.prototype.append = function(decorated, data) {
                    return decorated.call(this, {
                        results: $.grep(data.results, function(element) {
                            return element.selected;
                        }, true)
                    });
                };

                return Utils.Decorate(ResultsList, HideSelectedResultsAdapter);
            }
        );

        // USAGE
        $(function() {
            $('#elem').select2({
                resultsAdapter: $.fn.select2.amd.require('select2/HideSelectedResultsAdapter')
            });
        });
    </script>





    





    <style>
        input[type="date"] {
            position: relative;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
        }
    </style>

    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center pb-0 fs-5">Formulir Peminjaman Barang</h5></br>

                <!-- validation Form Elements -->

                <form name="PeminjamanForm" action="<?php echo e(route('inputpeminjaman')); ?>" method="POST"
                    enctype="multipart/form-data" class=" needs-validation" novalidate>
                    <?php echo csrf_field(); ?>

                    <div class="row mb-3">
                        
                        <div class="col-sm-10">


                            <input type="hidden" id="validationCustom01" name="users_id" value=" <?php echo e(auth()->user()->id); ?>"
                                class="form-control" required readonly>


                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationCustom01" class="col-sm-2 col-form-label">Nama Peminjam</label>
                        <div class="col-sm-10">
                            <input type="text" id="validationCustom01" name="nama_peminjam"
                                value=" <?php echo e(auth()->user()->name); ?>" readonly class="form-control" required
                                placeholder=" nama peminjam">
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>




                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Peminjaman</legend>
                        <div class="col-sm-10">

                            <input class="form-check-input" type="radio" name="jenis_peminjaman" name="gridRadios"
                                id="gridRadios1" value="Pribadi" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Pribadi
                            </label>
                            <input class="form-check-input" type="radio" name="jenis_peminjaman" name="gridRadios"
                                id="gridRadios2" value="Keperluan Projek">
                            <label class="form-check-label" for="gridRadios2">
                                Keperluan Projek
                            </label>
                        </div>
                    </fieldset>

                    


                    <div class="row mb-3">
                        <label for="validationTooltip02" class="col-sm-2 col-form-label"> Tujuan Pinjam </label>
                        <div class="col-sm-10">
                            <input type="text" id="validationTooltip02" name="tujuan" class="form-control" required
                                placeholder=" ex. untuk keperluan proyek A, untuk mengantar keluarga">
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="validationTooltip05" class="col-sm-2 col-form-label">Tgl Pengajuan</label>
                        <div class="col-sm-10">
                            <input type="date" id="tgl_pengajuan" name="tgl_pengajuan" value="<?php echo date('Y-m-d'); ?>"
                                readonly class="form-control" required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="validationTooltip05" class="col-sm-2 col-form-label">Tgl Peminjaman</label>
                        <div class="col-sm-10">
                            <input type="date" id="datefield" name="tgl_pinjam" class="form-control" required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationTooltip05" class="col-sm-2 col-form-label">Tgl Pengembalian</label>
                        <div class="col-sm-10">
                            <input type="date" id="datefield2" name="tgl_kembali" class="form-control" required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationTooltip03" class="col-sm-2 col-form-label">Surat Pengantar</label>
                        <div class="col-sm-10">
                            <input type="file" id="validationTooltip03" name="surat_pinjam" class="form-control"required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="validationTooltip04" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" id="validationTooltip04" name="ket" class="form-control"required
                                placeholder=" isi jika diperlukan">
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        
                        <div class="col-sm-10">
                            <input type="hidden" id="validationTooltip04" value="4" name="status_konfirmasis_id"
                                class="form-control"required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>



                    <div class="row mb-3">
                        
                        <div class="col-sm-10">
                            <input type="hidden" id="validationTooltip04" value="1" name="status_peminjamans_id"
                                class="form-control"required>
                            <div class="invalid-feedback">
                                Harus di isi
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mt-3 border-top pt-2">
                        <div class="row targetDiv" id="div0">
                            <div id="group1" class="fvrduplicate">
                                <label for="validationTooltip06" style="float: center; " col-sm-6
                                    col-form-label>Peminjaman
                                    Barang</label>


                                <p class="small fst-italic">note : <br>- tekan tombol + jika
                                    barang yang dipinjam lebih dari 1. <br>
                                    - khusus kendaraan, mesin, dan elektronik max
                                    pinjam 1 item
                                    per barang </p>



                                <div class="row entry my-2">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <select onchange="barangTerpilih(this)" class="form-control select2"
                                                data-live-search="true" name="barangs_id[]" id="barangs_id0">
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <input class="form-control form-control" value=" "
                                            id="jumlah_pinjam[] "name="jumlah_pinjam[]" type="number"
                                            placeholder=" jumlah item ">
                                    </div>



                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-success btn-sm btn-add" id="btn0">
                                            <i class="fa fa-plus" aria-hidden="true">+</i>
                                        </button>
                                    </div>
                                </div>

                                <div id="add-barang"></div>
                            </div>
                        </div>
                    </div>


                    







                    <div class="card-footer">
                        <button style=" float :right; background-color:   #012970; color:#FFFFFF" type="submit"
                            class="btn btn btn-sm">Submit</button>
                    </div>
                </form><!-- End General Form Elements -->
            </div>


        </div>
        <script>
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }

            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById("datefield").setAttribute("min", today);
            document.getElementById("datefield2").setAttribute("min", today);
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\tugas_akhir\invennnn\resources\views/peminjaman/form.blade.php ENDPATH**/ ?>