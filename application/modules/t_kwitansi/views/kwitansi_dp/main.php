<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Kwitansi DP
                    </div>
                    <div class="col-md-6 pull-right text-right">
                         <a href="<?php echo base_url('kwitansi-dp-tambah');?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Tambah </a>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>No.Kwitansi</th>
                                <th>No.SO</th>
                                <th>Nama Customer</th>
                                <th>DP Ke</th>
                              
                                <th class="text-center" style="width: 220px;">Action</th>
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
                                        <td><?php echo $v['nama_customer']; ?></td>
                                        <td><?php echo $v['transaksi']; ?></td>
                                         
                                        <td class="text-center">
 
                                            <a href="<?php echo base_url('kwitansi-dp-detail/'.$v['id']);?>" class="btn btn-default btn-sm"><i class="fa fa-info"></i> Detail</a>
                                            <a href="<?php echo base_url('kwitansi-dp-pdf/'.$v['id']);?>" target="_blank" class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</a>
                                        </td>
                                    </tr>
    <?php }
} ?>
                        </tbody>
                        <tfoot>
                        <form id="form1" method="post" action="<?php echo base_url('kwitansi-dp'); ?>">
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
                                    <input class="form-control input-sm" name="nama_customer" value="<?php echo (isset($sr_data['nama_customer']) ? $sr_data['nama_customer'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
                                                submit_search('form1');
                                            } else {
                                                return false;
                                            }
                                            ;"/>
                                </td>
                                <td>
                                    <input class="form-control input-sm" name="transaksi" value="<?php echo (isset($sr_data['transaksi']) ? $sr_data['transaksi'] : ""); ?>" style="width: 100%;" type="text" onkeyup="javascript:if (event.keyCode == 13) {
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