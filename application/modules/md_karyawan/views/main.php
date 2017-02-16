<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Master Karyawan
                    </div>
                    <div class="col-md-6 pull-right text-right">
                        <?php echo $this->button_lib->render(array('anchor' => 'add', 'url' => 'master-karyawan-tambah', 'text' => 'Tambah')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-karyawan-pdf/?template=table_pdf&name=master_karyawan', 'text' => 'Print')); ?>
                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'master-karyawan-excel/?template=table_excel&name=master_karyawan', 'text' => 'Excel')); ?>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Karyawan</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Tgl Masuk</th>
                                <th>Status</th>
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
                                        <td><?php echo $v['kd_karyawan']; ?></td>
                                        <td><?php echo $v['karyawan']; ?></td>
                                        <td><?php echo $v['jabatan']; ?></td>
                                        <td><?php echo $v['tgl_masuk']; ?></td>
                                        <td><?php echo get_status($v['status_karyawan']); ?></td>
                                        <td class="text-center">
                                            <?php echo $this->button_lib->render(array('anchor' => 'upd', 'url' => 'master-karyawan-edit-' . $v['id'], 'text' => 'Edit')); ?>
                                            <?php echo $this->button_lib->render(array('anchor' => 'del', 'url' => 'master-karyawan-delete-' . $v['id'], 'text' => 'Delete')); ?>
                                        </td>
                                    </tr>
                                <?php }
                            }
                            ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('master-karyawan'); ?>">
                            <tr>
                                <td>#</td>
                                <td>
                                    <input class="form-control input-sm" name="kd_karyawan" class="form-control" value="<?php echo (isset($sr_data['kd_karyawan']) ? $sr_data['kd_karyawan'] : ""); ?>" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="karyawan" value="<?php echo (isset($sr_data['karyawan']) ? $sr_data['karyawan'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <select class="form-control input-sm" name="kd_jabatan_karyawan" onchange="submit_search('form1');"> 
                                        <option value=""></option>
                                        <?php foreach ($list_jabatan as $kListJabatan => $vListJabatan) { ?>
                                            <option value="<?php echo $vListJabatan['id']; ?>" <?php echo ($vListJabatan['id'] == $sr_data['kd_jabatan_karyawan'] ? "selected" : ""); ?>><?php echo $vListJabatan['jabatan']; ?></option>
<?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <input class="form-control input-sm datepicker" name="tgl_masuk" value="<?php echo (isset($sr_data['tgl_masuk']) ? $sr_data['tgl_masuk'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <select class="form-control input-sm" name="status_karyawan" onchange="submit_search('form1');">                         
                                        <option value=""></option>
                                        <option value="1" <?php echo (isset($sr_data['status_karyawan']) && $sr_data['status_karyawan'] == "1" ? "selected" : ""); ?>>Aktif</option>
                                        <option value="2" <?php echo (isset($sr_data['status_karyawan']) && $sr_data['status_karyawan'] == "2" ? "selected" : ""); ?>>Non Aktif</option>
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