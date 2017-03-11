<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Cetak Surat Jalan
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <?php //echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'pdi-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'surat-jalan-pdf/?template=table_pdf&name=t_surat_jalan', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'surat-jalan-excel/?template=table_excel&name=t_surat_jalan', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No.SJ</th>
                                <th>No.PDI</th>
                                <th>No.SO</th>
                                <th>PDI Date</th>
                                <th>Prt.Date</th>
                                <th>Prt.User</th>
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
                                        <td><?php echo $v['nosj']; ?></td>
                                        <td><?php echo $v['kdpdi']; ?></td>
                                        <td><?php echo $v['noso']; ?></td>
                                        <td><?php echo $v['tgl_pdi'].$this->sessionGlobal['super_admin']; ?></td>
                                        <td><?php echo $v['sj_print_date']; ?></td>
                                        <td><?php echo $v['nama_lengkap']; ?></td>
                                        <td class="text-center">
                                            <?php if ($v['sj_print_status'] == "1" && $this->sessionGlobal['super_admin'] == "1") { ?>
                                                <a href="<?php echo base_url('surat-jalan-printsj-' . encode_url($v['noso'])); ?>" class="btn btn-default btn-sm sjBtn" target="_blank"><i class="fa fa-print"></i> Print SJ</a> 
                                            <?php } else if ($this->sessionGlobal['super_admin'] == "2") { ?>
                                                <a href="<?php echo base_url('surat-jalan-printsj-' . encode_url($v['noso'])); ?>" class="btn btn-default btn-sm sjBtn" target="_blank"><i class="fa fa-print"></i> Print SJ</a> 
                                            <?php } else { ?>
                                                PRINTED
                                            <?php } ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('surat-jalan'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="nosj" class="form-control" value="<?php echo (isset($sr_data['t_pdi.nosj']) ? $sr_data['t_pdi.nosj'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                    submit_search('form1');
                                                } else {
                                                    return false;
                                                }
                                                ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="kdpdi" class="form-control" value="<?php echo (isset($sr_data['kdpdi']) ? $sr_data['kdpdi'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                    submit_search('form1');
                                                } else {
                                                    return false;
                                                }
                                                ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="noso" value="<?php echo (isset($sr_data['t_pdi.noso']) ? $sr_data['t_pdi.noso'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                    submit_search('form1');
                                                } else {
                                                    return false;
                                                }
                                                ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="tgl_pdi" value="<?php echo (isset($sr_data['tgl_pdi']) ? $sr_data['tgl_pdi'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
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
        $('.sjBtn').click(function (event) {
            event.preventDefault();
            window.open($(this).attr("href"), "popupWindow", "width=960,height=550,scrollbars=yes");
        });
    });
</script>