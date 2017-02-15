<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Master Birojasa
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'master-biro-jasa-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-biro-jasa-pdf/?template=table_pdf&name=master_gudang', 'text' => 'Print', 'target'=>'_blank')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-biro-jasa-excel/?template=table_excel&name=master_gudang', 'text' => 'Excel', 'target'=>'_blank')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Telepon</th>
                                <th>Pic</th>
                                <th>Status</th>
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
                                        <td><?php echo $v['nama_birojasa']; ?></td>
                                        <td><?php echo $v['telepon_birojasa']; ?></td>
                                        <td><?php echo $v['pic_birojasa']; ?></td>
                                        <td><?php echo get_status($v['status_birojasa']); ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'master-biro-jasa-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <?php echo $this->button_lib->render(array('anchor' => 'del', 'url' => 'master-biro-jasa-delete-' . $v['id'], 'text' => 'Delete')); ?> 
                                        </td>
                                    </tr>
    <?php }
} ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('master-biro-jasa'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="nama_birojasa" class="form-control" value="<?php echo (isset($sr_data['nama_birojasa']) ? $sr_data['nama_birojasa'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="telepon_birojasa" class="form-control" value="<?php echo (isset($sr_data['telepon_birojasa']) ? $sr_data['telepon_birojasa'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="pic_birojasa" value="<?php echo (isset($sr_data['pic_birojasa']) ? $sr_data['pic_birojasa'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <select class="form-control input-sm" name="status_birojasa" onchange="submit_search('form1');"/>                         
                                        <option value=""></option>
                                        <option value="1" <?php echo (isset($sr_data['status_birojasa']) && $sr_data['status_birojasa']=="1"?"selected":"");?>>Aktif</option>
                                        <option value="2" <?php echo (isset($sr_data['status_birojasa']) && $sr_data['status_birojasa']=="2"?"selected":"");?>>Non Aktif</option>
                                    </select>
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