<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Master Aksesoris
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'master-aksesoris-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-aksesoris-pdf/?template=table_pdf&name=master_aksesoris', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-aksesoris-excel/?template=table_excel&name=master_aksesoris', 'text' => 'Excel')); ?>
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
                                <th>Nama</th>
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
                                        <td><?php echo $v['kd_aksesoris']; ?></td>
                                        <td><?php echo $v['aksesoris']; ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'master-aksesoris-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <?php echo $this->button_lib->render(array('anchor' => 'del', 'url' => 'master-aksesoris-delete-' . $v['id'], 'text' => 'Delete')); ?>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('master-aksesoris'); ?>">
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