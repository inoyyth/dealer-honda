<form action="<?php echo base_url("void-action"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
    <div class="col-md-12">
        <div class="block-web">
            <div class="header">
                <div class="actions"> </div>
                <h3 class="content-header">Void</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group" id="remote">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text" readonly="true" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" id="show-list-so" type="button">Browse !</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                    </div>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--block-web-->
    </div><!--col-md-12-->
</form>
<div id="detailTransaksi"></div>
<!-- Modal Detail-->
<div class="modal fade bs-example-modal-lg" id="modalListSo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Detail History</h4>
            </div>
            <div class="modal-body">
                <table style="width: 100%;font-size: 10px;" class="display table table-bordered table-hover" id="listSo">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No.So</th>
                            <th>No.PDI</th>
                            <th>No.SJ</th>
                            <th>No.Mesin</th>
                            <th>No.Rangka</th>
                            <th>Select</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $("#show-list-so").click(function(){
            $('#listSo').DataTable({
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.

                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo base_url('t_void/get_so_list') ?>",
                    "type": "POST"
                },
                "fnDrawCallback" : function(data,item) {
                    $("#modalListSo").modal('show');
                },
                "columnDefs": [
                    {
                        "targets": [0], //first column / numbering column
                        "orderable": false, //set not orderable
                        //"className": 'select-checkbox',
                    },
                    {
                    "targets": [0],
                    "visible": true
                    }
                ],
                "autoWidth": false,
                "columns": [
                    { "width": "1%" },
                    null,
                    null,
                    null,
                    null,
                    null,
                    { "width": "10%" }
                ],
                "bDestroy": true,
            });
        });
    });
    
    function selectList(id){
    console.log(id);
        $("#detailTransaksi").empty();
        $("#detailTransaksi").load("<?php echo base_url();?>t_void/load_transaksi_detail/" + id);
    }
</script>