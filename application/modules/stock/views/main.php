<div class="row">
    <form action="<?php echo base_url("motor-keluar-save"); ?>" name="frmGroupUser" id="frmGroupUser" method="post" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Stock</h3>
                </div>
                <div class="porlets-content">
                    <div class="row">
                        <input type="hidden" name="id">
                        <div class="form-group col-lg-6" id="remote">
                            <label>Tipe Motor</label>
                            <input class="typeahead form-control" style="text-transform: uppercase;" parsley-trigger="change" required name="tipe" id="tipe" type="text" placeholder="Tipe Motor">
                        </div>
                        <div class="form-group col-lg-6">
                            <label>Gudang</label>
                            <select name="gudang" class="form-control" id="gudang"  parsley-trigger="change" required="true">
                                <option value="" disabled="true" selected="true">Choose...</option>
                                <?php foreach ($gudang as $kGudang => $vGudang) { ?>
                                    <option value="<?php echo $vGudang['id']; ?>"><?php echo $vGudang['gudang']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-primary btn-sm" type="submit">Show</button>
                            <a href="<?php echo base_url('motor-keluar'); ?>" class="btn btn-default btn-sm">Cancel</a>
                        </div>
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
                    <table style="width: 100%;" class="display table table-bordered table-hover" id="listmotor">
                        <thead>
                            <tr>
                                <th><input type="checkbox"  id="bulkDelete"  /></th>
                                <th>No.</th>
                                <th>No. Mesin</th>
                                <th>No. Rangka</th>
                                <th>Type</th>
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
<script>
    $(document).ready(function(){
        //autocomplete
        var searchData = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            remote: {
              url: '<?php echo base_url('stock/getMotorType?query=%QUERY');?>',
              wildcard: '%QUERY'
            }
        });

        $('#remote .typeahead').typeahead(null, {
          name: 'tipe_motor',
          display: 'tipe_motor',
          source: searchData
        });
        
        $('#remote .typeahead').bind('typeahead:selected', function(obj, datum, name) {
            //console.log(datum);
        });
        
        //datatables
        var gudang = $("#gudang").val();
        var tipe = $("#tipe").val();
        
        var table = $('#listmotor').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('stock/get_list_motor/') ?>",
                "type": "POST",
                "data": {
                            "tipe": tipe,
                            "gudang": gudang
                        }
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
    
        //form submit
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
</script>