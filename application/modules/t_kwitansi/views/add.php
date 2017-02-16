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
        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Kwitansi</label>
                        <div class="col-sm-9">
                            <input type="text" name="nokwitansi" id="nokwitansi" parsley-trigger="change" placeholder="No. Kwitansi" value="<?= $nokwitansi; ?>" required readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" id="remote">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input class="typeahead form-control" style="text-transform: uppercase;" parsley-trigger="change" required name="noso" id="noso" type="text" placeholder="Type No Sales Order">
                            <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" value="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tgl Dp</label>
                        <div class="col-sm-9">
                            <input type="text" name="tgl_dp" id="tgl_dp" parsley-trigger="change" required placeholder="Pilih Tanggal" class="form-control datepicker">
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
                        <label class="col-sm-3 control-label">Total DP</label>
                        <div class="col-sm-9">
                            <input type="text" name="total_dp" id="total_dp" parsley-trigger="change" required   placeholder="DP Keseluruhan" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Diskon</label>
                        <div class="col-sm-9">
                            <input type="text" name="diskon" id="diskon" parsley-trigger="change" required   placeholder="Diskon" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pembelian Secara</label>
                        <div class="col-sm-9">
                            <input type="text" name="cara_pembelian" id="cara_pembelian" parsley-trigger="change" readonly="true" required placeholder="Pembelian Secara" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">DP Ke</label>
                        <div class="col-sm-9">
                            <select name="transaksi" id="transaksi" class="form-control" parsley-trigger="change" required="true">
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sudah Dibayar</label>
                        <div class="col-sm-9">
                            <input type="text" name="sudah_bayar" id="sudah_bayar" readonly="true" parsley-trigger="change" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sisa Hutang</label>
                        <div class="col-sm-9">
                            <input type="text" name="sisa_hutang" id="sisa_hutang" readonly="true" parsley-trigger="change" required class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nominal</label>
                        <div class="col-sm-9">
                            <input type="text" name="nominal" id="nominal" required="true" parsley-trigger="change" style="text-align:left;"  placeholder="Nominal" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" class="form-control mask">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sisa</label>
                        <div class="col-sm-9">
                            <input type="text" name="sisa_pembayaran" id="sisa" parsley-trigger="change" readonly="true" required placeholder="Sisa" class="form-control">
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
                            <input type="text" name="nomsn" id="no_mesin" parsley-trigger="change" readonly="true" placeholder="No.Mesin" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="norangka" id="no_rangka" parsley-trigger="change" readonly="true" placeholder="No.Rangka" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-9">
                            <input type="text" name="tipe_motor" id="type" parsley-trigger="change" readonly="true" placeholder="Type" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna" id="warna" parsley-trigger="change" readonly="true" placeholder="Warna" class="form-control">
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
                    <button name="submit" id="simpan" class="btn btn-primary">Save</button>
                    <a href="<?php echo base_url('kwitansi-dp');?>" name="cancel" id="cancel" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '<?php echo base_url('t_kwitansi/getSO?query=%QUERY'); ?>',
                wildcard: '%QUERY'
            }
        });

        $('#remote .typeahead').typeahead(null, {
            name: 'noso',
            display: 'noso',
            source: bestPictures
        });

        $('#remote .typeahead').bind('typeahead:selected', function (obj, datum, name) {
            $('#noso').val(datum.noso);
            getDetailInfo(datum.id);
        });
        
        $("#nominal").keyup(function () {
            if ($(this).val().trim().length == 0) {
                $(this).val(0);
            }
            var nominal = $("#nominal").val().match(/\d/g);
            var sending = parseInt(nominal.join(""));
        
            $.post("t_kwitansi/terbilang/", {nominal: sending}).done(function (data) {
                $("#terbilang").text(data);
            });
            
            var sisa_hutang = $("#sisa_hutang").val().match(/\d/g);
            
            if ($(this).val().trim().length == 0) {
                   $(this).val(0);
            }
            
            var sisa = parseInt(sisa_hutang.join("")) - parseInt(nominal.join(""));
            console.log(nominal);
            $("#sisa").val(sisa.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        });
    });
    
    function getDetailInfo(id){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_kwitansi/get_detail_so'); ?>",
            dataType: "json",
            data: {id: id},
            success: function (result) {
                if(result.master_harga_motor[0].cara_pembelian === "Cash"){
                    var sisaHutang = ((parseInt(result.master_motor[0].harga_otr) - parseInt(result.total_bayar.total)) - parseInt(result.master_harga_motor[0].diskon));
                }else{
                    var sisaHutang = (parseInt(result.master_harga_motor[0].dp_system) - parseInt(result.total_bayar.total));
                }
                $('#harga_otr').val(numeral(result.master_motor[0].harga_otr).format('0,0'));
                $('#nama_customer').val(result.customer[0].nama_customer);
                $('#type').val(result.terima_motor[0].tipe);
                $('#no_mesin').val(result.terima_motor[0].nomesin);
                $('#no_rangka').val(result.terima_motor[0].norangka);
                $('#warna').val(result.terima_motor[0].warna);
                $('#tahun').val(result.terima_motor[0].tahun);
                $('#cara_pembelian').val(result.master_harga_motor[0].cara_pembelian);
                $('#diskon').val(numeral(result.master_harga_motor[0].diskon).format('0,0'));
                $('#total_dp').val(numeral(result.master_harga_motor[0].dp_system).format('0,0'));
                $('#sudah_bayar').val(numeral(result.total_bayar.total).format('0,0'));
                $('#sisa_hutang').val(numeral(sisaHutang).format('0,0'));
                $('#transaksi').html(result.transaksi);
            },
            async: false
        });
    }
</script>