<div class="row">

     
        <div class="col-md-12">


        <div class="panel panel-default">
          <div class="panel-heading">
                <h3 class="content-header">Kwitansi DP</h3>
          </div>
          <div class="panel-body">
                <div class="form-group">
                        <label class="col-sm-3 control-label"><b>No. Kwitansi</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= $detail->nokwitansi; ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>No.SO</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= $detail->noso; ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Nama</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= $detail->nama_customer; ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Harga OTR</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= formatrp($detail->harga_otr); ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>DP</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= formatrp($detail->dp); ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Cara Pembelian</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= $detail->cara_pembelian; ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Transaksi Pembayaran</b></label>
                        <div class="col-sm-9">
                        
                        <label class="control-label">

                            <?php if($detail->transaksi == '1') { echo "DP 1"; }?>
                            <?php if($detail->transaksi == '2') { echo "DP 2"; }?>
                            <?php if($detail->transaksi == '3') { echo "DP 3"; }?>
                            <?php if($detail->transaksi == '4') { echo "DP 4"; }?>
                            <?php if($detail->transaksi == '5') { echo "Pelunasan DP"; }?>
                        </label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Sisa Hutang</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= formatrp($detail->sisa_pembayaran); ?></label>
                          
                        </div>
                    </div>

                 

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Nominal</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= formatrp($detail->nominal); ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Fee</b></label>
                        <div class="col-sm-9">
                        <label class="control-label">0</label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>No.Mesin</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= $detail->nomesin; ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>No.Rangka</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= $detail->norangka; ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Tipe</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= $detail->tipe; ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Warna</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= $detail->warna; ?></label>
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Terbilang</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= terbilang($detail->nominal); ?></label>
                          
                        </div>
                    </div>
          </div>
        </div>


            
            </div>
        </div>

        
        
 
 

 