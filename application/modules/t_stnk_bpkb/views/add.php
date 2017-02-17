<div class="col-md-12">
    <div class="block-web">
        <form action="<?php echo base_url("stnk-save"); ?>" class="form-horizontal row-border" method="post" enctype="multipart/form-data" parsley-validate novalidate>
            <div class="header">
                <div class="actions"> </div>
                <h3 class="content-header">Proses STNK</h3>
            </div>
            <div class="porlets-content">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" id="remote">
                                <label class="col-sm-3 control-label">No Sales Order</label>
                                <div class="col-sm-9">
                                    <input style="text-transform: uppercase;" class="typeahead form-control" parsley-trigger="change" required name="noso" id="noso" type="text" placeholder="Type No Sales Order">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No. Mesin</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="no_mesin" id="no_mesin" parsley-trigger="change" required placeholder="No. Mesin" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No. Rangka</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="no_rangka" id="no_rangka" parsley-trigger="change"     placeholder="No. Rangka" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Type</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="type" id="type" parsley-trigger="change"     placeholder="Type" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Warna</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="warna" id="warna" parsley-trigger="change"     placeholder="Warna" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tahun</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="tahun" id="tahun" parsley-trigger="change"     placeholder="Tahun" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">No. Proses</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="no_proses" id="no_proses" value="<?php echo $codeso; ?>" parsley-trigger="change" required placeholder="No Proses" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Leasing</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="leasing" id="leasing" parsley-trigger="change"  placeholder="Leasing" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tgl Proses STNK</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tgl_proses_stnk" id="tgl_proses_stnk" parsley-trigger="change" required placeholder="Tanggal Proses STNK" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Est. STNK selesai</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="est_stnk_selesai" id="est_stnk_selesai" parsley-trigger="change" required   placeholder="Estimasi STNK Selesai" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tgl Proses BPKB</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tgl_proses_bpkb" id="tgl_proses_bpkb" parsley-trigger="change" required   placeholder="Tanggal Proses BPKB" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Est. BPKB selesai</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly="true" name="est_bpkb_selesai" id="est_bpkb_selesai" parsley-trigger="change" required   placeholder="Estimasi BPKB Selesai" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="header">
                            <div class="actions"> </div>
                            <h3 class="content-header">Data Customer</h3>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">ID/KTP</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="ktp_stnk" id="no_ktp" parsley-trigger="change"  placeholder="ID/KTP" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="nama" id="nama" parsley-trigger="change"  placeholder="Nama" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="tempat_lahir" id="tempat_lahir_customer" parsley-trigger="change" placeholder="Tempat Lahir" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="tanggal_lahir" id="tanggal_lahir_customer" parsley-trigger="change"  placeholder="Tanggal Lahir" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select required="true" parsley-trigger="change" name="kelamin_customer" class="form-control" id="kelamin_customer">
                                    <option value=""> --Pilih-- </option>
                                    <option value="P"> Laki-Laki </option>
                                    <option value="W"> Perempuan </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea required="true" parsley-trigger="change" name="alamat_customer" id="alamat_customer" class="form-control"> </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header">
                            <div class="actions"> </div>
                            <h3 class="content-header">&nbsp;</h3>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">RT - RW </label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" required="true" parsley-trigger="change" name="rt" id="rt" parsley-trigger="change" placeholder="RT" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" required="true" parsley-trigger="change" name="rw" id="rw" parsley-trigger="change" placeholder="RW" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Wilayah</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="wilayah" id="wilayah" parsley-trigger="change" placeholder="Kel/Desa" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kelurahan</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="kelurahan" id="kelurahan" parsley-trigger="change" placeholder="Kel/Desa" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Kecamatan</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="kecamatan" id="kecamatan" parsley-trigger="change"     placeholder="Kecamatan" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="telepon_customer" id="telepon_customer" parsley-trigger="change"     placeholder="Telepon" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Handphone</label>
                            <div class="col-sm-9">
                                <input type="text" required="true" parsley-trigger="change" name="handphone_customer" id="handphone_customer" parsley-trigger="change"     placeholder="Handphone" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="row">
                    <div class="pull-right">
                        <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
                        <a href="<?php echo base_url('stnk'); ?>" class="btn btn-warning">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function(){
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '<?php echo base_url('t_stnk_bpkb/get_sales_order?query=%QUERY'); ?>',
                wildcard: '%QUERY'
            }
        });
        
        $('#remote .typeahead').typeahead(null, {
            name: 'noso',
            display: 'noso',
            source: bestPictures
        });
        
        $('#remote .typeahead').bind('typeahead:selected', function (obj, datum, name) {
            console.log(datum);
            $('#noso').val(datum.noso);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('t_stnk_bpkb/get_detail_so'); ?>",
                dataType: "json",
                data: {id: datum.id},
                success: function (result) {
                    //console.log(result.master_motor[0].nama_motor);
                    $('#harga_otr').val(result.master_motor.harga_otr);
                    $('#nama').val(result.customer[0].nama_customer);
                    $('#tanggal').val(result.penjualan[0].tanggal);
                    $('#type').val(result.terima_motor[0].tipe);
                    $('#no_mesin').val(result.terima_motor[0].nomesin);
                    $('#no_rangka').val(result.terima_motor[0].norangka);
                    $('#warna').val(result.terima_motor[0].warna);
                    $('#tahun').val(result.terima_motor[0].tahun);
                    $('#leasing').val(result.master_harga_motor[0].leasing);
                    $('#no_ktp').val(result.customer[0].no_ktp);
                    $('#tempat_lahir_customer').val(result.customer[0].tempat_lahir_customer);
                    $('#tanggal_lahir_customer').val(result.customer[0].tanggal_lahir_customer);
                    $('#kelamin_customer').val(result.customer[0].kelamin_customer);
                    $('#alamat_customer').val(result.customer[0].alamat_customer);
                    $('#rt').val(result.customer[0].rt);
                    $('#rw').val(result.customer[0].rw);
                    $('#wilayah').val(result.customer[0].wilayah);
                    $('#kelurahan').val(result.customer[0].kelurahan);
                    $('#kecamatan').val(result.customer[0].kecamatan);
                    $('#telepon_customer').val(result.customer[0].telepon_customer);
                    $('#handphone_customer').val(result.customer[0].handphone_customer);
                },
                async: false
            });
        });
        
        $('.datepicker').datepicker({
            format:'yyyy-mm-dd'
        }).on('changeDate', function(e) {
            // `e` here contains the extra attributes
        });
        
        $("#tgl_proses_stnk").focusout(function () {
            var tgl_proses_stnk = $(this).val();
            $.post("t_stnk_bpkb/pro_est_date_stnk/", {tgl_proses_stnk: tgl_proses_stnk}).done(function (data) {
                $("#est_stnk_selesai").val(data);
            });
            return false;
        });

        $("#tgl_proses_bpkb").focusout(function () {
            var tgl_proses_bpkb = $(this).val();
            $.post("t_stnk_bpkb/pro_est_date_bpkb/", {tgl_proses_bpkb: tgl_proses_bpkb}).done(function (data) {
                $("#est_bpkb_selesai").val(data);
            });
        });
    });
</script>
