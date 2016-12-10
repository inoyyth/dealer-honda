<div class="row">
    <div class="col-md-12">
        <div class="block-web">
            <button type="button" name="edit" id="edit" class="btn btn-default">Edit</button>
        </div>
    </div>

    <form action="<?php echo base_url("penjualan-save"); ?>" class="form-horizontal row-border" id="frmtransaksi" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Transaksi</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" class="form-control">
                            <input type="text" name="noso" id="noso" parsley-trigger="change"  readonly="true" value="<?php echo $codeso; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="text" name="tanggal" id="tanggal" parsley-trigger="change" required placeholder="Pilih Tanggal" class="form-control datepicker">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Mesin</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="hidden" name="id_motor" id="id_motor">
                                <input type="text" readonly="true" name="nomsn" id="nomsn" parsley-trigger="change" placeholder="Pilih No Mesin" class="form-control">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBrowse">Browse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="norangka" id="norangka" parsley-trigger="change" readonly="true" placeholder="No Rangka" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Motor</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_motor" id="nama_motor" parsley-trigger="change" readonly="true" placeholder="Nama Motor" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna" id="warna" parsley-trigger="change" readonly="true" placeholder="Warna" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="text" name="tahun" id="tahun" parsley-trigger="change" readonly="true" placeholder="Tahun" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Varian</label>
                        <div class="col-sm-9">
                            <input type="text" name="varian" id="varian" parsley-trigger="change" readonly="true" placeholder="Warna" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga OTR</label>
                        <div class="col-sm-9">
                            <input type="text" name="harga_otr" id="harga_otr" parsley-trigger="change" required readonly="true" placeholder="Harga OTR" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pembelian Secara</label>
                        <div class="col-sm-9">
                            <?php foreach ($cpembelian as $pembelian) { ?>
                                <label class="radio-inline">
                                    <input type="radio" id="inlineradio1" class="carapembelian" name="cara_pembelian" value="<?= $pembelian->value; ?>">
                                    <?= $pembelian->value; ?> </label>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Marketing</label>
                        <div class="col-sm-9">
                            <input type="text" name="marketing" id="marketing" parsley-trigger="change" required placeholder="Nama Marketing" class="form-control">
                        </div>
                    </div>

                    <div class="form-group"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Customer</h3>
                </div>
                <div class="porlets-content dtcustomer">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ID / No. KTP</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_ktp" id="no_ktp" parsley-trigger="change" required placeholder="ID No. / No. KTP" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_customer" id="nama_customer" parsley-trigger="change" required placeholder="Nama di KTP" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="tempat_lahir_customer" id="tempat_lahir_customer" parsley-trigger="change" required placeholder="Tempat Lahir" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" name="tanggal_lahir_customer" id="tanggal_lahir_customer" parsley-trigger="change" required placeholder="Tanggal Lahir" class="form-control datepicker">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <select name="kelamin_customer" id="kelamin_customer" parsley-trigger="change" required class="form-control">
                                <option value="">Jenis Kelamin</option>
                                <option value="P">Pria</option>
                                <option value="W">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea name="alamat_customer" id="alamat_customer" parsley-trigger="change" required placeholder="Isi Alamat Customer" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">RT / RW</label>
                        <div class="col-sm-4">
                            <input type="text" name="rt" id="rt" parsley-trigger="change" required placeholder="RT Customer" class="form-control">
                        </div>
                        <div class="col-sm-1"> / </div>
                        <div class="col-sm-4">
                            <input type="text" name="rw" id="rw" parsley-trigger="change" required placeholder="RW Customer" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Wilayah</label>
                        <div class="col-sm-9">
                            <input type="text" name="wilayah" id="wilayah" parsley-trigger="change" required placeholder="Wilayah Customer" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Kelurahan</label>
                        <div class="col-sm-9">
                            <input type="text" name="kelurahan" id="kelurahan" parsley-trigger="change" required placeholder="Kelurahan Customer" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Kecamatan</label>
                        <div class="col-sm-9">
                            <input type="text" name="kecamatan" id="kecamatan" parsley-trigger="change" required placeholder="Kecamatan Customer" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Telp.</label>
                        <div class="col-sm-9">
                            <input type="text" name="telepon_customer" id="telepon_customer" parsley-trigger="change" required placeholder="Telp. Cusomer" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">HP.</label>
                        <div class="col-sm-9">
                            <input type="text" name="handphone_customer" id="handphone_customer" parsley-trigger="change" required placeholder="HP. Customer" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web cpembelian"></div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="form-group">
                    <div class="col-sm-12">
                        <button name="submit" id="simpan" class="btn btn-primary">Save</button>
                        <button type="reset" name="cancel" id="cancel" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="modalBrowse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List Motor</h4>
            </div>
            <div class="modal-body">
                <table style="width: 100%;" class="display table table-bordered table-hover" id="listmotor">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>No. Mesin</th>
                            <th>No. Rangka</th>
                            <th>Nama</th>
                            <th>Warna</th>
                            <th>Tahun</th>
                            <th>Varian</th>
                            <th>Harga OTR</th>
                        </tr>
                    </thead>
                    <tbody id="mesinList">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Apply</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        //$('#modalBrowse').modal({backdrop: 'static', keyboard: false})  
        //datatables
        table = $('#listmotor').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('t_penjualan/get_list_motor') ?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                    "className": 'select-checkbox',
                },
                {
                    "targets": [1],
                    "visible": false
                }
            ],
            select: {
                style: 'single'
            },
        });

        $('#listmotor tbody').on('click', 'tr', function () {
            var row = $(this).closest('tr');
            var data = $('#listmotor').dataTable().fnGetData(row);
            //console.log(data[3]);
            $("#id_motor").val(data[1]);
            $("#nomsn").val(data[2]);
            $("#norangka").val(data[3]);
            $("#nama_motor").val(data[4]);
            $("#warna").val(data[5]);
            $("#tahun").val(data[6]);
            $("#varian").val(data[7]);
            $("#harga_otr").val(data[8]);
        });

        $("#no_ktp").focusout(function () {
            var ktp = $(this).val();

            var dt = {no_ktp: ktp};
            $.ajax({
                type: "post",
                url: "t_penjualan/load_customer_by_ktp",
                data: dt,
                dataType: "json",
                success: function (hasil) {
                    $.map(hasil, function (value, index) {
                        if (index != "no_ktp")
                            if (document.getElementById(index)) {
                                $("#" + index).val(value);
                            }
                    });
                }
            });
            return false;
        })

        $("#edit").on("click", function () {
            $("#noso").removeAttr("readonly");
        });

        $("#cancel").on("click", function () {
            document.getElementById('noso').readOnly = true;
        });

        $("#noso").focusout(function () {
            var noso = $(this).val();
            var dt = {noso: noso};
            $.ajax({
                type: "post",
                url: "t_penjualan/load_transaction_by_noso",
                data: dt,
                dataType: "json",
                success: function (hasil) {
                    $.map(hasil, function (value, index) {
                        if (index != "noso") {
                            if (index != "cara_pembelian") {
                                if (document.getElementById(index)) {
                                    if (index != "handphone_customer" && index != "no_ktp") {
                                        if ($.isNumeric(value)) {
                                            $("#" + index).val(formatCurrency(value));
                                        } else {
                                            $("#" + index).val(value);
                                        }
                                    } else {
                                        $("#" + index).val(value);
                                    }
                                }
                            } else {
                                $('input:radio[name="' + index + '"][value="' + value + '"]').prop('checked', true);
                                $(".carapembelian").change();
                                setTimeout(function () {
                                    $.ajax({
                                        type: "post",
                                        url: "t_penjualan/load_transaction_price_by_noso",
                                        data: dt,
                                        dataType: "json",
                                        success: function (hsl) {
                                            $.map(hsl, function (value, index) {
                                                if ($(".cpembelian").find("#" + index)) {
                                                    if (index != "handphone_customer" && index != "no_ktp") {
                                                        if ($.isNumeric(value)) {
                                                            $("#" + index).val(formatCurrency(value));
                                                        } else {
                                                            $("#" + index).val(value);
                                                        }
                                                    } else {
                                                        $("#" + index).val(value);
                                                    }
                                                }
                                            });

                                        }
                                    });
                                }, 1000);
                            }
                        }

                    });
                }
            });
            return false;
        });

        $(".carapembelian").on("change", function () {
            var cpembelian = $('.carapembelian:checked').val();
            $(".cpembelian").empty();
            $(".cpembelian").load("t_penjualan/load_cpembelian/" + cpembelian);
        });

    });
</script>