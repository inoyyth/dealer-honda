<div class="row">

    <form action="<?php echo base_url("kwitansi-dp-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Kwitansi DP</h3>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Kwitansi</label>
                        <div class="col-sm-9">
                            <input type="text" name="nokwitansi" id="nokwitansi" parsley-trigger="change" placeholder="No. Kwitansi" value="<?= $nokwitansi; ?>" required readonly="true" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                   
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" value="" class="form-control">
                            <input type="text" name="noso" id="noso" parsley-trigger="change" placeholder="No. Sales Order" required class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_customer" id="nama_customer" parsley-trigger="change" required placeholder="Nama Customer" readonly="true" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga OTR</label>
                        <div class="col-sm-9">
                            <input type="text" name="harga_otr" id="harga_otr" parsley-trigger="change" required placeholder="Harga OTR" readonly="true" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">DP</label>
                        <div class="col-sm-9">
                            <input type="text" name="dp" id="dp" parsley-trigger="change" required   placeholder="DP Keseluruhan" readonly="true" class="form-control">
                        </div>
                    </div>
                    
                       <div class="form-group">
                        <label class="col-sm-3 control-label">Pembelian Secara</label>
                        <div class="col-sm-9">
                            <input type="text" name="cara_pembelian" id="cara_pembelian" parsley-trigger="change" readonly="true" required placeholder="Pembelian Secara" class="form-control">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Transaksi</label>
                        <div class="col-sm-9">
                            <select name="transaksi" id="transaksi" class="form-control">
                                <option value="">DP 1</option>
                                <option value="">DP 2</option>
                                <option value="">DP 3</option>
                                <option value="">DP 4</option>
                                <option value="">Pelunasan </option>
                                <option value="">Pelunasan DP</option>
                            </select>
                            
                        </div>
                    </div>

                 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nominal</label>
                        <div class="col-sm-9">
                            <input type="text" name="nominal" id="nominal" parsley-trigger="change"  placeholder="Nominal" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sisa</label>
                        <div class="col-sm-9">
                            <input type="text" name="sisa" id="sisa" parsley-trigger="change" readonly="true" required placeholder="Sisa" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Mesin</label>
                        <div class="col-sm-9">
                            <input type="text" name="nomsn" id="nomsn" parsley-trigger="change" readonly="true" placeholder="No.Mesin" class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="norangka" id="norangka" parsley-trigger="change" readonly="true" placeholder="No.Rangka" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-9">
                            <input type="text" name="tipe_motor" id="tipe_motor" parsley-trigger="change" readonly="true" placeholder="Type" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna_motor" id="warna_motor" parsley-trigger="change" readonly="true" placeholder="Warna" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Terbilang</label>
                        <div class="col-sm-9">
                            <textarea name="terbilang" id="terbilang" readonly="true" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="form-group">
                    <button type="button" name="new_kwitansidp" id="new_kwitansidp" class="btn btn-default">New</button>
                    <button name="submit" id="simpan" class="btn btn-primary">Save</button>
                    <button type="reset" name="cancel" id="cancel" class="btn btn-danger">Cancel</button>
                    <button type="button" name="print_kwitansidp" id="print_kwitansidp" class="btn btn-success">Print</button>
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

        $("#edit").on("click", function () {
            //$("#noso").removeAttr("readonly");
        });

        $("#cancel").on("click", function () {
            
        });

        $("#noso").focusout(function () {
            var noso = $(this).val();
            var dt = {noso: noso};
            $.ajax({
                type: "post",
                url: "t_kwitansi/t_kwitansidp/load_transaction_by_noso",
                data: dt,
                dataType: "json",
                success: function (hasil) {
                    //console.log(hasil);
                    $.map(hasil, function (value, index) {
                        if (index != "noso" && index != "id") {
                            if (document.getElementById(index)) {
                                if ($.isNumeric(value)) {
                                    $("#" + index).val(formatCurrency(value));
                                } else {
                                    $("#" + index).val(value);
                                }
                            }
                        }

                    });
                }
            });
            return false;
        });

        $("#nominal").focusout(function () {
            var nominal = $(this).val();
            $.post("t_kwitansi/t_kwitansidp/terbilang/", {nominal: nominal}).done(function (data) {
                $("#terbilang").text(data);
            });
            
            var number = parseFloat(nominal.split('.').join(""));
            var hargaotr = $("#harga_otr").val();
            var dp = $("#dp").val();
            var dpnumber = parseFloat(dp.split('.').join(""));
            var sisahutang = parseFloat(hargaotr.split(".").join("")) - (dpnumber + number);
            
            $("#sisa").val(sisahutang);
            return false;
        });
        
        $("#new_kwitansidp").click(function(){
            window.location = "kwitansi-dp-tambah";
        })

    });
</script>