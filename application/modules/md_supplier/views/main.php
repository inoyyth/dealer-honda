<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Master Supplier
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'master-supplier-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-supplier-pdf/?template=table_pdf&name=master_supplier', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-supplier-excel/?template=table_excel&name=master_supplier', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Supplier</th>
                                <th>Supplier</th>
                                <th>Pic</th>
                                <th>Telp. / HP</th>
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
                                        <td style="text-transform: uppercase;"><?php echo $v['kdsupplier']; ?></td>
                                        <td><?php echo $v['supplier']; ?></td>
                                        <td><?php echo $v['pic']; ?></td>
                                        <td><?php echo $v['telp'] . " / " . $v['hp']; ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'master-supplier-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <?php echo $this->button_lib->render(array('anchor' => 'del', 'url' => 'master-supplier-delete-' . $v['id'], 'text' => 'Delete')); ?>
                                            <!--<a href="<?php echo base_url('master-supplier-detail-' . $v['id']); ?>" class="btn btn-sm btn-success"><i class="fa fa-info-circle"></i> Detail</a>-->
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('master-supplier'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="kdsupplier" class="form-control" value="<?php echo (isset($sr_data['kdsupplier']) ? $sr_data['kdsupplier'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="supplier" value="<?php echo (isset($sr_data['supplier']) ? $sr_data['supplier'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="pic" value="<?php echo (isset($sr_data['pic']) ? $sr_data['pic'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="telp" value="<?php echo (isset($sr_data['telp']) ? $sr_data['telp'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    
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