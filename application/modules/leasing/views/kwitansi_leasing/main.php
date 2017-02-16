<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Kwitansi Leasing</div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'cetak-kwitansi-leasing-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'cetak-kwitansi-leasing-pdf/?template=table_pdf&name=kwitansi-leasing', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'cetak-kwitansi-leasing-excel/?template=table_excel&name=kwitansi-leasing', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No. Kwitansi</th>
                                <th>No. SO</th>
                                <th>DP System</th>
                                <th class="text-center" style="width: 270px;">Action</th>
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
                                        <td><?php echo $v['nokwitansi']; ?></td>
                                        <td><?php echo $v['noso']; ?></td>
                                        <td><?php echo formatrp($v['dp_system']); ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'cetak-kwitansi-leasing-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <a href="<?php echo base_url('cetak-kwitansi-leasing-detail-' . $v['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i> Detail</a>

                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('cetak-kwitansi-leasing'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="nokwitansi" class="form-control" value="<?php echo (isset($sr_data['nokwitansi']) ? $sr_data['nokwitansi'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="noso" value="<?php echo (isset($sr_data['noso']) ? $sr_data['noso'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="dp_system" value="<?php echo (isset($sr_data['dp_system']) ? $sr_data['dp_system'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
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