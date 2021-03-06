<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Penjualan
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'penjualan-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'penjualan-pdf/?template=table_pdf&name=t_penjualan', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'penjualan-excel/?template=table_excel&name=t_penjualan', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No.SO</th>
                                <th>No. Mesin</th>
                                <th>Harga</th>
                                <th>Tipe</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 270px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($data) < 1) {
                                echo"<tr><td class='text-center' colspan='10'>-No Data Found-</td></tr>";
                            } else {
                                foreach ($data as $k => $v) {
                                    switch ($v['m_status']) {
                                        case 1:
                                            $status = "On Process";
                                            break;
                                        case 2:
                                            $status="Canceled";
                                            break;
                                        case 3:
                                            $status = "Deleted";
                                            break;
                                        case 4:
                                            $status = "Void";
                                            break;
                                        case 5:
                                            $status = "Finish";
                                            break;
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo intval($this->uri->segment(2) + ($k + 1)); ?></td>
                                        <td><?php echo $v['noso']; ?></td>
                                        <td><?php echo $v['nomsn']; ?></td>
                                        <td><?php echo formatrp($v['harga_otr']); ?></td>
                                        <td><?php echo $v['tipe']; ?></td>
                                        <td><?php echo $status; ?></td>
                                        <td class="text-center">
                                            <?php if($v['m_status']==1) { ?>
                                                <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'penjualan-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                                <a href="<?php echo base_url('penjualan-detail-' . $v['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i> Detail</a>
                                                
                                                <?php if ($v['fee_print'] == "1" && $this->sessionGlobal['super_admin'] == "1") { ?>
                                                    <a href="<?php echo base_url('penjualan-fee-' . $v['id']); ?>" class="btn btn-default btn-sm feeBtn" target="_blank"><i class="fa fa-print"></i> Fee</a> 
                                                <?php } else if ($this->sessionGlobal['super_admin'] == "2") { ?>
                                                    <a href="<?php echo base_url('penjualan-fee-' . $v['id']); ?>" class="btn btn-default btn-sm feeBtn" target="_blank"><i class="fa fa-print"></i> Fee</a> 
                                                <?php } else { ?>
                                                    
                                                <?php } ?>
                                                    
                                                <?php if ($v['discount_print'] == "1" && $this->sessionGlobal['super_admin'] == "1") { ?>
                                                    <a href="<?php echo base_url('penjualan-diskon-' . $v['id']); ?>" class="btn btn-default btn-sm diskonBtn" target="_blank"><i class="fa fa-print"></i> Disc</a>
                                                <?php } else if ($this->sessionGlobal['super_admin'] == "2") { ?>
                                                    <a href="<?php echo base_url('penjualan-diskon-' . $v['id']); ?>" class="btn btn-default btn-sm diskonBtn" target="_blank"><i class="fa fa-print"></i> Disc</a> 
                                                <?php } else { ?>
                                                    
                                                <?php } ?>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('penjualan'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="noso" class="form-control" value="<?php echo (isset($sr_data['noso']) ? $sr_data['noso'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="nomsn" value="<?php echo (isset($sr_data['nomsn']) ? $sr_data['nomsn'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="harga_otr" value="<?php echo (isset($sr_data['harga_otr']) ? $sr_data['harga_otr'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="tipe" value="<?php echo (isset($sr_data['tipe']) ? $sr_data['tipe'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
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
<script>
    $(document).ready(function () {
        $('.feeBtn').click(function (event) {
            event.preventDefault();
            window.open($(this).attr("href"), "popupWindow", "width=900,height=550,scrollbars=yes");
        });

        $('.diskonBtn').click(function (event) {
            event.preventDefault();
            window.open($(this).attr("href"), "popupWindow", "width=900,height=550,scrollbars=yes");
        });
    });
</script>