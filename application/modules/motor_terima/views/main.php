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
                                    <h3>Information</h3>
                                </div>
                                <div class="porlets-content">
                                    <div class="form-group">
                                        <label>Tanggal Import</label>
                                        <input type="text" class="form-control datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label>Gudang</label>
                                        <select name="kdgudang" id="kdgudang" class="form-control">
                                            <?php foreach ($list_gudang as $kGudang => $vGudang) { ?>
                                                <option value="<?php echo $vGudang['id']; ?>"><?php echo $vGudang['kd_gudang'] . " - " . $vGudang['gudang']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Save</button> 
                                        <button class="btn btn-danger btn-sm">Discard</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
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
                                            <input type="file" name="excel_file" id="excel_file" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-sm">Generate</button> 
                                            <button type="button" class="btn btn-warning btn-sm" id="cancel-form">Cancel</button>
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
                                    <button id="deleteTriger">Delete</button>
                                    <table style="width: 100%;" class="display table table-bordered table-hover" id="listmotor">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No.</th>
                                                <th>No.SJ</th>
                                                <th>Tgl.SJ</th>
                                                <th>No.Mesin</th>
                                                <th>No.Rangka</th>
                                                <th>Tipe</th>
                                                <th>Warna</th>
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
        $("#frmGroupUser").on("submit", function(event){
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
                    table.ajax.reload();
                },
                error: function(e){
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

        $('#listmotor tbody').on('click', 'tr', function () {
            var row = $(this).closest('tr');
            var data = $('#listmotor').dataTable().fnGetData(row);
            //console.log(data[3]);
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
                url: "employee-delete.php",
                data: {data_ids:ids_string},
                success: function(result) {
                    dataTable.draw(); // redrawing datatable
                },
                async:false
            });
        }
    }); 
    });
</script>