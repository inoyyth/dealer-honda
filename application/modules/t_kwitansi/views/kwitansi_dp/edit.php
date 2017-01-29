<div class="row">
    <form class="form-horizontal row-border" id="frmkwitansidp" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Kwitansi DP</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Kwitansi</label>
                        <div class="col-sm-9">
                            <input type="text" name="nokwitansi" id="nokwitansi" parsley-trigger="change" value="<?php echo $detail['nokwitansi']; ?>" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" id="remote">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input type="text" name="noso" id="noso" reaonly="true" parsley-trigger="change" value="<?php echo $detail['noso']; ?>" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tgl Dp</label>
                        <div class="col-sm-9">
                            <input type="text" name="tgl_dp" readonly="true" id="tgl_dp" value="<?php echo $detail['tgl_dp'];?>" parsley-trigger="change" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_customer" id="nama_customer" value="<?php echo $customer[0]['nama_customer'];?>" parsley-trigger="change" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga OTR</label>
                        <div class="col-sm-9">
                            <input type="text" name="harga_otr" id="harga_otr" value="<?php echo $master_motor[0]['harga_otr'];?>" parsley-trigger="change" readonly="true" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" class="form-control mask">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Total DP</label>
                        <div class="col-sm-9">
                            <?php 
                                if($master_harga_motor[0]['cara_pembelian'] == "Kredit"){
                                    $dp = $master_harga_motor[0]['dp_system'];
                                }else{
                                    $dp = $master_motor[0]['harga_otr'];
                                }
                            ?>
                            <input type="text" name="total_dp" id="total_dp" value="<?php echo $dp; ?>" parsley-trigger="change" readonly="true" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" class="form-control mask">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Diskon</label>
                        <div class="col-sm-9">
                            <input type="text" name="diskon" id="diskon" value="<?php echo $master_harga_motor[0]['diskon'];?>" parsley-trigger="change" readonly="true" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" class="form-control mask">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Pembelian Secara</label>
                        <div class="col-sm-9">
                            <input type="text" name="cara_pembelian" id="cara_pembelian" value="<?php echo $master_harga_motor[0]['cara_pembelian'];?>" parsley-trigger="change" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">DP Ke</label>
                        <div class="col-sm-9">
                            <input type="text" name="transaksi" id="transaksi" parsley-trigger="change" value="<?php echo $detail['transaksi']; ?>" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sudah Dibayar</label>
                        <div class="col-sm-9">
                            <input type="text" name="sudah_bayar" id="sudah_bayar" value="<?php echo ($sisa_hutang['jumlah'] != ""?$sisa_hutang['jumlah']:0);?>" readonly="true" parsley-trigger="change" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" class="form-control mask">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sisa Hutang</label>
                        <div class="col-sm-9">
                            <?php 
                                if($master_harga_motor[0]['cara_pembelian'] == "Kredit"){
                                    $sisa_hutang = ($master_harga_motor[0]['dp_system'] - $sisa_hutang['jumlah']);
                                }else{
                                    $sisa_hutang = ($master_motor[0]['harga_otr'] - $sisa_hutang['jumlah']);
                                }
                            ?>
                            <input type="text" name="sisa_hutang" id="sisa_hutang" value="<?php echo $sisa_hutang;?>" readonly="true" parsley-trigger="change" readonly="true" parsley-trigger="change" style="text-align:left;" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" class="form-control mask">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nominal</label>
                        <div class="col-sm-9">
                            <input type="text" name="nominal" id="nominal" value="<?php echo $detail['nominal'];?>" readonly="true" parsley-trigger="change" style="text-align:left;" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" class="form-control mask">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sisa</label>
                        <div class="col-sm-9">
                            <?php 
                                if($master_harga_motor[0]['cara_pembelian'] == "Kredit"){
                                    $sisa= ($sisa_hutang - $detail['nominal']);
                                }else{
                                    $sisa = ($sisa_hutang - $detail['nominal']);
                                }
                            ?>
                            <input type="text" name="sisa_pembayaran" id="sisa" value="<?php echo $sisa;?>" parsley-trigger="change" readonly="true" data-inputmask="'alias': 'decimal', 'groupSeparator': ',', 'autoGroup': true" class="form-control mask">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Mesin</label>
                        <div class="col-sm-9">
                            <input type="text" name="nomsn" id="no_mesin" value="<?php echo $terima_motor[0]['nomesin'];?>" parsley-trigger="change" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="norangka" id="no_rangka" value="<?php echo $terima_motor[0]['norangka'];?>" parsley-trigger="change" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-9">
                            <input type="text" name="tipe_motor" id="type" value="<?php echo $terima_motor[0]['tipe'];?>" parsley-trigger="change" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna" id="warna" value="<?php echo $terima_motor[0]['warna'];?>" parsley-trigger="change" readonly="true" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Terbilang</label>
                        <div class="col-sm-9">
                            <textarea name="terbilang" id="terbilang" readonly="true" class="form-control"> <?php echo terbilang($detail['nominal']);?></textarea>
                        </div>
                    </div>
                    <div class="form-group"></div>
                </div>
            </div>
        </div>
    </form>
    <div class="col-md-6">
        <div class="block-web">
            <div class="form-group">
                <button id="printDP" class="btn btn-default">Print</button>
                <a href="<?php echo base_url('kwitansi-dp');?>" name="cancel" id="cancel" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</div>