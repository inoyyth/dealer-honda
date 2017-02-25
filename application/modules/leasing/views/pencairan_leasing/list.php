<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">

            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Pencairan Leasing</div>
                    <div class="col-md-6 pull-right text-right">
                        <a href="<?php echo base_url('pencairan-leasing'); ?>" class="btn btn-default btn-sm"><i class="glyphicon glyphicon-fast-backward"></i> Cancel </a>
                    </div> 
                </div>
            </div>

            <div class="panel-body">
                <div class="block-web">

                    <div class="porlets-content">

                        <div class="form-group">
                            <div class="col-sm-12">
                                <?php
                                if ($this->router->fetch_method() <> "detail") {
                                    ?>
                                    <button type="button" name="generate" id="generateTagihan" class="btn btn-danger">  Generate </button>
                                    <button type="button" name="save" id="saveTagihan" class="btn btn-primary" disabled> Save </button>
                                <?php } ?>
                                <button type="button" name="print" id="printTagihan" class="btn btn-default" disabled>
                                    <i class="glyphicon glyphicon-print"></i> Print 
                                </button>

                            </div>
                        </div>


                        <h2 align='center'> PENCAIRAN LEASING  <?= $dtleasing[0]['leasing']; ?></h2>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">No. Tagihan</label>
                                <div class="col-sm-12">
                                    <input type="text" name="no_tagihan" id="no_tagihan" value="<?= $rekap_tagihan[0]['no_tagihan']; ?>" class="form-control rtagihan" readonly/>
                                </div>
                            </div>

                            <div class="col-sm-6">

                            </div>
                        </div>
                        <div style="clear: both; margin-bottom: 5px;"></div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">Tanggal Tagihan</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tgl_tagihan" id="tgl_tagihan" parsley-trigger="change" class="form-control pleasing rtagihan" value="<?= date('Y-m-d', strtotime($rekap_tagihan[0]['tgl_tagihan'])); ?>" readonly />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">Tanggal Pencairan</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tgl_pencairan" id="tgl_pencairan" parsley-trigger="change" class="form-control pleasing datepicker rtagihan">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">Cabang Leasing <sup style="color:red">(*)</sup></label>
                                <div class="col-sm-12">
                                    <input type="text" name="cabang_leasing" id="cabang_leasing" class="form-control pleasing rtagihan" value="<?= $rekap_tagihan[0]['cabang_leasing']; ?>" readonly />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-sm-12 control-label">No. Bukti Potongan</label>
                                <div class="col-sm-12">
                                    <input type="text" name="no_bukti_potong" id="no_bukti_potong" value="" class="form-control pleasing rtagihan" value="0" />
                                </div>
                            </div>
                        </div>


                        <div style="clear: both;margin-bottom: 10px;"></div>

                        <table class="table table-bordered" id="tblPencairanLeasing" width="100%">
                            <thead>
                                <tr>
                                    <th data-options="checkbok"><input type="checkbox" name="cnokwitansi" class="cnokwitansi"></th>
                                    <th data-options="tanggal">Tgl Kwitansi</th>
                                    <th data-options="nokwitansi">Nmr Kwitansi</th>
                                    <th data-options="nama_customer">Nama</th>
                                    <th data-options="tipe">Type</th>
                                    <th data-options="nomsn">No.Mesin</th>
                                    <th data-options="norangka">No.Rangka</th>
                                    <th data-options="tharga_otr">OTR</th>
                                    <th data-options="tdp">DP</th>
                                    <th data-options="subsidi">Subsidi</th>
                                    <th data-options="sisa">Sisa</th>
                                    <th data-options="tgl_cair">Tanggal Pencairan <sup style="color:red">(*)</sup></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>


                        <div style="clear: both;margin-bottom: 10px;"></div>

                        <div class="col-md-12 col-xs-12">
                            <label class="col-sm-12 control-label">Total Tagihan :</label>
                            <div class="col-sm-12">
                                <input type="text" name="tot_tagihan" id="tot_tagihan" class="form-control rtagihan" placeholder="Total Tagihan" style="text-align: right;" value="0" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <label class="col-sm-12 control-label">Total Pencairan :</label>
                            <div class="col-sm-12">
                                <input type="text" name="tot_pencairan" id="tot_pencairan" class="form-control rtagihan" placeholder="Total Pencairan" style="text-align: right;" value="0" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <label class="col-sm-12 control-label">Sisa Tagihan :</label>
                            <div class="col-sm-12">
                                <input type="text" name="sisa_tagihan" id="sisa_tagihan" class="form-control rtagihan" placeholder="Sisa Tagihan" style="text-align: right;" value="0" readonly>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>
