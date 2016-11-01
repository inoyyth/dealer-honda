<div class="row">
    <form action="<?php echo base_url("master-gudang-save"); ?>" class="form-horizontal row-border" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Transaksi</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input type="text" name="nosj" parsley-trigger="change" required readonly="true" value="<?php echo $codeso; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tanggal</label>
                        <div class="col-sm-9">
                            <input type="text" name="tanggal" parsley-trigger="change" required placeholder="Pilih Tanggal" class="form-control datepicker">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Mesin</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="hidden" name="id_motor" id="id_motor">
                                <input type="text" readonly="true" name="nomsn" id="nomsn" parsley-trigger="change" required placeholder="Pilih No Mesin" class="form-control">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBrowse">Browse</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="norangka" id="norangka" parsley-trigger="change" required readonly="true" placeholder="No Rangka" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Motor</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_motor" id="nama_motor" parsley-trigger="change" required readonly="true" placeholder="Nama Motor" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna" id="warna" parsley-trigger="change" required readonly="true" placeholder="Warna" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="text" name="tahun" id="tahun" parsley-trigger="change" required readonly="true" placeholder="Tahun" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Varian</label>
                        <div class="col-sm-9">
                            <input type="text" name="varian" id="varian" parsley-trigger="change" required readonly="true" placeholder="Warna" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga OTR</label>
                        <div class="col-sm-9">
                            <input type="text" name="harga_otr" id="harga_otr" parsley-trigger="change" required readonly="true" placeholder="Harga OTR" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Customer</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input type="text" name="nosj" parsley-trigger="change" required readonly="true" value="<?php echo $codeso; ?>" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="modalBrowse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List Motor</h4>
            </div>
            <div class="modal-body">
                <table style="width: 100%;" class="display table table-bordered table-hover" id="listmotor">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>No. Mesin</th>
                            <th>No. Rangka</th>
                            <th>Nama</th>
                            <th>Warna</th>
                            <th>Tahun</th>
                            <th>Varian</th>
                            <th>Harga OTR</th>
                        </tr>
                    </thead>
                    <tbody id="mesinList">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Apply</button>
                <!--<button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
    </div>
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
                "url": "<?php echo base_url('t_penjualan/t_penjualan/get_list_motor')?>",
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
            $("#id_motor").val(data[1]);
            $("#nomsn").val(data[2]);
            $("#norangka").val(data[3]);
            $("#nama_motor").val(data[4]);
            $("#warna").val(data[5]);
            $("#tahun").val(data[6]);
            $("#varian").val(data[7]);
            $("#harga_otr").val(data[8]);
        });
    });
</script>