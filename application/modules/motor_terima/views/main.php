<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Import Penerimaan Motor Baru</div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <section class="panel default red_border vertical_border h1">
                            <div class="block-web">
                                <div class="header">
                                    <h3>Upload Form</h3>
                                </div>
                                <div class="porlets-content">
                                    <form method="post" name="frmGroupUser" id="frmGroupUser" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Excel File</label>
                                            <input type="file" name="excel_file" id="excel_file" class="form-control" required="true">
                                            <input type="hidden" name="exel_name" id="exel_name">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="myButton" data-loading-text="Loading..." class="btn btn-primary btn-sm">Generate</button> 
                                            <button type="button" class="btn btn-warning btn-sm" id="cancel-form">Cancel</button>
                                            <a href="<?php echo base_url('motor-terima-template-excel');?>" class="btn btn-success btn-sm">[Download Template]</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel default red_border vertical_border h1">
                            <div class="block-web">
                                <div class="header">
                                    <h3>Data Excel</h3>
                                </div>
                                <div class="porlets-content">
                                    <button class="btn btn-warning btn-sm" id="deleteTriger" style="margin-bottom: 5px;">Delete</button> 
                                    <button class="btn btn-danger btn-sm" id="deleteTrigerAll" style="margin-bottom: 5px;">Delete All</button>
                                    <button class="btn btn-primary btn-sm" id="saveTriger" style="margin-bottom: 5px;">Save Selected</button>
                                    <table style="width: 100%;" class="display table table-bordered table-hover" id="listmotor">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox"  id="bulkDelete"  /></th>
                                                <th>No.</th>
                                                <th>No.SJ</th>
                                                <th>Tgl.SJ</th>
                                                <th>No.Mesin</th>
                                                <th>No.Rangka</th>
                                                <th>Tipe</th>
                                                <th>Warna</th>
                                                <th>Gudang</th>
                                            </tr>
                                        </thead>
                                        <tbody id="mesinList">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#cancel-form").click(function(){
            console.log('clear');
           $('input').val(""); 
        });
        $("#frmGroupUser").on("submit", function(event){
            var $btn = $("#myButton").button('loading');
            event.preventDefault();
            var formData = new FormData(this);
            //console.log(formData);
             $.ajax({
                url : "<?php echo base_url('import-penerimaan-motor-upload'); ?>", 
                type : "post",
                data : formData,
                cache: false,
                contentType: false,
                processData: false,
                //dataType : "json",
                success: function(e){
                    $btn.button('reset')
                    table.ajax.reload();
                },
                error: function(e){
                    $btn.button('reset')
                    alert('fail');
                }
           });
       });
        table = $('#listmotor').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('motor_terima/get_list_temp'); ?>",
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

        $('#listmotor tbody').on('click', 'tr', function () {
            var row = $(this).closest('tr');
            var data = $('#listmotor').dataTable().fnGetData(row);
            //console.log(data[3]);
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
                    url: "<?php echo base_url('motor_terima/datatable_bulk_delete'); ?>",
                    data: {data_ids:ids},
                    success: function(result) {
                        table.draw(); // redrawing datatable
                    },
                    async:false
                });
            }
        }); 
        
        $('#saveTriger').on("click", function(event){ // triggering delete one by one
            if( $('.deleteRow:checked').length > 0 ){  // at-least one checkbox checked
                var ids = [];
                $('.deleteRow').each(function(){
                    if($(this).is(':checked')) { 
                        ids.push($(this).val());
                    }
                });
                var ids_string = ids.toString();  // array to string conversion
                var file_name = $("#exel_name").val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('motor_terima/datatable_bulk_save'); ?>",
                    data: {data_ids:ids,file_name:file_name},
                    success: function(result) {
                        table.draw(); // redrawing datatable
                    },
                    async:false
                });
            }
        }); 
        
        $('#deleteTrigerAll').on("click", function(event){ // triggering delete one by one
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('motor_terima/datatable_bulk_delete_all'); ?>",
                //data: {data_ids:ids},
                success: function(result) {
                    table.draw(); // redrawing datatable
                },
                async:false
            });
        });
        
        document.getElementById('excel_file').onchange = function () {
            $("#exel_name").val(this.value);
        };
    });
</script>