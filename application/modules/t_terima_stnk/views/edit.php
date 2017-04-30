<div class="col-md-12">
    <div class="block-web">
        <form action="<?php echo base_url("terima-stnk-save"); ?>" class="form-horizontal row-border" method="post" enctype="multipart/form-data" parsley-validate novalidate>
            <div class="header">
                <div class="actions"> </div>
                <h3 class="content-header">Edit Tanda Terima STNK/BPKB</h3>
            </div>
            <div class="porlets-content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" id="remote">
                                <label class="col-sm-3 control-label">No.Process</label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
                                    <input type="hidden" name="t_stnk_id" id="t_stnk_id" value="<?php echo $detail['t_stnk_id'];?>">
                                    <input style="text-transform: uppercase;" class="typeahead form-control" parsley-trigger="change" required name="no_process" id="no_process" type="text" placeholder="Type No Process">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No.SO</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="no_so" id="no_so" parsley-trigger="change" required class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Customer</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="nama_customer" id="nama_customer" required parsley-trigger="change" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No.Mesin</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="no_mesin" id="no_mesin" required parsley-trigger="change" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No.Rangka</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="no_rangka" id="no_rangka" required parsley-trigger="change" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Type</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="type" id="type" required parsley-trigger="change" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Warna</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="warna" id="warna" required parsley-trigger="change" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tahun</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="tahun" id="tahun" required parsley-trigger="change" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Harga</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="harga_otr" id="harga_otr" required parsley-trigger="change" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Birojasa</label>
                                <div class="col-sm-9">
                                    <select name="birojasa_id" id="birojasa_id" parsley-trigger="change" required class="form-control">
                                        <?php foreach($birojasa as $kBirojasa=>$vBirojasa){ ?>
                                        <option value="<?php echo $vBirojasa['id'];?>" <?php echo ($detail['birojasa_id']==$vBirojasa['id']?"selected":"");?>><?php echo $vBirojasa['nama_birojasa'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tgl.Jadi STNK</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_tgl_stnk" id="t_terima_tgl_stnk" value="<?php echo $detail['t_terima_tgl_stnk'];?>" parsley-trigger="change" required placeholder="Tanggal Jadi STNK" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tgl.Jadi BPKB</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_tgl_bpkb" id="t_terima_tgl_bpkb" value="<?php echo $detail['t_terima_tgl_bpkb'];?>" parsley-trigger="change" required placeholder="Tanggal Jadi BPKB" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No.Polisi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_no_polisi" id="t_terima_no_polisi" value="<?php echo $detail['t_terima_no_polisi'];?>" required parsley-trigger="change" placeholder="No.Polisi" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No.STNK</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_no_stnk" id="t_terima_no_stnk" value="<?php echo $detail['t_terima_no_stnk'];?>" required parsley-trigger="change" placeholder="No.STNK" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No.BPKB</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_no_bpkb" id="t_terima_no_bpkb" value="<?php echo $detail['t_terima_no_bpkb'];?>" required parsley-trigger="change" placeholder="No.BPKB" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No.Bon BJ 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_no_bon_1" id="t_terima_no_bon_1" value="<?php echo $detail['t_terima_no_bon_1'];?>" required parsley-trigger="change" placeholder="No.Bon Birojasa 1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No.Bon BJ 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_no_bon_2" id="t_terima_no_bon_2" value="<?php echo $detail['t_terima_no_bon_2'];?>" required parsley-trigger="change" placeholder="No.Bon Birojasa 2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Biaya Tbh. 1</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_add_biaya_1" id="t_terima_add_biaya_1" value="<?php echo formatrp($detail['t_terima_add_biaya_1']);?>" required parsley-trigger="change" placeholder="Biaya Tambahan 1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Biaya Tbh. 2</label>
                                <div class="col-sm-9">
                                    <input type="text" name="t_terima_add_biaya_2" id="t_terima_add_biaya_2" value="<?php echo formatrp($detail['t_terima_add_biaya_2']);?>" required parsley-trigger="change" placeholder="Biaya Tambahan 2" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <textarea name="t_terima_add_biaya_1_description" id="t_terima_add_biaya_1_description" required parsley-trigger="change" class="form-control"><?php echo $detail['t_terima_add_biaya_1_description'];?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
                            <a href="<?php echo base_url('terima-stnk'); ?>" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_terima_stnk/get_detail_so'); ?>",
            dataType: "json",
            data: {id: <?php echo $detail['t_stnk_id'];?>},
            success: function (result) {
                var otr = numeral(result.master_motor[0].harga_otr);
                var otr = otr.format('0,0');
                $('#no_process').val(result.stnk[0].no_process);
                $('#t_stnk_id').val(result.stnk[0].id);
                $('#no_so').val(result.penjualan[0].noso);
                $('#harga_otr').val(otr);
                $('#nama_customer').val(result.customer[0].nama_customer);
                $('#tanggal').val(result.penjualan[0].tanggal);
                $('#type').val(result.terima_motor[0].tipe);
                $('#no_mesin').val(result.terima_motor[0].nomesin);
                $('#no_rangka').val(result.terima_motor[0].norangka);
                $('#warna').val(result.terima_motor[0].warna);
                $('#tahun').val(result.terima_motor[0].tahun);
            },
            async: false
        });
        
        var dataSourceValue = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '<?php echo base_url('t_terima_stnk/get_no_process?query=%QUERY'); ?>',
                wildcard: '%QUERY'
            }
        });
        
        $('#remote .typeahead').typeahead(null, {
            name: 'no_process',
            display: 'no_process',
            source: dataSourceValue
        });
        
        $('#remote .typeahead').bind('typeahead:selected', function (obj, datum, name) {
            console.log(datum);
            $('#no_process').val(datum.no_process);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('t_terima_stnk/get_detail_so'); ?>",
                dataType: "json",
                data: {id: datum.id},
                success: function (result) {
                    var otr = numeral(result.master_motor[0].harga_otr);
                    var otr = otr.format('0,0');
                    $('#t_stnk_id').val(result.stnk[0].id);
                    $('#no_so').val(result.penjualan[0].noso);
                    $('#harga_otr').val(otr);
                    $('#nama_customer').val(result.customer[0].nama_customer);
                    $('#tanggal').val(result.penjualan[0].tanggal);
                    $('#type').val(result.terima_motor[0].tipe);
                    $('#no_mesin').val(result.terima_motor[0].nomesin);
                    $('#no_rangka').val(result.terima_motor[0].norangka);
                    $('#warna').val(result.terima_motor[0].warna);
                    $('#tahun').val(result.terima_motor[0].tahun);
                },
                async: false
            });
        });
        
        $('#t_terima_add_biaya_1, #t_terima_add_biaya_2').keyup(function(){
            $(this).val(numeral($(this).val()).format('0,0'));
        });
    });
</script>
