<div class="row">
    <!--<form action="<?php echo base_url("motor-keluar-save"); ?>" name="frmGroupUser" id="frmGroupUser" method="post" parsley-validate novalidate>-->
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
                                <option value="" selected="true">All</option>
                                <?php foreach ($gudang as $kGudang => $vGudang) { ?>
                                    <option value="<?php echo $vGudang['id']; ?>"><?php echo $vGudang['gudang']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <button class="btn btn-primary btn-sm" id="btnShow">Show</button>
                            <a href="<?php echo base_url('motor-keluar'); ?>" class="btn btn-default btn-sm">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</form>-->
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel default red_border vertical_border h1">
            <div class="block-web">
                <div class="header">
                    <h3>List Item</h3>
                </div>
                <div class="porlets-content">
                    <button class="btn btn-success btn-sm" id="detailList" style="margin-bottom: 5px;">Detail</button>
                    <button class="btn btn-default btn-sm" id="printPdf" style="margin-bottom: 5px;">PDF</button> 
                    <button class="btn btn-default btn-sm" id="printExcel" style="margin-bottom: 5px;">Excel</button> 
                    <!--<button class="btn btn-primary btn-sm" id="saveTriger" style="margin-bottom: 5px;">Save Selected</button>-->
                    <table style="width: 100%;" class="display table table-bordered table-hover" id="listmotor">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gudang</th>
                                <th>Tipe</th>
                                <th>Warna</th>
                                <th>Stok</th>
                                <th></th>
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
                <button class="btn btn-default btn-sm" id="printPdf" style="margin-bottom: 5px;">PDF</button> 
                <button class="btn btn-default btn-sm" id="printExcel" style="margin-bottom: 5px;">Excel</button> 
                <!--<button class="btn btn-primary btn-sm" id="saveTriger" style="margin-bottom: 5px;">Save Selected</button>-->
                <table style="width: 100%;" class="display table table-bordered table-hover" id="detailmotor">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>No SJ</th>
                            <th>Tgl SJ</th>
                            <th>No.Mesin</th>
                            <th>No.Rangka</th>
                            <th>Tipe</th>
                            <th>Warna</th>
                        </tr>
                    </thead>
                    <tbody id="bodyDetail">

                    </tbody>
                </table>
            </div>
        </div>
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
        $("#bulkDelete").on('click',function() { // bulk checked
            var status = this.checked;
            $(".deleteRow").each( function() {
                $(this).prop("checked",status);
            });
        });
        
        $('#listmotor').DataTable({
            "bDestroy": true,
            "searching": false,
            "bInfo": false,
        });
        
        $('#detailmotor').DataTable({
            "bDestroy": true,
            "searching": false,
            "bInfo": false,
        });
        //form submit
        $("#btnShow").click(function(){
            console.log('btnShow');
            var gudang = $("#gudang").val();
            var tipe = $("#tipe").val();

            table = $('#listmotor').DataTable({

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
                                //"className": 'select-checkbox',
                            }
                        ],
                "bDestroy": true,
                "searching": false,
                "bInfo": false,
            });
        });
        
        $('#detailList').click(function(){ // triggering delete one by one
            if( $('.deleteRow:checked').length > 0 ){  // at-least one checkbox checked
                var ids = [];
                $('.deleteRow').each(function(){
                    if($(this).is(':checked')) { 
                        ids.push($(this).val());
                    }
                });
                var ids_string = ids.toString();  // array to string conversion;
                
                tableDetail = $('#detailmotor').DataTable({

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
                                //"className": 'select-checkbox',
                            }
                        ],
                "bDestroy": true,
                "searching": false,
                "bInfo": false,
            });
            }
        }); 
    });
    
    function popDetail(gudang,tipe){
        console.log(gudang+"-"+tipe);
    }
</script>