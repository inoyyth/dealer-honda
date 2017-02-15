<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Laporan Penjualan</div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="panel default red_border vertical_border h1">
                            <div class="block-web">
                                <div class="header">
                                    <h3>Filter Laporan</h3>
                                </div>
                                <form id="form1" method="post" action="<?php echo base_url('laporan-penjualan'); ?>">
                                    <div class="porlets-content" style="display: block;">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Jangka Waktu</label>
                                                    <div class="input-daterange input-group input-group-xs" id="datepicker">
                                                        <input type="text" class="input-xs form-control" name="start" value="<?php echo (isset($sr_data['start']) ? $sr_data['start'] : ""); ?>"/>
                                                        <span class="input-group-addon">to</span>
                                                        <input type="text" class="input-xs form-control" name="end" value="<?php echo (isset($sr_data['end']) ? $sr_data['end'] : ""); ?>"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Proses Transaksi</label>
                                                    <select name="proses_transaksi" id="proses_transaksi" class="form-control">
                                                        <?php
                                                        $list = ['' => '', 1 => 'On Progress', 4 => 'Void', 5 => 'Finish'];
                                                        foreach ($list as $k => $v) :
                                                            if ($k == $sr_data['t_penjualan.m_status']) {
                                                                $select = "selected='true'";
                                                            } else {
                                                                $select = "";
                                                            }
                                                            ?>
                                                            <option value="<?php echo $k; ?>" <?php echo $select; ?>><?php echo $v; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Tipe Motor</label>
                                                    <input type="text" style="height: 35px;text-transform: uppercase;" value="<?php echo (isset($sr_data['tipe']) ? $sr_data['tipe'] : ""); ?>" class="form-control" name="tipe" id="tipe">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tipe Transaksi</label>
                                                    <select style="height: 33px;" class="form-control" name="cara_pembelian" id="cara_pembelian">
                                                        <option value=""> </option>
                                                        <option value="Kredit" <?php echo ($sr_data['cara_pembelian'] == "Kredit" ? "selected" : ""); ?>>Kredit</option>
                                                        <option value="Cash" <?php echo ($sr_data['cara_pembelian'] == "Cash" ? "selected" : ""); ?>>Cash</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <input type="submit" class="btn btn-sm btn-primary" id="submit-btn" value="Search">
                                                    <!--<input type="reset" class="btn btn-sm btn-warning" onClick="this.form.reset()" value="Reset">-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel default red_border vertical_border h1">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6 pull-left"> </div>
                                    <div class="col-md-6 pull-right text-right">
                                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'laporan-penjualan-pdf/?template=table_pdf&name=rp_penjualan', 'text' => 'Print')); ?>
                                        <?php echo $this->button_lib->render(array('anchor' => 'prt', 'url' => 'laporan-penjualan-excel/?template=table_excel&name=rp_penjualan', 'text' => 'Excel')); ?>
                                    </div> 
                                </div>
                            </div>
                            <div class="block-web">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>No.SO</th>
                                                <th>No.Mesin</th>
                                                <th>Harga</th>
                                                <th>Tipe</th>
                                                <th>Status</th>
                                                <th class="text-center" style="width: 50px;">Action</th>
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
                                                            $status = "Canceled";
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
                                                            <a href="<?php echo base_url('penjualan-edit-' . $v['id']); ?>" class="btn btn-success btn-sm"><i class="fa fa-info-circle"></i> Detail</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
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