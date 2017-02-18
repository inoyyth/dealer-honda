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

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="button" name="generate" id="generateTagihan" class="btn btn-danger">  Generate </button>
                                <button type="button" name="save" id="saveTagihan" class="btn btn-primary"> Save </button>
                                <button type="button" name="print" id="printTagihan" class="btn btn-default">
                                    <i class="glyphicon glyphicon-print"></i> Print 
                                </button>
                            </div>
                        </div>

                        <div id="printRekap">
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
                                    <label class="col-sm-12 control-label"></label>
                                    <div class="col-sm-12"></div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="col-sm-12 control-label">Sisa Tagihan</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="sisa_tagihan" id="sisa_tagihan" value="<?= formatrp($rkwitansi[0]['sisa_tagihan']); ?>" class="form-control rtagihan" value="0" readonly />
                                    </div>
                                </div>
                            </div>


                            <div style="clear: both;margin-bottom: 10px;"></div>

                            <table class="table table-bordered" id="tblRekapTagihan">
                                <thead>
                                    <tr>

                                        <td><input type="checkbox" name="cnokwitansi" class="cnokwitansi"></td>

                                        <td>No</td>
                                        <td>Tgl Kwitansi</td>
                                        <td>Nmr Kwitansi</td>
                                        <td>Nama</td>
                                        <td>Type</td>
                                        <td>No.Mesin</td>
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
            </div>

        </section>
    </div>
</div>

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

        $("#generateTagihan").click(function () {
            var idkwitansi_leasing = $('.idkwitansileasing:checked').map(function () {
                return this.value;
            }).get();
            var dtkwitansi = idkwitansi_leasing.join(",");

            var idkwitansi_leasing_uncheck = $('.idkwitansileasing:not(:checked)').map(function () {
                return this.value;
            }).get();
            var dtkwitansi_uncheck = idkwitansi_leasing_uncheck.join(",");

            $.ajax({
                type: "get",
                url: "<?php echo base_url('leasing/rekap_tagihan/get_rekap_tagihan_edit'); ?>",
                data: {dt: dtkwitansi, dtuncheck: dtkwitansi_uncheck},
                dataType: "json",
                success: function (hsl) {

                    var gsisa = [];
                    gsisa = $.map(hsl.data, function (val, i) {
                        var ss = val[11];
                        var sisa = ss.split('.').join("");
                        return parseInt(sisa);
                    });

                    var sisa = [];
                    sisa = $.map(hsl.data_uncheck, function (val, i) {
                        return parseInt(val.sisa_tagihan);
                    })

                    if (sisa.length > 0) {
                        var sisaTagihan = sisa.reduce((x, y) => x + y);
                        $("#sisa_tagihan").val(formatCurrency(sisaTagihan));
                    } else {
                        $("#sisa_tagihan").val(0);
                    }

                    if (gsisa.length > 0) {
                        var tot_tagihan = gsisa.reduce((x, y) => x + y);
                        $("#tot_tagihan").val(formatCurrency(tot_tagihan));
                    } else {
                        $("#tot_tagihan").val(0);
                    }
                }
            });

            return false;
        });

        $(".cnokwitansi").change(function () {
            $(".idkwitansileasing").prop('checked', this.checked);
        })

        $("#saveTagihan").click(function () {
            var saveTagihan = $(".rtagihan").serializeArray();

            var kwitansileasing = [];
            $.each($(".idkwitansileasing:checked"), function () {
                kwitansileasing.push($(this).val());
            });

            var kwitansileasinguncheck = [];
            $.each($(".idkwitansileasing:not(:checked)"), function () {
                kwitansileasinguncheck.push($(this).val());
            });

            var dt = {rtagihan: saveTagihan, kleasinguncheck: kwitansileasinguncheck, kleasing: kwitansileasing}
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('leasing/rekap_tagihan/update'); ?>",
                data: dt,
                dataType: "json",
                success: function (hsl) {
                    if (hsl.status == "success") {
                        alert(hsl.pesan)
                        $("#saveTagihan, #generateTagihan").attr('disabled', true);
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

    function printDiv(div) {
        // Create and insert new print section
        var elem = document.getElementById(div);
        var domClone = elem.cloneNode(true);
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        $printSection.appendChild(domClone);
        document.body.insertBefore($printSection, document.body.firstChild);

        window.print();

        // Clean up print section for future use
        var oldElem = document.getElementById("printSection");
        if (oldElem != null) {
            oldElem.parentNode.removeChild(oldElem);
        }
        //oldElem.remove() not supported by IE

        return true;
    }

</script>    