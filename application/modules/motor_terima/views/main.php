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
                                    <h3>Form Import</h3>
                                </div>
                                <div class="porlets-content">
                                    <div class="form-group">
                                        <label>Tanggal Import</label>
                                        <input type="text" class="form-control datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label>Excel File</label>
                                        <input type="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm" id="generateExcel">Generate</button> 
                                        <button class="btn btn-warning btn-sm" id="cancelExcel">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-6">
                    <section class="panel default red_border vertical_border h1">
                        <div class="block-web">
                            <div class="header">
                                <h3>Gudang</h3>
                            </div>
                            <div class="porlets-content">
                                <div class="form-group">
                                    <label>Gudang</label>
                                    <select name="kdgudang" id="kdgudang" class="form-control">
                                        <?php foreach($list_gudang as $kGudang=>$vGudang){ ?>
                                        <option value="<?php echo $vGudang['id'];?>"><?php echo $vGudang['kd_gudang']. " - ".$vGudang['gudang'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
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
        $("#generateExcel").click(function(){
            table.ajax.reload();
        });
        table = $('#listmotor').DataTable({ 

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('motor_terima/get_list_temp')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                { 
                    "targets": [ 0 ], //first column / numbering column
                    "orderable": false, //set not orderable
                    "className": 'select-checkbox',
                },
                {
                    "targets": [ 1 ],
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
    });
</script>