</div>


<script type="text/javascript">
    var base_url = "<?= base_url(); ?>";
    var nomor_tagihan = $("#no_tagihan").val();
    var nmr_tagihan = nomor_tagihan.split('/').join('_');

    $(document).ready(function () {

        if ($("#tblPencairanLeasing").hasClass("sapTable")) {
            $("#tblPencairanLeasing").refresh_sapTable({
                url: base_url + "leasing/pencairan_leasing/jlist/" + nmr_tagihan
            });
        } else {
            $("#tblPencairanLeasing").sapTable({
                url: base_url + "leasing/pencairan_leasing/jlist/" + nmr_tagihan,
                showSearch: true,
                cSearch: {
                    'tanggal': 'Tgl. Kwitansi', // t_penjualan
                    'nokwitansi': 'No. Kwitansi', // t_kwitansi_leasing
                    'nama_customer': 'Customer', // m_customer
                    'tipe': 'Tipe Motor', // penerimaan_motor
                    'nomsn': 'No. Mesin', // t_penjualan
                    'norangka': 'No. Rangka', // penerimaan_motor
                    'harga_otr': 'Harga OTR', // m_motor
                    'dp': 'DP', // t_harga_motor
                    'subsidi': 'Subsidi', // t_kwitansi_leasing
                    'sisa': 'Sisa' // m_motor + t_harga_motor + t_kwitansi_leasing
                },
                formatters: {
                    "tdp": function () {
                        var dp = formatCurrency(parseInt(rows.dp));
                        return dp;
                    },
                    "tharga_otr": function () {
                        var harga_otr = formatCurrency(parseInt(rows.harga_otr));
                        return harga_otr;
                    },
                    "subsidi": function () {
                        var subsidiHarga = parseInt(rows.subsidi1) + parseInt(rows.subsidi2);
                        return formatCurrency(subsidiHarga);
                    },
                    "sisa": function () {
                        var sisaTagihan = (parseInt(rows.harga_otr)) - (parseInt(rows.dp) + parseInt(rows.subsidi1) + parseInt(rows.subsidi2));
                        return formatCurrency(sisaTagihan);
                    },
                    "checkbok": function () {
                        var checkb = "<span align='center'><input type='checkbox' id='idkwitansi_" + rows.id_kwitansi + "' class='idkwitansileasing dkwitansi' value='" + rows.id_kwitansi + "' /></span>";
                        return checkb;
                    },
                    "tgl_cair": function () {
                        var tglCair = "<input type='text' name='tglcair_" + rows.id_kwitansi + "' id='tglcair_" + rows.id_kwitansi + "' parsley-trigger='change' class='form-control datepicker dkwitansi' placeholder='yyyy-mm-dd' />";
                        return tglCair;
                    }
                }
            });
        }



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

                    var sisaTagihan = 0;
                    if (sisa.length > 0) {
                        sisaTagihan = sisa.reduce((x, y) => x + y);
                        $("#sisa_tagihan").val(formatCurrency(sisaTagihan));
                    } else {
                        $("#sisa_tagihan").val(0);
                    }

                    var tot_pencairan = 0;
                    if (gsisa.length > 0) {
                        tot_pencairan = gsisa.reduce((x, y) => x + y);
                        $("#tot_pencairan").val(formatCurrency(tot_pencairan));
                    } else {
                        $("#tot_pencairan").val(0);
                    }

                    var tot_tagihan = sisaTagihan + tot_pencairan;
                    $("#tot_tagihan").val(formatCurrency(tot_tagihan));
                    
                    $("#saveTagihan").removeAttr('disabled');
                    $("#generateTagihan").attr('disabled',true);
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
                var data = [
                    {
                        name: "id_kwitansi",
                        value: $(this).val()
                    },
                    {
                        name: "tgl_pencairan",
                        value: $("#tglcair_" + $(this).val()).val()
                    }
                ];
                kwitansileasing.push(data);
            });

            var dt = {rtagihan: saveTagihan, kleasing: kwitansileasing}

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('leasing/pencairan_leasing/save'); ?>",
                data: dt,
                dataType: "json",
                success: function (hsl) {
                    if (hsl.status == "success") {
                        console.log(hsl.pesan)
                        //$("#saveTagihan, #generateTagihan").attr('disabled', true);
                        $("#printTagihan").removeAttr('disabled');
                        $("#generateTagihan").attr('disabled',true);
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

</script>    