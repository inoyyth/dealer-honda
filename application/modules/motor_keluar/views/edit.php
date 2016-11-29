<div class="row">
    <form action="<?php echo base_url("motor-keluar-save"); ?>" method="post" parsley-validate novalidate>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Barang Keluar (Edit)</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="hidden" name="id" value="<?php echo $detail['id_motor_keluar'];?>"/>
                        <input type="text" readonly="true" value="<?php echo $detail['kode_motor_keluar']; ?>" name="kode_motor_keluar" parsley-trigger="change" required placeholder="Isi Kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gudang From</label>
                        <input type="hidden" name="id_gudang_out" value="<?php echo $detail['id_gudang_out'];?>"/>
                        <select name="id_gudang_outx" class="form-control" onchange="getGudangTo(this.value);">
                            <?php foreach ($gudang as $kGudang => $vGudang) { ?>
                                <option value="<?php echo $vGudang['id']; ?>" disabled="true" <?php echo ($detail['id_gudang_out']==$vGudang['id']?"selected":"");?>><?php echo $vGudang['gudang']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Gudang To</label>
                        <input type="hidden" name="id_gudang_in" value="<?php echo $detail['id_gudang_in'];?>"/>
                        <select name="id_gudang_inx" class="form-control" id="id_gudang_in">
                            <?php foreach ($gudang as $kGudang => $vGudang) { ?>
                                <option value="<?php echo $vGudang['id']; ?>" disabled="true" <?php echo ($detail['id_gudang_in']==$vGudang['id']?"selected":"");?>><?php echo $vGudang['gudang']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tgl.Mutasi</label>
                        <input type="text" name="tgl_motor_keluar" value="<?php echo $detail['tgl_motor_keluar'];?>" parsley-trigger="change" required placeholder="Pilih Tanggal" class="form-control datepicker">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('motor-keluar'); ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Kode PO</label>
                        <input type="text" name="kode_po_motor_keluar" value="<?php echo $detail['kode_po_motor_keluar'];?>" parsley-trigger="change" required placeholder="Isi Kode PO" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kode DO</label>
                        <input type="text" name="kode_do_motor_keluar" value="<?php echo $detail['kode_do_motor_keluar'];?>" parsley-trigger="change" required placeholder="Isi Kode DO" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>PIC</label>
                        <input type="text" name="pic_motor_keluar" value="<?php echo $detail['pic_motor_keluar'];?>" parsley-trigger="change" required placeholder="Isi PIC" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan_motor_keluar" parsley-trigger="change" required placeholder="Isi Keterangan" class="form-control"><?php echo $detail['keterangan_motor_keluar'];?></textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel default red_border vertical_border h1">
            <div class="block-web">
                <div class="header">
                    <h3>List Item</h3>
                </div>
                <div class="porlets-content">
                    <button class="btn btn-danger btn-sm" id="addList" data-toggle="modal" data-target="#modalBrowse" style="margin-bottom: 5px;">Add</button>
                    <button class="btn btn-warning btn-sm" id="deleteTriger" style="margin-bottom: 5px;">Delete</button> 
                    <!--<button class="btn btn-primary btn-sm" id="saveTriger" style="margin-bottom: 5px;">Save Selected</button>-->
                    <table style="width: 100%;" class="display table table-bordered table-hover" id="listItem">
                        <thead>
                            <tr>
                                <th><input type="checkbox"  id="bulkDelete"  /></th>
                                <th>No.</th>
                                <th>Type</th>
                                <th>No. Rangka</th>
                                <th>No.Mesin</th>
                                <th>Warna</th>
                                <th>Tahun</th>
                            </tr>
                        </thead>
                        <tbody id="bodyList">

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="modalBrowse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">List Motor</h4>
            </div>
            <div class="modal-body">
                <form method="post" name="frmGroupUser" id="frmGroupUser" enctype="multipart/form-data">
                    <div class="form-group" id="remote">
                        <label>No Mesin</label>
                        <input type="hidden" name="id" value="<?php echo $detail['id_motor_keluar'];?>"/>
                        <input type="hidden" name="gudang" value="<?php echo $detail['id_gudang_in'];?>"/>
                        <input class="typeahead form-control" parsley-trigger="change" required name="nomesin" id="nomesin" type="text" placeholder="Type No Mesin">
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" name="tipe" id="tipe" readonly="true" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No Rangka</label>
                        <input type="text" name="norangka" id="norangka" readonly="true" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <input type="text" name="warna" id="warna" readonly="true" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="text" name="tahun" id="tahun" readonly="true" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-primary btn-sm" value="simpan"> 
                    <button type="button" class="close btn btn-sm btn-primary" data-dismiss="modal" aria-label="Close">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        
        var bestPictures = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
              url: '<?php echo base_url('motor_keluar/getMotor?query=%QUERY');?>',
              wildcard: '%QUERY'
            }
        });

        $('#remote .typeahead').typeahead(null, {
          name: 'motor_nomesin',
          display: 'nomesin',
          source: bestPictures
        });
        
        $('#remote .typeahead').bind('typeahead:selected', function(obj, datum, name) {
            console.log(datum);
            $('#tipe').val(datum['tipe']);
            $('#norangka').val(datum['norangka']);
            $('#warna').val(datum['warna']);
            $('#tahun').val(datum['tahun']);
        });
        
        table = $('#listItem').DataTable({
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.

                    // Load data for the table's content from an Ajax source
                    "ajax": {
                        "url": "<?php echo base_url('motor_keluar/get_list_motor_keluar'); ?>",
                        "type": "POST",
                        "data": {id_motor_keluar:<?php echo $detail['id_motor_keluar'];?>}
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
                    url: "<?php echo base_url('motor_keluar/datatable_bulk_deletelistmotor'); ?>",
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
                url : "<?php echo base_url('motor_keluar/inputMotorList'); ?>",
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