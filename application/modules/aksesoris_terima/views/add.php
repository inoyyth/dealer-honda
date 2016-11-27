<div class="row">
    <form action="<?php echo base_url("input-penerimaan-aksesoris-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-8">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Input Aksesoris</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Kode Aksesoris</label>
                        <div class="input-group">
                            <input type="hidden" name="id_aksesoris" id="id_aksesoris">
                            <input type="text" readonly="true" name="kd_aksesoris" id="kd_aksesoris" parsley-trigger="change" required placeholder="Pilih Kode Aksesoris" class="form-control">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBrowse">Browse</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Aksesoris</label>
                        <input type="text" name="aksesoris" id="aksesoris" parsley-trigger="change" required placeholder="Isi Nama Aksesoris"  readonly="true" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" parsley-trigger="change" required placeholder="Isi Jumlah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gudang</label>
                        <select style="text-transform: capitalize;" name="kategori" class="form-control" required="true">
                            <?php foreach ($gudang as $kGudang => $vGudang) { ?>
                                <option value="<?php echo $vGudang['id']; ?>"><?php echo $vGudang['gudang']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('input-penerimaan-aksesoris'); ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Foto Aksesoris</h3>
                </div>
                <div class="porlets-content">
                    <img id="image1"  onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/user_icon.png'); ?>';"  src="<?php echo base_url('assets/images/user_icon.png'); ?>" style="height: 200px;" alt="..." class="img-circle img-responsive">
                </div>
            </div>
        </div>
    </form>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="block-web">
            <div class="header">
                <div class="actions"> </div>
                <h3 class="content-header">List Data</h3>
            </div>
            <div class="porlets-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Aksesoris</th>
                                <th>Nama Aksesoris</th>
                                <th>Jumlah</th>
                                <th>Gudang</th>
                                <th class="text-center" style="width: 150px;">Action</th>
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
                                        <td><?php echo $v['kd_aksesoris']; ?></td>
                                        <td><?php echo $v['aksesoris']; ?></td>
                                        <td><?php echo $v['jumlah']; ?></td>
                                        <td><?php echo $v['gudang']; ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'input-penerimaan-aksesoris-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <?php echo $this->button_lib->render(array('anchor' => 'del', 'url' => 'input-penerimaan-aksesoris-delete-' . $v['id'], 'text' => 'Delete')); ?> 
                                            <!--<a href="<?php echo base_url('input-penerimaan-aksesoris-detail-' . $v['id']); ?>" class="btn btn-sm btn-success"><i class="fa fa-info-circle"></i> Detail</a>-->
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('input-penerimaan-aksesoris'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="kd_aksesoris" class="form-control" value="<?php echo (isset($sr_data['kd_aksesoris']) ? $sr_data['kd_aksesoris'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="aksesoris" value="<?php echo (isset($sr_data['aksesoris']) ? $sr_data['aksesoris'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="jumlah" value="<?php echo (isset($sr_data['jumlah']) ? $sr_data['jumlah'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="gudang" value="<?php echo (isset($sr_data['gudang']) ? $sr_data['gudang'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
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
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="modalBrowse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">List Motor</h4>
            </div>
            <div class="modal-body">
                <table style="width: 100%;" class="display table table-bordered table-hover" id="listaksesoris">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Foto</th>
                            <th>Kode</th>
                            <th>Aksesoris</th>
                        </tr>
                    </thead>
                    <tbody id="aksesorisList">

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
        table = $('#listaksesoris').DataTable({
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('aksesoris_terima/get_list_aksesoris') ?>",
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
                },
                {
                    "targets": [2],
                    "visible": false
                }
            ],
            select: {
                style: 'single'
            },
        });

        $('#listaksesoris tbody').on('click', 'tr', function () {
            var row = $(this).closest('tr');
            var data = $('#listaksesoris').dataTable().fnGetData(row);
            $("#id_aksesoris").val(data[1]);
            $("#kd_aksesoris").val(data[3]);
            $("#aksesoris").val(data[4]);
            $('#image1').attr('src', data[2]);
        });
    });
</script>