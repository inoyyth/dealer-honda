<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Rekap Kwitansi Leasing</div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'rekap-tagihan-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'rekap-tagihan-pdf/?template=table_pdf&name=kwitansi-leasing', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'rekap-tagihan-excel/?template=table_excel&name=kwitansi-leasing', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No. Tagihan</th>
                                <th>Tgl. Tagihan</th>
                                <th>Total Tagihan</th>
                                <th>Leasing</th>
                                <th>Cabang</th>
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
                                        <td><?php echo $v['no_tagihan']; ?></td>
                                        <td><?php echo $v['tgl_tagihan']; ?></td>
                                        <td><?php echo formatrp($v['tot_tagihan']); ?></td>
                                        <td><?php echo $v['kdleasing']; ?></td>
                                        <td><?php echo $v['cabang_leasing']; ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'rekap-tagihan-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <a href="<?php echo base_url('rekap-tagihan-detail-' . $v['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i> Detail</a>

                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('rekap-tagihan'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="no_tagihan" class="form-control" value="<?php echo (isset($sr_data['no_tagihan']) ? $sr_data['no_tagihan'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="tgl_tagihan" value="<?php echo (isset($sr_data['tgl_tagihan']) ? $sr_data['tgl_tagihan'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="total_tagihan" value="<?php echo (isset($sr_data['tot_tagihan']) ? $sr_data['tot_tagihan'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="kd_leasing" value="<?php echo (isset($sr_data['kdleasing']) ? $sr_data['kdleasing'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
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