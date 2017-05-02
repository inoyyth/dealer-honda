<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">

            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Rekap Tagihan</div>
                    <div class="col-md-6 pull-right text-right">
                        <a href="<?php echo base_url('rekap-tagihan'); ?>" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-fast-backward"></i> Cancel </a>
                    </div> 
                </div>
            </div>

            <div class="panel-body">
                <div class="block-web">

                    <div class="porlets-content">

                        <div class="form-group frmHeader">
                            <label class="col-sm-12 control-label">Tanggal</label>
                            <div class="col-sm-6">
                                <input type="text" name="tanggal_start" id="tanggal_start" parsley-trigger="change" class="frmrekap form-control datepicker">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="tanggal_end" id="tanggal_end" parsley-trigger="change" class="frmrekap form-control datepicker">
                            </div>
                        </div>

                        <div class="form-group frmHeader">
                            <label class="col-sm-12 control-label">Leasing</label>
                            <div class="col-sm-6">
                                <select name="kdleasing" id="kdleasing" required class="frmrekap form-control rtagihan">
                                    <option value="">Choose Leasing</option>
                                    <?php
                                    foreach ($dtleasing as $leasing) {
                                        $selected = "";
                                        if (isset($price_list)) {
                                            if ($price_list['leasing'] == $leasing['kd_leasing'] && $price_list['cara_pembelian'] == "Kredit") {
                                                $selected = "selected";
                                            }
                                        }
                                        ?>
                                        <option label="<?= $leasing['leasing']; ?>" value="<?= $leasing['kd_leasing']; ?>" <?php echo $selected; ?>><?= $leasing['leasing']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                        </div>

                        <div style="clear: both;margin-bottom: 10px;"></div>

                        <table class="table table-bordered" id="tblKwitansiLeasing">
                            <thead>
                                <tr>

                                    <td><input type="checkbox" name="cnokwitansi" class="cnokwitansi"></td>

                                    <td>No</td>
                                    <td>Tgl Kwitansi</td>
                                    <td>Nmr Kwitansi</td>
                                    <td>Nama</td>
                                    <td>No.Rangka</td>
                                    <td>OTR</td>
                                    <td>DP</td>
                                    <td>Subsidi</td>
                                    <td>Sisa</td>
                                    <!--<td>Price List</td>//-->
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>

                        <div style="clear: both;margin-bottom: 10px;"></div>

                        <br>
                        &nbsp;
                        <br>
                        <hr>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <?php
                                if ($this->router->fetch_method() <> "detail") {
                                    ?>
                                    <button type="submit" name="list" id="listTagihan" class="btn btn-warning"> List </button>
                                    <button type="button" name="add" id="addTagihan" class="btn btn-success">  Add </button>
                                    <button type="button" name="generate" id="generateTagihan" class="btn btn-danger">  Generate </button>
                                    <button type="button" name="save" id="saveTagihan" class="btn btn-primary"> Update </button>
                                <?php } ?>
                                <button type="button" name="print" id="printTagihan" class="btn btn-default">
                                    <i class="glyphicon glyphicon-print"></i> Print 
                                </button>

                            </div>
                        </div>


                        <h2 align='center'> REKAPAN TAGIHAN </h2>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">No. Tagihan</label>
                                <div class="col-sm-12">
                                    <input type="text" name="no_tagihan" id="no_tagihan" value="<?= $rkwitansi[0]['no_tagihan']; ?>" class="form-control rtagihan" readonly/>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">Leasing</label>
                                <div class="col-sm-12">
                                    <input type="hidden" name="kdleasing" id="kdleasing" value="<?= $rkwitansi[0]['kdleasing']; ?>" class="form-control">
                                    <input type="text" name="leasing" id="leasing" value="<?= $dtleasing[0]['leasing']; ?>" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">Dealer</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nmdealer" id="nmdealer" class="form-control" value="PT. Mandala Kekar Abadi" disabled />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">Tanggal Tagihan</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tgl_tagihan" id="tgl_tagihan" value="<?= date("Y-m-d", strtotime($rkwitansi[0]['tgl_tagihan'])); ?>" parsley-trigger="change" class="form-control rtagihan" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">Cabang Leasing <sup style="color:red">(*)</sup></label>
                                <div class="col-sm-12">
                                    <input type="text" name="cabang_leasing" id="cabang_leasing" class="form-control rtagihan" value="<?= $rkwitansi[0]['cabang_leasing']; ?>" required />
                                </div>
                            </div>
                            <div class="col-sm-6" style="display: none;">
                                <label class="col-sm-12 control-label">Sisa Tagihan</label>
                                <div class="col-sm-12">
                                    <input type="text" name="sisa_tagihan" id="sisa_tagihan" value="<?= formatrp($rkwitansi[0]['sisa_tagihan']); ?>" class="form-control rtagihan" value="0" readonly />
                                </div>
                            </div>
                        </div>


                        <div style="clear: both;margin-bottom: 10px;"></div>

                        <table class="table table-bordered" id="tblRekapTagihan" width="100%">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td>No</td>
                                    <td>Tgl Kwitansi</td>
                                    <td>Nmr Kwitansi</td>
                                    <td>Nama</td>
                                    <td>No.Rangka</td>
                                    <td>OTR</td>
                                    <td>DP</td>
                                    <td>Subsidi</td>
                                    <td>Sisa</td>
                                    <td>Price List</td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>


                        <div style="clear: both;margin-bottom: 10px;"></div>

                        <div class="col-md-12 col-xs-12">
                            <label class="col-sm-12 control-label">Total Tagihan :</label>
                            <div class="col-sm-12">
                                <input type="text" name="tot_tagihan" id="tot_tagihan" class="form-control rtagihan" placeholder="Total Tagihan" style="text-align: right;" value="<?= formatrp($rkwitansi[0]['tot_tagihan']); ?>" readonly>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>
</div>

<style>
    .modal-dialog {
        width: 90%;
    }
</style>

<div class="modal fade bs-example-modal-lg" id="modalCovernote" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div id="covernoteContent"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";
    $(document).ready(function () {

        $("#listTagihan").click(function () {
            var dt = $(".frmrekap").serialize();
            $.ajax({
                type: 'post',
                url: 'leasing/rekap_tagihan/dt_leasing_json',
                data: dt,
                dataType: 'json',
                success: function (hsl) {
                    $("#leasing").val(hsl.leasing.leasing);
                    $.getJSON("<?php echo base_url('leasing/rekap_tagihan/get_list_kwitansi?'); ?>" + dt, function (dtL) {
                        var gsisa = [];
                        gsisa = $.map(dtL.data, function (val, i) {
                            var ss = val[9];//val[11];
                            var sisa = ss.split('.').join("");
                            return parseInt(sisa);
                        });
                        if (gsisa.length > 0) {
                            var totCalc = gsisa.reduce((x, y) => x + y);
                            $("#sisa_tagihan").val(formatCurrency(totCalc));
                        } else {
                            $("#sisa_tagihan").val(0);
                        }
                    });
                    tableKL = $('#tblKwitansiLeasing').DataTable({
                        buttons: [
                            'selectAll',
                            'selectNone'
                        ],
                        language: {
                            buttons: {
                                selectAll: "Select all items",
                                selectNone: "Select none"
                            }
                        },
                        "destroy": true,
                        "processing": true, //Feature control the processing indicator.
                        "serverSide": true, //Feature control DataTables' server-side processing mode.
                        "ordering": false,
                        "order": [], //Initial no order.

                        // Load data for the table's content from an Ajax source
                        "ajax":
                                {
                                    "url": "<?php echo base_url('leasing/rekap_tagihan/get_list_kwitansi?'); ?>" + dt,
                                    "type": "POST"
                                },
                        //Set column definition initialisation properties.
                        "columnDefs": [
                            {
                                "targets": [0], //first column / numbering column
                                "orderable": false, //set not orderable
                                //"className": 'select-checkbox',
                            }
                        ],
                        select: {
                            style: 'multi'
                        }
                    });
                }
            })

            return false;
        })


        table = $('#tblRekapTagihan').DataTable({
            buttons: [
                'selectAll',
                'selectNone'
            ],
            language: {
                buttons: {
                    selectAll: "Select all items",
                    selectNone: "Select none"
                }
            },
            "destroy": true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "ordering": false,
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax":
                    {
                        "url": "<?php echo base_url('leasing/rekap_tagihan/get_drekap_edit'); ?>",
                        "type": "POST",
                        "data": {no_tagihan: $("#no_tagihan").val()}
                    },
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                    //"className": 'select-checkbox',
                }
            ],
            select: {
                style: 'multi'
            }
        });

        $("#addTagihan").click(function () {
            var idkwitansi_leasingnew = $('.idkwitansileasing:checked').map(function () {
                return this.value;
            }).get();
            var dtkwitansi = idkwitansi_leasingnew.join(",");
            var saveTagihan = $(".rtagihan").serializeArray();
            
            saveTagihan[6] = {name: 'id_kwitansi', value: dtkwitansi}
            //console.log(saveTagihan);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('leasing/rekap_tagihan/save_detail'); ?>",
                data: saveTagihan,
                dataType: "json",
                success: function (hsl) {
                    if (hsl.success == 1) {
                        alert(hsl.pesan);
                        table.ajax.reload();
                        tableKL.ajax.reload();
                    } else {
                        alert(hsl.pesan);
                    }
                }
            });

        })

        $("#generateTagihan").click(function () {
            var kdleasing = $("#kdleasing").val();
            if (kdleasing === "") {
                alert("LEASING harus dipilih terlebih dahulu !");
                return false;
            }

            var dtList = $(".frmrekap").serialize();
            $.getJSON("<?php echo base_url('leasing/rekap_tagihan/get_list_kwitansi_leasing?'); ?>" + dtList, function (dtL) {
                var gsisa = [];
                gsisa = $.map(dtL.data, function (val, i) {
                    var ss = val[9];//val[11];
                    var sisa = ss.split('.').join("");
                    return parseInt(sisa);
                });
                if (gsisa.length > 0) {
                    var totCalc = gsisa.reduce((x, y) => x + y);
                    $("#sisa_tagihan").val(formatCurrency(totCalc));
                } else {
                    $("#sisa_tagihan").val(0);
                }

            });

            var notagihan = $("#no_tagihan").val();
            var dt = {no_tagihan: notagihan}

            $.ajax({
                type: "post",
                url: base_url + "leasing/rekap_tagihan/get_drekap_edit",
                data: dt,
                dataType: "json",
                success: function (hsl) {
                    //console.log(hsl.data);
                    setTimeout(function () {
                        var gsisa = [];
                        gsisa = $.map(hsl.data, function (val, i) {
                            var ss = val[9];//val[11];
                            var sisa = ss.split('.').join("");
                            return parseInt(sisa);
                        });
                        if (gsisa.length > 0) {
                            var tot_tagihan = gsisa.reduce((x, y) => x + y);
                            var sisa_tagihan = $("#sisa_tagihan").val();
                            sisa_tagihan = sisa_tagihan.split('.').join("");
                            var stagihan = parseInt(sisa_tagihan) - parseInt(tot_tagihan);
                            $("#tot_tagihan").val(formatCurrency(tot_tagihan));
                            $("#sisa_tagihan").val(formatCurrency(stagihan));
                        } else {
                            $("#tot_tagihan").val(0);
                            $("#sisa_tagihan").val(0);
                        }
                        alert("Data telah di generated !");

                    }, 1000);
                }
            });

            return false;
        });

        $(".cnokwitansi").change(function () {
            $(".idkwitansileasing").prop('checked', this.checked);
        })

        $("#saveTagihan").click(function () {
            var saveTagihan = $(".rtagihan").serializeArray();
            var plist = $(".price_list").serializeArray();
            
            var dt = {rtagihan: saveTagihan, price_list:plist}
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('leasing/rekap_tagihan/update'); ?>",
                data: dt,
                dataType: "json",
                success: function (hsl) {
                    if (hsl.status == "success") {
                        alert(hsl.pesan)
                        //$("#saveTagihan, #generateTagihan").attr('disabled', true);
                    } else {
                        alert(hsl.pesan);
                    }
                }
            });
            return false;

        });


        $("#printTagihan").click(function () {
            //printDiv('printRekap');
            var no_tagihan = $("#no_tagihan").val();
            //no_tagihan = no_tagihan.split('/').join("_");
            $("#covernoteContent").load(base_url + "leasing/rekap_tagihan/print_rekap_tagihan?notagihan=" + no_tagihan);
            $('#modalCovernote').modal('show');

            return false;
        })

    })

    function hapusDetail(idkwitansi) {
        var dt = {id_kwitansi: idkwitansi}

        $.ajax({
            type: "post",
            url: "<?php echo base_url('leasing/rekap_tagihan/delete_detail'); ?>",
            data: dt,
            dataType: "json",
            success: function (hsl) {
                if (hsl.success == 1) {
                    alert("Data berhasil diupdate !");
                    table.ajax.reload();
                }
            }
        })
    }


</script>    