
<div class="row">
    <?php
    //print_r($so);
    //echo $so->tanggal;
    ?>
    <form action="<?php echo base_url("cetak-kwitansi-leasing-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Cetak Kwitansi Leasing</h3>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Kwitansi</label>
                        <div class="col-sm-9">
                            <input type="text" name="nokwitansi" id="nokwitansi" parsley-trigger="change" placeholder="No. Kwitansi" value="<?= isset($nokwitansi) ? $nokwitansi : $kleasing['nokwitansi']; ?>" required readonly="true" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">

                    <div class="form-group" id="remote">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input class="typeahead form-control" parsley-trigger="change" required name="noso" style="text-transform: uppercase;" id="noso" type="text" placeholder="Type No Sales Order" value="<?= isset($kleasing['noso']) ? $kleasing['noso'] : ''; ?>">
                            <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" value="<?= isset($kleasing['id']) ? $kleasing['id'] : ''; ?>" class="form-control">
                            <input type="hidden" name="nama_customer" id="nama_customer" parsley-trigger="change" class="form-control">

                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="text" name="tanggal" id="tanggal" parsley-trigger="change" required   class="form-control" value="<?= isset($so->tanggal) ? $so->tanggal : ''; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Mesin</label>
                        <div class="col-sm-9">
                            <input type="text" name="nomesin" id="nomesin" parsley-trigger="change" required   class="form-control" value="<?= isset($so->nomesin) ? $so->nomesin : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="norangka" id="norangka" parsley-trigger="change"   required  class="form-control" value="<?= isset($so->norangka) ? $so->norangka : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-9">
                            <input type="text" name="tipe" id="tipe" parsley-trigger="change"   required   class="form-control" value="<?= isset($so->tipe) ? $so->tipe : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna" id="warna" parsley-trigger="change"   required   class="form-control" value="<?= isset($so->warna) ? $so->warna : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="text" name="tahun" id="tahun" parsley-trigger="change"   required  class="form-control" value="<?= isset($so->tahun) ? $so->tahun : ''; ?>" readonly>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga OTR</label>
                        <div class="col-sm-9">
                            <input type="text" name="harga_otr" id="harga_otr" required parsley-trigger="change"  class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" value="<?= isset($so->harga_otr) ? $so->harga_otr : ''; ?>" readonly>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Leasing</label>
                        <div class="col-sm-9">
                            <input type="text" name="leasing" id="leasing" parsley-trigger="change"  required class="form-control" value="<?= isset($so->leasing) ? $so->leasing : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">DP System</label>
                        <div class="col-sm-9">
                            <input type="text" name="dp_system" id="dp_system" required parsley-trigger="change" class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" value="<?= isset($so->dp_system) ? $so->dp_system : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Diskon</label>
                        <div class="col-sm-9">
                            <input type="text" name="diskon" id="diskon" required parsley-trigger="change" class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" value="<?= isset($so->diskon) ? $so->diskon : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tagih</label>
                        <div class="col-sm-9">
                            <input type="text" name="tagih" id="tagihan" required parsley-trigger="change"  class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" value="<?= isset($so->tagihan) ? $so->tagihan : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Subsidi</label>
                        <div class="col-sm-9">
                            <input type="text" name="subsidi1" id="subsidi1" parsley-trigger="change"  class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" value="<?= isset($kleasing['subsidi1']) ? $kleasing['subsidi1'] : ''; ?>" style="text-align: right;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Subsidi 2</label>
                        <div class="col-sm-9">
                            <input type="text" name="subsidi2" id="subsidi2"  parsley-trigger="change"   class="form-control mask" data-inputmask="'alias': 'decimal', 'groupSeparator': '.', 'autoGroup': true" value="<?= isset($kleasing['subsidi2']) ? $kleasing['subsidi2'] : ''; ?>" style="text-align: right;">
                        </div>
                    </div>



                    <div class="form-group"></div>
                </div>

            </div>

        </div>
        <div class="col-lg-12">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <button type="button" name="save_data" id="save_data" onclick="simpan_data();" class="btn btn-primary" <?= isset($btnedit) ? $btnedit : ''; ?> >Save</button>
                        <a href="cetak-kwitansi-leasing" class="btn btn-danger" name="cancel" id="cancel">Cancel</a>

                        <?php
                        $no_kwitansi = isset($nokwitansi) ? $nokwitansi : $kleasing['nokwitansi'];
                        $noKwitansi = str_replace("/", "_", $no_kwitansi);
                        $atts = array(
                            'width' => 950,
                            'height' => 550,
                            'scrollbars' => 'yes',
                            'status' => 'yes',
                            'resizable' => 'yes',
                            'screenx' => 0,
                            'screeny' => 0,
                            'window_name' => '_blank',
                            'class' => 'btn btn-primary'
                        );
                        echo anchor_popup(base_url('cetak-kwitansi-leasing-proseska/' . $noKwitansi), 'Print K(A)', $atts);
                        echo " ";
                        echo anchor_popup(base_url('cetak-kwitansi-leasing-proseskb/' . $noKwitansi), 'Print K(B)', $atts);
                        echo " ";
                        echo anchor_popup(base_url('cetak-kwitansi-leasing-proseskc/' . $noKwitansi), 'Print K(C)', $atts);
                        echo " ";
                        echo anchor_popup(base_url('cetak-kwitansi-leasing-proseskc2/' . $noKwitansi), 'Print K(C) 2', $atts);
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

