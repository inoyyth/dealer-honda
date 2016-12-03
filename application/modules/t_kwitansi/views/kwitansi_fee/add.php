<div class="row">
    <div class="col-md-12">
        <div class="block-web">
            <button type="button" name="edit" id="edit" class="btn btn-default">Edit</button>
        </div>
    </div>

    <form action="<?php echo base_url("kwitansi-dp-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Kwitansi Fee</h3>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No Sales Order</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" class="form-control">
                                <input type="text" name="noso" id="noso" parsley-trigger="change" required readonly="true" value=" " class="form-control">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" id="Nama" parsley-trigger="change" required placeholder="Nama Customer" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Harga OTR</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_otr" id="harga_otr" parsley-trigger="change"     placeholder="Harga OTR" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Fee</label>
                            <div class="col-sm-9">
                                <input type="text" name="fee" id="fee" parsley-trigger="change"     placeholder="Fee" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Terbilang</label>
                            <div class="col-sm-9">
                                <textarea name="terbilang"  class="form-control"> </textarea>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Kwitansi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_kwitansi" id="no_kwitansi" parsley-trigger="change" required placeholder="No. Kwitansi" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No.Rangka</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rangka" id="no_rangka" parsley-trigger="change"     placeholder="No.Rangka" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Mesin</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_mesin" id="no_mesin" parsley-trigger="change"     placeholder="No. Mesin" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Type</label>
                            <div class="col-sm-9">
                            <input type="text" name="type" id="type" parsley-trigger="change" required   placeholder="Type" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                                <input type="text" name="warna" id="warna" parsley-trigger="change" required   placeholder="Warna" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <button name="submit" id="new" class="btn btn-primary">New</button>
                    <button type="submit" name="save" id="save" class="btn btn-danger">Save</button>
                    <button type="submit" name="New" id="edit" class="btn btn-default">Edit</button>
                    <button type="submit" name="cancel" id="cancel" class="btn btn-default">Cancel</button>
                    <button type="submit" name="print" id="print" class="btn btn-default">Print</button>
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