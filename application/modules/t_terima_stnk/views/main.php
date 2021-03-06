<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Tanda Terima STNK / BPKB
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'terima-stnk-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'terima-stnk-pdf/?template=table_pdf&name=t_terima_stnk', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'terima-stnk-excel/?template=table_excel&name=t_terima_stnk', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No.Process</th>
                                <th>Birojasa</th>
                                <th>No.Polisi</th>
                                <th>No.STNK</th>
                                <th>No.BPKB</th>
                                <th class="text-center" style="width: 280px;">Action</th>
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
                                        <td><?php echo $v['no_process']; ?></td>
                                        <td><?php echo $v['nama_birojasa']; ?></td>
                                        <td><?php echo $v['t_terima_no_polisi']; ?></td>
                                        <td><?php echo $v['t_terima_no_stnk']; ?></td>
                                        <td><?php echo $v['t_terima_no_bpkb']; ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'terima-stnk-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <?php echo $this->button_lib->render(array('anchor' => 'del', 'url' => 'terima-stnk-delete-' . $v['id'], 'text' => 'Delete')); ?>
                                            <a class="btn btn-default btn-sm print-stnk" href="<?php echo site_url('terima-stnk-print-detail-stnk-'.$v['id']);?>"><i class="fa fa-print"></i> TDT</a> 
                                            <a class="btn btn-default btn-sm print-bpkb" href="<?php echo site_url('terima-stnk-print-detail-bpkb-'.$v['id']);?>"><i class="fa fa-print"></i> BST</a>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('terima-stnk'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="no_process" value="<?php echo (isset($sr_data['no_process']) ? $sr_data['no_process'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="nama_birojasa" value="<?php echo (isset($sr_data['nama_birojasa']) ? $sr_data['nama_birojasa'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="t_terima_no_polisi" value="<?php echo (isset($sr_data['t_terima_no_polisi']) ? $sr_data['t_terima_no_polisi'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="t_terima_no_stnk" value="<?php echo (isset($sr_data['t_terima_no_stnk']) ? $sr_data['t_terima_no_stnk'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="t_terima_no_bpkb" value="<?php echo (isset($sr_data['t_terima_no_bpkb']) ? $sr_data['t_terima_no_bpkb'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {terima
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
<div class="modal fade bs-example-modal-lg" id="modalTstnkBpkb" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div id="TstnkBpkbContent"></div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(".print-stnk").click(function (event) {
            event.preventDefault();
            window.open($(this).attr("href"), "popupWindow", "width=950,height=550,scrollbars=yes");
        });
        
        $(".print-bpkb").click(function (event) {
            event.preventDefault();
            window.open($(this).attr("href"), "popupWindow", "width=950,height=550,scrollbars=yes");
        });
    });
</script>
