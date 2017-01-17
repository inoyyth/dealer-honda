<div class="row">
    <form action="<?php echo base_url("kwitansi-diskon-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Kwitansi Diskon</h3>
                </div>
                
                <div class="row">
                     <div class="col-md-6">
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                            <label class="col-sm-3 control-label">No. Kwitansi</label>
                            <div class="col-sm-9" >
                                <input type="no_kwitansi" name="nokwitansi" id="no_kwitansi" parsley-trigger="change" required value="<?php echo $codeso;?>" class="form-control">
                            </div>
                        </div>
                     </div>
                    
                </div>
         
                <hr style="border:1px solid #000;">
                <div class="row">
                    
                    <div class="col-md-6">
                        
                        
                        
                        <div class="form-group" id="remote">
                            <label class="col-sm-3 control-label">No Sales Order</label>
                            <div class="col-sm-9" >
                                
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
                            <label class="col-sm-3 control-label">Harga OTR</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_otr" id="harga_otr" parsley-trigger="change"     placeholder="Harga OTR" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Diskon</label>
                            <div class="col-sm-9">
                                <input type="diskon" name="diskon" id="diskon" parsley-trigger="change"     placeholder="Diskon" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Terbilang</label>
                            <div class="col-sm-9">
                                <textarea name="terbilang" id="terbilang_diskon"  class="form-control"> </textarea>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No.Rangka</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rangka" id="no_rangka" parsley-trigger="change"     placeholder="No. Rangka" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Mesin</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_mesin" id="no_mesin" parsley-trigger="change"     placeholder="No. Mesin" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Type</label>
                            <div class="col-sm-9">
                            <input type="text" name="type" id="type" parsley-trigger="change" required   placeholder="Type" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                                <input type="text" name="warna" id="warna" parsley-trigger="change" required   placeholder="Warna" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <button name="submit" id="new" name="new" class="btn btn-primary">New</button>
                    <button type="submit" name="save" id="save" class="btn btn-danger">Save</button>
                    <button type="submit" name="edit" id="edit" class="btn btn-default">Edit</button>
                    <button type="reset" name="cancel" id="cancel" class="btn btn-default">Cancel</button>
                    <button type="button" name="print" id="print" onclick="cetak()" class="btn btn-default">Print</button>
                      
                </div>
            </div>


        </div>

    </form>
</div>



<script>
    $(document).ready(function(){
       
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
              url: '<?php echo base_url('t_kwitansi/t_kwitansi_diskon/getSO?query=%QUERY');?>',
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
            $('#diskon').val(datum.diskon);
            $('#no_mesin').val(datum.nomsn);
            $('#warna').val(datum.warna_motor);
            $('#type').val(datum.tipe_motor);
            $('#no_rangka').val(datum.norangka);
            $('#terbilang_diskon').val(datum.terbilang_diskon);
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
    location.href="<?php echo base_url();?>kwitansi-diskon-printout/"+res+"?template=table_html&name=kwitansi-diskon-printout";
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