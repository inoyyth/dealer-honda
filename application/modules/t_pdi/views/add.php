
<div class="row">
    <form action="<?php echo base_url("pdi-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
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
                                <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" class="form-control">
                               <input class="typeahead form-control" parsley-trigger="change" required name="noso" id="noso" type="text" placeholder="Type No Sales Order">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" id="nama" parsley-trigger="change" required placeholder="Nama Customer" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="tanggal" id="tanggal" parsley-trigger="change"     placeholder="Tanggal" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal PDI</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_pdi" id="tgl_pdi" parsley-trigger="change" value="<?php echo date('Y-m-d'); ?>"   placeholder="Tanggal PDI" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">PIC</label>
                            <div class="col-sm-9">
                                <input type="text" name="pic" id="pic" parsley-trigger="change"     placeholder="Input PIC" class="form-control">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe" id="type" parsley-trigger="change" required placeholder="Tipe" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Mesin</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_mesin" id="no_mesin" parsley-trigger="change"     placeholder="No. Mesin" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Rangka</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_rangka" id="no_rangka" parsley-trigger="change"     placeholder="No. Rangka" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                            <input type="text" name="warna" id="warna" parsley-trigger="change" required   placeholder="Warna" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. PDI</label>
                            <div class="col-sm-9">
                                <input type="text" name="kdpdi" id="no_pdi" parsley-trigger="change" required   value="<?php echo @$codeso; ?>" class="form-control">
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
                            <td style="text-align: center;"> Aksesories</td>
                            <td style="text-align: center;"> Kode </td>
                            <td style="text-align: center;"> Status</td>
                        </tr>
                        <tr>
                            <td> Aki</td>
                            <td> 
                                <select name="aki" class="form-control">
                                    <option value=""> </option>
                                </select>
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td> Spion</td>
                            <td> 
                                <input type="text" name="spion" class="form-control"> 
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td> Toolkit</td>
                            <td> 
                                <input type="text" name="spion" class="form-control"> 
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td> Helm</td>
                            <td> 
                                <select name="aki" class="form-control">
                                    <option value=""> </option>
                                </select>
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td> Buku Pedoman Pemilik</td>
                            <td>  
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td> Kertas Gesekan Polda</td>
                            <td>  
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td>Rumah Plat</td>
                            <td>  
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td>Rumah Plat</td>
                            <td>  
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td> Jaket</td>
                            <td> 
                                <select name="aki" class="form-control">
                                    <option value=""> Available </option>
                                    <option value=""> Not Available </option>
                                </select>
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                        <tr>
                            <td> Jas Hujan</td>
                            <td> 
                                <select name="aki" class="form-control">
                                   <option value=""> Available </option>
                                    <option value=""> Not Available </option>
                                </select>
                            </td>
                            <td align="center"> <input type="checkbox" name="aki"> </td>
                        </tr>
                    </table>
                  
                    
                <div class="col-md-6">
                <div class="form-group">
                    <button name="submit" id="new" name="new" class="btn btn-primary">New</button>
                    <button type="submit" name="save" id="save" class="btn btn-danger">Save</button>
                    <button type="submit" name="edit" id="edit" class="btn btn-default">Edit</button>
                    <button type="reset" name="cancel" id="cancel" class="btn btn-default">Cancel</button>
                    <button type="button" name="print" id="print" onclick="cetak()" class="btn btn-default">Print</button>
                      
                </div>
            </div>

                    <div class="clear"></div>
                </div>
            </div>
          


        </div>

    </form>
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



<script>
    $(document).ready(function(){
        
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
              url: '<?php echo base_url('t_kwitansi/t_kwitansidp/getSO?query=%QUERY');?>',
              wildcard: '%QUERY'
            }
        });

        $('#remote .typeahead').typeahead(null, {
          name: 'noso',
          display: 'noso',
          source: bestPictures
        });
        
        $('#remote .typeahead').bind('typeahead:selected', function(obj, datum, name) {
            console.log(datum);
            $('#noso').val(datum.noso);
            $('#harga_otr').val(datum.harga_otr);
            $('#nama').val(datum.nama_customer);
            $('#fee').val(datum.fee);
            $('#no_mesin').val(datum.nomsn);
            $('#warna').val(datum.warna_motor);
            $('#type').val(datum.tipe_motor);
            $('#no_rangka').val(datum.norangka);
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
                
        $("#bulkDelete").on('click',function() { // bulk checked
            var status = this.checked;
            $(".deleteRow").each( function() {
                $(this).prop("checked",status);
            });
        });
     
        $('#deleteTriger').on("click", function(event){ // triggering delete one by one
            if( $('.deleteRow:checked').length > 0 ){  // at-least one checkbox checked
                var ids = [];
                $('.deleteRow').each(function(){
                    if($(this).is(':checked')) { 
                        ids.push($(this).val());
                    }
                });
                var ids_string = ids.toString();  // array to string conversion
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('motor_keluar/datatable_bulk_delete'); ?>",
                    data: {data_ids:ids},
                    success: function(result) {
                        table.draw(); // redrawing datatable
                    },
                    async:false
                });
            }
        }); 
        
        $('#modalBrowse').on('hidden.bs.modal', function (e) {
            $('#frmGroupUser').find('input:text').val('');    
        })
        
        $("#frmGroupUser").on("submit", function(event){
            event.preventDefault();
            var formData = new FormData(this);
            //console.log(formData);
             $.ajax({
                url : "<?php echo base_url('motor_keluar/inputTemp'); ?>",
                type : "post",
                data : formData,
                cache: false,
                contentType: false,
                processData: false,
                //dataType : "json",
                success: function(e){
                    table.ajax.reload();
                    $('#modalBrowse').modal('hide')
                },
                error: function(e){
                    alert('fail');
                }
           });
       });
    });
    
    function cetak(){
    var data = $('#noso').val();
    //var res = data.replace("/,/","-");
    
    //var mystring = "SO/MKA-2016/XI/000001"  
    var newchar = '_'
    var res = data.split('/').join(newchar);


    //alert(res);
    //$.post( "<?php echo base_url();?>kwitansi-diskon-printout/?template=table_html&name=kwitansi-dp-printout", { noso: data } );
    location.href="<?php echo base_url();?>pdi-printout/"+res+"?template=table_html&name=pdi-printout";
    //alert(data);
    }
    
    function getGudangTo(id){
        $("#id_gudang_in").html("<option value=''>Wait ...</option>")
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('motor_keluar/get_gudang_to'); ?>",
            data: {id:id},
            dataType:'html',
            success: function(result) {
                $("#id_gudang_in").html(result);
            },
            error: function(result){
                alert(result);
            }
        });
    }

</script>