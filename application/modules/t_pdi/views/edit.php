<form action="<?php echo base_url("pdi-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
    <div class="row">
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Pre Delivery Inspection</h3>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" id="remote">
                            <label class="col-sm-3 control-label">No Sales Order</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id" id="id"  value="<?php echo $detail['id'];?>" parsley-trigger="change" required readonly="true" class="form-control">
                                <input readonly="true" style="text-transform: uppercase;" class="typeahead form-control" parsley-trigger="change" required name="noso" id="noso" value="<?php echo $detail['noso'];?>" type="text" placeholder="Type No Sales Order">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" readonly="true" value="<?php echo $sales_order['nama_customer'];?>" name="nama" id="nama" parsley-trigger="change" required placeholder="Nama Customer" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal SO</label>
                            <div class="col-sm-9">
                                <input type="text" readonly="true" name="tanggal" id="tanggal" parsley-trigger="change" value="<?php echo $sales_order['tanggal'];?>" placeholder="Tanggal" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal PDI</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_pdi" required="true" id="tgl_pdi" parsley-trigger="change" value="<?php echo $detail['tgl_pdi']; ?>"   placeholder="Tanggal PDI" class="form-control datepicker">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">PIC</label>
                            <div class="col-sm-9">
                                <input type="text" name="pic" required="true" id="pic" parsley-trigger="change" value="<?php echo $detail['pic'];?>" placeholder="Input PIC" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe" readonly="true" id="type" value="<?php echo $sales_order['tipe'];?>" parsley-trigger="change" required placeholder="Tipe" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Mesin</label>
                            <div class="col-sm-9">
                                <input type="text" readonly="true" name="no_mesin" id="no_mesin" value="<?php echo $sales_order['nomesin'];?>" parsley-trigger="change" placeholder="No. Mesin" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Rangka</label>
                            <div class="col-sm-9">
                                <input type="text" readonly="true" name="no_rangka" id="no_rangka" value="<?php echo $sales_order['norangka'];?>" parsley-trigger="change" placeholder="No. Rangka" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                                <input type="text" readonly="true" name="warna" id="warna" value="<?php echo $sales_order['nomesin'];?>" parsley-trigger="change" required   placeholder="Warna" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. PDI</label>
                            <div class="col-sm-9">
                                <input type="hidden" readonly="true" name="nosj" id="nosj" parsley-trigger="change" required value="<?php echo $detail['nosj']; ?>" class="form-control">
                                <input type="text" readonly="true" name="kdpdi" id="no_pdi" parsley-trigger="change" required value="<?php echo $detail['kdpdi']; ?>" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Gudang</label>
                            <div class="col-sm-9">
                                <select name="gudang_id" id="gudang_id"  onchange="getAccessories(this.value);" parsley-trigger="change" required class="form-control">
                                    <option value="" selected="true" disabled="true">-- Pilih Gudang--</option>
                                    <?php foreach ($gudang as $kGudang => $vGudang) { ?>
                                        <option value="<?php echo $vGudang['id']; ?>" <?php echo ($detail['gudang_id']==$vGudang['id']?"selected":"");?>><?php echo $vGudang['gudang']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <!--second form-->
    <div class="row">
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Cek List Accessories</h3>
                </div>

                <div class="row">
                    <table class="table" border="1">
                        <tr>
                            <td style="text-align: center;width: 300px;"> Aksesories</td>
                            <td style="text-align: center;"> Kode </td>
                        </tr>
                        <tr>
                            <td> Aki</td>
                            <td> 
                                <select name="aksesoris[]" id="aki" class="form-control">
                                    <option value="0" <?php echo ($pdi_detail[0]['aksesoris_id']==0?"selected":"");?>>Not Available</option>
                                    <?php 
                                        foreach($aki as $kAki=>$vAki){
                                    ?>
                                    <option value="<?php echo $vAki['aksesoris_id'];?>" <?php echo ($pdi_detail[0]['aksesoris_id']==$vAki['aksesoris_id']?"selected":"");?>><?php echo $vAki['aksesoris'];?> (<?php echo $vAki['total'];?> pcs)</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Spion</td>
                            <td> 
                                <select name="aksesoris[]" id="spion" class="form-control">
                                    <option value="0" <?php echo ($pdi_detail[1]['aksesoris_id']==0?"selected":"");?>>Not Available</option>
                                    <?php 
                                        foreach($spion as $kSpion=>$vSpion){
                                    ?>
                                    <option value="<?php echo $vSpion['aksesoris_id'];?>" <?php echo ($pdi_detail[1]['aksesoris_id']==$vSpion['aksesoris_id']?"selected":"");?>><?php echo $vSpion['aksesoris'];?> (<?php echo $vSpion['total'];?> pcs)</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Toolkit</td>
                            <td> 
                                <select name="aksesoris[]" id="toolkit" class="form-control">
                                    <option value="0" <?php echo ($pdi_detail[2]['aksesoris_id']==0?"selected":"");?>>Not Available</option>
                                    <?php 
                                        foreach($toolkit as $kToolkit=>$vToolkit){
                                    ?>
                                    <option value="<?php echo $vToolkit['aksesoris_id'];?>" <?php echo ($pdi_detail[2]['aksesoris_id']==$vToolkit['aksesoris_id']?"selected":"");?>><?php echo $vToolkit['aksesoris'];?> (<?php echo $vToolkit['total'];?> pcs)</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Helm</td>
                            <td> 
                                <select name="aksesoris[]" id="helm" class="form-control">
                                    <option value="0" <?php echo ($pdi_detail[3]['aksesoris_id']==0?"selected":"");?>>Not Available</option>
                                    <?php 
                                        foreach($helm as $kHelm=>$vHelm){
                                    ?>
                                    <option value="<?php echo $vHelm['aksesoris_id'];?>" <?php echo ($pdi_detail[3]['aksesoris_id']==$vHelm['aksesoris_id']?"selected":"");?>><?php echo $vHelm['aksesoris'];?> (<?php echo $vHelm['total'];?> pcs)</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> Buku Pedoman Pemilik</td>
                            <td class="text-center">  
                                Available
                            </td>
                        </tr>
                        <tr>
                            <td> Kertas Gesekan Polda</td>
                            <td class="text-center">  
                                Available
                            </td>
                        </tr>
                        <tr>
                            <td>Rumah Plat</td>
                            <td>  
                                <select name="aksesoris[]" id="rumah_plat" class="form-control">
                                    <option value="0" <?php echo ($pdi_detail[4]['aksesoris_id']==0?"selected":"");?>>Not Available</option>
                                    <?php 
                                        foreach($rumah_plat as $kPlat=>$vPlat){
                                    ?>
                                    <option value="<?php echo $vPlat['aksesoris_id'];?>" <?php echo ($pdi_detail[4]['aksesoris_id']==$vPlat['aksesoris_id']?"selected":"");?>><?php echo $vPlat['aksesoris'];?> (<?php echo $vPlat['total'];?> pcs)</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jacket</td>
                            <td>  
                                <select name="aksesoris[]" id="jacket" class="form-control">
                                    <option value="0" <?php echo ($pdi_detail[5]['aksesoris_id']==0?"selected":"");?>>Not Available</option>
                                    <?php 
                                        foreach($jacket as $kJacket=>$vJacket){
                                    ?>
                                    <option value="<?php echo $vJacket['aksesoris_id'];?>" <?php echo ($pdi_detail[5]['aksesoris_id']==$vJacket['aksesoris_id']?"selected":"");?>><?php echo $vJacket['aksesoris'];?> (<?php echo $vJacket['total'];?> pcs)</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jas Hujan</td>
                            <td> 
                                <select name="aksesoris[]" id="jas_hujan" class="form-control">
                                    <option value="0" <?php echo ($pdi_detail[6]['aksesoris_id']==0?"selected":"");?>>Not Available</option>
                                    <?php 
                                        foreach($jas_hujan as $kJas=>$vJas){
                                    ?>
                                    <option value="<?php echo $vJas['aksesoris_id'];?>" <?php echo ($pdi_detail[6]['aksesoris_id']==$vJas['aksesoris_id']?"selected":"");?>><?php echo $vJas['aksesoris'];?> (<?php echo $vJas['total'];?> pcs)</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" name="save" id="save" class="btn btn-primary">Save</button>
                            <a href="<?php echo base_url('pdi');?>" class="btn btn-warning">Cancel</a>

                        </div>
                    </div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</form>


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

        $("#new_kwitansidp").click(function () {
            window.location = "kwitansi-dp-tambah";
        })

    });
</script>



<script>
    $(document).ready(function () {

        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
                url: '<?php echo base_url('t_pdi/get_sales_order?query=%QUERY'); ?>',
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
                url: "<?php echo base_url('t_pdi/get_detail_so'); ?>",
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
                },
                async: false
            });

            //$('#terbilang').val(datum.terbilang);
            //$('#norangka').val(datum['norangka']);
            //$('#warna').val(datum['warna']);
            //$('#tahun').val(datum['tahun']);
        });

        table = $('#listItem').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('motor_keluar/get_list_temp'); ?>",
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                    //"className": 'select-checkbox',
                },
                {
                    "targets": [1],
                    "visible": false
                }
            ]
        });

        $("#bulkDelete").on('click', function () { // bulk checked
            var status = this.checked;
            $(".deleteRow").each(function () {
                $(this).prop("checked", status);
            });
        });

        $('#deleteTriger').on("click", function (event) { // triggering delete one by one
            if ($('.deleteRow:checked').length > 0) {  // at-least one checkbox checked
                var ids = [];
                $('.deleteRow').each(function () {
                    if ($(this).is(':checked')) {
                        ids.push($(this).val());
                    }
                });
                var ids_string = ids.toString();  // array to string conversion
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('motor_keluar/datatable_bulk_delete'); ?>",
                    data: {data_ids: ids},
                    success: function (result) {
                        table.draw(); // redrawing datatable
                    },
                    async: false
                });
            }
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

    function cetak() {
        var data = $('#noso').val();
        //var res = data.replace("/,/","-");

        //var mystring = "SO/MKA-2016/XI/000001"  
        var newchar = '_'
        var res = data.split('/').join(newchar);


        //alert(res);
        //$.post( "<?php echo base_url(); ?>kwitansi-diskon-printout/?template=table_html&name=kwitansi-dp-printout", { noso: data } );
        location.href = "<?php echo base_url(); ?>pdi-printout/" + res + "?template=table_html&name=pdi-printout";
        //alert(data);
    }

    function getAccessories(id) {
        $("#aki").html("<option value=''>Wait ...</option>");
        $("#spion").html("<option value=''>Wait ...</option>");
        $("#toolkit").html("<option value=''>Wait ...</option>");
        $("#helm").html("<option value=''>Wait ...</option>");
        $("#rumah_plat").html("<option value=''>Wait ...</option>");
        $("#jacket").html("<option value=''>Wait ...</option>");
        $("#jas_hujan").html("<option value=''>Wait ...</option>");
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_pdi/get_aki'); ?>",
            data: {gudang: id},
            dataType: 'html',
            success: function (result) {
                console.log(result);
                $("#aki").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_pdi/get_spion'); ?>",
            data: {gudang: id},
            dataType: 'html',
            success: function (result) {
                console.log(result);
                $("#spion").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_pdi/get_toolkit'); ?>",
            data: {gudang: id},
            dataType: 'html',
            success: function (result) {
                console.log(result);
                $("#toolkit").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_pdi/get_helm'); ?>",
            data: {gudang: id},
            dataType: 'html',
            success: function (result) {
                console.log(result);
                $("#helm").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_pdi/get_rumah_plat'); ?>",
            data: {gudang: id},
            dataType: 'html',
            success: function (result) {
                console.log(result);
                $("#rumah_plat").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_pdi/get_jacket'); ?>",
            data: {gudang: id},
            dataType: 'html',
            success: function (result) {
                console.log(result);
                $("#jacket").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('t_pdi/get_jas_hujan'); ?>",
            data: {gudang: id},
            dataType: 'html',
            success: function (result) {
                console.log(result);
                $("#jas_hujan").html(result);
            },
            error: function (result) {
                alert(result);
            }
        });
    }
</script>