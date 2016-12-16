<div class="row">

    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Master Jabatan

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
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'master-jabatan-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-jabatan-pdf/?template=table_pdf&name=master_jabatan', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-jabatan-excel/?template=table_excel&name=master_jabatan', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Level</th>
                                <th>Keterangan</th>
                                <th class="text-center">Action</th>

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
                    <button class="btn btn-default btn-sm" style="margin-bottom: 5px;" onclick="printList('pdf');">PDF</button> 
                    <button class="btn btn-default btn-sm" style="margin-bottom: 5px;" onclick="printList('excel');">Excel</button> 
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
                        <tbody>
                            <?php
                            if (count($data) < 1) {
                                echo"<tr><td class='text-center' colspan='10'>-No Data Found-</td></tr>";
                            } else {
                                foreach ($data as $k => $v) {
                                    ?>
                                    <tr>
                                        <td><?php echo intval($this->uri->segment(2) + ($k + 1)); ?></td>
                                        <td><?php echo $v['jabatan']; ?></td>
                                        <td><?php echo $v['keterangan']; ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'master-jabatan-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <?php echo $this->button_lib->render(array('anchor' => 'del', 'url' => 'master-jabatan-delete-' . $v['id'], 'text' => 'Delete')); ?>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('master-jabatan'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="jabatan" class="form-control" value="<?php echo (isset($sr_data['jabatan']) ? $sr_data['jabatan'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="keterangan" value="<?php echo (isset($sr_data['keterangan']) ? $sr_data['keterangan'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                            </tr>
                            </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-lg-1 pull-left text-left">	
        <select class="form-control input-sm" name="page" onchange="submit_search('form1');"/>
        <option value="10" <?php echo (isset($sr_data['page']) && $sr_data['page'] == "10" ? "selected" : ""); ?>>10</option>
        <option value="25" <?php echo (isset($sr_data['page']) && $sr_data['page'] == "25" ? "selected" : ""); ?>>25</option>
        <option value="50" <?php echo (isset($sr_data['page']) && $sr_data['page'] == "50" ? "selected" : ""); ?>>50</option>
        <option value="100" <?php echo (isset($sr_data['page']) && $sr_data['page'] == "100" ? "selected" : ""); ?>>100</option>
        </select>
    </div>
</form>
<div class="col-lg-11 pull-right text-right">	
<?php echo $paging; ?>
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
                <div class="row">
                    <input type="hidden" id="gudangX">
                    <input type="hidden" id="tipeX">
                    <div class="col-lg-3" id="md-gudang">Gudang : Master Dealer</div>
                    <div class="col-lg-4" id="md-stock">Stock : 50 Motor</div>
                </div>
                <div class="row">
                    <div class="col-lg-3" id="md-tipe">Tipe : DSN09080</div>
                    <!--<div class="col-lg-4" id="md-warna">Warna : Merah</div>-->
                </div>
                <br>
                <button class="btn btn-default btn-sm" style="margin-bottom: 5px;" onclick="printDetail('pdf');">PDF</button> 
                <button class="btn btn-default btn-sm" style="margin-bottom: 5px;" onclick="printDetail('excel');">Excel</button> 
                <!--<button class="btn btn-primary btn-sm" id="saveTriger" style="margin-bottom: 5px;">Save Selected</button>-->
                <table style="width: 100%;" class="display table table-bordered table-hover" id="detailmotor">
                    <thead>
                        <tr>
                            <th>#</th>
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
    });
    
    function popDetail(gudang,tipe){
        $('#detailmotor').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('stock/get_list_detail_motor/') ?>",
                "type": "POST",
                "data": {
                    "tipe": tipe,
                    "gudang": gudang
                },
//                "success": function(data){
//                    console.log(data);
//                },
            },
            "fnDrawCallback" : function(data,item) {
                console.log(data.json);
                $("#md-gudang").html("Gudang : <b>"+data.json.gudang+"</b>");
                $("#md-stock").html("Stok : <b>"+data.json.recordsFiltered+"</b>");
                $("#md-tipe").html("Tipe : <b>"+data.json.tipe+"</b>");
                $("#gudangX").val(data.json.gudang_id);
                $("#tipeX").val(data.json.tipe);
                $('#modalBrowse').modal('show');
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
    
    function printList(tipeFormat){
        console.log(tipeFormat);
        var gudang = $("#gudang").val();
        var tipe = $("#tipe").val(); 
        if(tipeFormat === "pdf"){
            url = "stock-pdf/?template=table_pdf&name=stock&gudang="+gudang+"&tipe="+tipe;
        }else{
            url = "stock-excel/?template=table_excel&name=stock&gudang="+gudang+"&tipe="+tipe;
        }
        window.open(url,'_blank');
    }
    
    function printDetail(tipeFormat){
        console.log(tipeFormat);
        var gudang = $("#gudangX").val();
        var tipe = $("#tipeX").val(); 
        if(tipeFormat === "pdf"){
            url = "stock-pdf-detail/?template=table_pdf_detail&name=stock&gudang="+gudang+"&tipe="+tipe;
        }else{
            url = "stock-excel-detail/?template=table_excel_detail&name=stock&gudang="+gudang+"&tipe="+tipe;
        }
        window.open(url,'_blank');
    }
</script>
>>>>>>> 0cc83b702b604466a3ac271e832a3cc7e3401725
