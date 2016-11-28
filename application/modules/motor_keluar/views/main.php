<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Barang Keluar</div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'motor-keluar-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'motor-keluar-pdf/?template=table_pdf&name=master_jabatan', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'motor-keluar-excel/?template=table_excel&name=master_jabatan', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Gudang In</th>
                                <th>Gudang Out</th>
                                <th>No. PO</th>
                                <th>No. DO</th>
                                <th class="text-center">Action</th>
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
                                        <td><?php echo $v['kode_motor_keluar']; ?></td>
                                        <td><?php echo $v['gudang_keluar']; ?></td>
                                        <td><?php echo $v['gudang_masuk']; ?></td>
                                        <td><?php echo $v['kode_po_motor_keluar']; ?></td>
                                        <td><?php echo $v['kode_do_motor_keluar']; ?></td>
                                        <td class="text-center" style="width: 150px;">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'motor-keluar-edit-' . $v['id_motor_keluar'], 'text' => 'Edit')); ?>
                                            <?php echo $this->button_lib->render(array('anchor' => 'del', 'url' => 'motor-keluar-delete-' . $v['id_motor_keluar'], 'text' => 'Delete')); ?>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('motor-keluar'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="kode_motor_keluar" class="form-control" value="<?php echo (isset($sr_data['kode_motor_keluar']) ? $sr_data['kode_motor_keluar'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="gudang_keluar" value="<?php echo (isset($sr_data['gudang_masuk.gudang.gudang']) ? $sr_data['gudang_masuk.gudang'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="gudang_masuk" value="<?php echo (isset($sr_data['gudang_masuk.gudang']) ? $sr_data['gudang_masuk.gudang'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="kode_po_motor_keluar" value="<?php echo (isset($sr_data['kode_po_motor_keluar']) ? $sr_data['kode_po_motor_keluar'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="kode_do_motor_keluar" value="<?php echo (isset($sr_data['kode_do_motor_keluar']) ? $sr_data['kode_do_motor_keluar'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>&nbsp;</td>
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