<!-- Modal -->

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

        $("#cancel").on("click", function () {
            window.location = "t_kwitansi/t_kwitansidp";
        });

        $("#noso").focusout(function () {
            var noso = $(this).val();
            var dt = {noso: noso};
            $.ajax({
                type: "post",
                url: "leasing/cetak_kwitansi_leasing/load_transaction_by_noso",
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

    });
</script>



<script>


    $(document).ready(function () {

        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '<?php echo base_url('leasing/cetak_kwitansi_leasing/getSO?query=%QUERY'); ?>',
                wildcard: '%QUERY'
            }
        });

        $('#remote .typeahead').typeahead(null, {
            name: 'noso',
            display: 'noso',
            source: bestPictures
        });

        $('#remote .typeahead').bind('typeahead:selected', function (obj, datum, name) {
            //console.log(datum);
            $('#noso').val(datum.noso);
            $('#harga_otr').val(datum.harga_otr);
            $('#nama_customer').val(datum.nama_customer);
            $('#fee').val(datum.fee);
            $('#dp').val(datum.dp);
            $('#nomesin').val(datum.nomesin);
            $('#transaksi').val(datum.transaksi);
            $('#warna').val(datum.warna);
            $('#tipe').val(datum.tipe);
            $('#leasing').val(datum.leasing);
            $('#norangka').val(datum.norangka);
            $('#tanggal').val(datum.tanggal);
            $('#sisa_hutang').val(datum.sisa_pembayaran);
            $('#tagih').val(datum.tagih);
            $('#tahun').val(datum.tahun);
            $('#tanggal').val(datum.tanggal);
            $('#dp_system').val(datum.dp_system);
            $('#diskon').val(datum.diskon);
            $('#tagihan').val(datum.tagihan);
            $('#cara_pembelian').val(datum.cara_pembelian);
            $('#link_a').text('<?php echo base_url('cetak-kwitansi-leasing-ka/'); ?>' + datum.noso);
            $('#link_b').text('<?php echo base_url('cetak-kwitansi-leasing-kb/'); ?>' + datum.noso);
            $('#link_c').text('<?php echo base_url('cetak-kwitansi-leasing-kc/'); ?>' + datum.noso);
            $('#link_c2').text('<?php echo base_url('cetak-kwitansi-leasing-kc2/'); ?>' + datum.noso);
            $("barisan_link").find("link_a").href('<?php echo base_url('cetak-kwitansi-leasing-kc2/'); ?>' + datum.noso);
            //

            //cara_pembelian
            //$('#terbilang').val(datum.terbilang);
            //$('#norangka').val(datum['norangka']);
            //$('#warna').val(datum['warna']);
            //$('#tahun').val(datum['tahun']);
        });


        $('#modalBrowse').on('hidden.bs.modal', function (e) {
            $('#frmGroupUser').find('input:text').val('');
        })

        $("#frmGroupUser").on("submit", function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            //console.log(formData);
            $.ajax({
                url: "<?php echo base_url('motor_keluar/inputTemp'); ?>",
                type: "post",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                //dataType : "json",
                success: function (e) {
                    table.ajax.reload();
                    $('#modalBrowse').modal('hide')
                },
                error: function (e) {
                    alert('fail');
                }
            });
        });
    });



    function simpan_data() {
        $('#save_data').prop("disabled", true);
        var data = $('#frmkwitansidp').serialize();
        //console.log(data);return false;
        $.ajax({
            url: "cetak-kwitansi-leasing-save",
            type: "POST",
            data: data,
            datatype: "json",
            success: function (hsl) {
                //console.log(hsl);
                alert('data successfully added!');
            },
            error: function (e) {
                console.log(e);
            }
        })

    }

    $('.print_ka').click(function (event) {
        event.preventDefault();
        window.open($(this).attr("href"), "popupWindow", "width=900,height=550,scrollbars=yes");
    });

    function cetak_ka() {
        var data = $('#nokwitansi').val();

        var newchar = '_'
        var res = data.split('/').join(newchar);
        //alert(res);

        var tembak = "<?php echo base_url('cetak-kwitansi-leasing-proseska/'); ?>" + res;

        if (data == '') {
            alert('SO masih Kosong!');
        } else {
            window.open(tembak);
            //window.location.href = tembak;
        }

    }

    function cetak_kb() {
        var data = $('#nokwitansi').val();

        var newchar = '_'
        var res = data.split('/').join(newchar);
        var tembak = "<?php echo base_url('cetak-kwitansi-leasing-proseskb/'); ?>" + res;

        if (data == '') {
            alert('SO masih Kosong!');
        } else {
            window.open(tembak);
        }

    }

    function cetak_kc() {
        var data = $('#nokwitansi').val();

        var newchar = '_'
        var res = data.split('/').join(newchar);
        var tembak = "<?php echo base_url('cetak-kwitansi-leasing-proseskc/'); ?>" + res;

        if (data == '') {
            alert('SO masih Kosong!');
        } else {
            window.open(tembak);
        }

    }

    function cetak_kc2() {
        var data = $('#nokwitansi').val();

        var newchar = '_'
        var res = data.split('/').join(newchar);
        var tembak = "<?php echo base_url('cetak-kwitansi-leasing-proseskc2/'); ?>" + res;

        if (data == '') {
            alert('SO masih Kosong!');
        } else {
            window.open(tembak);
        }

    }

    function newdata() {
        window.location.href = "<?php echo base_url('cetak-kwitansi-leasing'); ?>";
    }

    function resetform() {
        $("#noso").val('');
    }

    function getGudangTo(id) {
        $("#id_gudang_in").html("<option value=''>Wait ...</option>")
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('motor_keluar/get_gudang_to'); ?>",
            data: {id: id},
            dataType: 'html',
            success: function (result) {
                $("#id_gudang_in").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
    }

    $("#nominal").keyup(function () {
        var nominal = $("#nominal").val().match(/\d/g);
        var nominalx = $("#nominal").val().match(/\d/g);
        var sending = parseInt(nominalx.join(""));


        $.post("t_kwitansi/t_kwitansidp/terbilang/", {nominal: sending}).done(function (data) {
            $("#terbilang").text(data);
        });


        var sisa_hutang = $("#sisa_hutang").val().match(/\d/g);
        if ($(this).val().trim().length == 0) {
            $(this).val(0);
        }
        //var sisa_hutang = $(this).val().match(/\d/g);
        var sisax = parseInt(sisa_hutang.join("")) - parseInt(nominal.join(""));
        console.log(nominal);
        //$("#sisa").val(sisa.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        $("#sisa").val(sisax.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    });


</script>