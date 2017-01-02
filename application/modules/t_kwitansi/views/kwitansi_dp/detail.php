<div class="row">

     
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Kwitansi DP</h3>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Kwitansi</label>
                        <div class="col-sm-9">
                            <input type="text" name="nokwitansi" id="nokwitansi"  value="<?= $detail->nokwitansi; ?>"  readonly="true" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="block-web">
                <div class="porlets-content">
                   
                    <div class="form-group" id="remote">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input class="form-control" readonly="true" name="noso" type="text" value="<?= $detail->noso; ?>"   >
                           
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_customer"  readonly="true" class="form-control" value="<?= $detail->nama_customer; ?>" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Harga OTR</label>
                        <div class="col-sm-9">
                            <input type="text" name="harga_otr"  readonly="true" class="form-control" value="<?= $detail->harga_otr; ?>" >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">DP</label>
                        <div class="col-sm-9">
                            <input type="text" name="dp" readonly="true" class="form-control" value="<?= $detail->dp; ?>" > 
                        </div>
                    </div>
                    
                       <div class="form-group">
                        <label class="col-sm-3 control-label">Pembelian Secara</label>
                        <div class="col-sm-9">
                            <input type="text" name="cara_pembelian"  readonly="true" class="form-control" value="<?= $detail->cara_pembelian; ?>" >
                        </div>
                    </div>
                    
                   
                    
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Transaksi</label>
                        <div class="col-sm-9">
                            <select name="transaksi" id="transaksi" class="form-control" >
                                
                                <option value="2" <?php if($detail->transaksi == '2') { echo "selected=selected"; }?> >DP 2</option>
                                <option value="3" <?php if($detail->transaksi == '3') { echo "selected=selected"; }?> >DP 3</option>
                                <option value="4" <?php if($detail->transaksi == '4') { echo "selected=selected"; }?> >DP 4</option>
                                <option value="5" <?php if($detail->transaksi == '5') { echo "selected=selected"; }?> >Pelunasan </option>
                                <option value="6" <?php if($detail->transaksi == '6') { echo "selected=selected"; }?> >Pelunasan DP</option>
                            </select>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sisa Hutang</label>
                        <div class="col-sm-9">
                            <input type="text" readonly="true" class="form-control" value="<?= $detail->sisa_pembayaran; ?>">
                        </div>
                    </div>
                    
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Total Tagih</label>
                        <div class="col-sm-9">
                            <input type="text" name="total_tagih" readonly="true" value="0"   class="form-control">
                        </div>
                    </div>
                    
                     

                 
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nominal</label>
                        <div class="col-sm-9">
                            <input type="text" name="nominal"  value="<?= $detail->nominal; ?>"  class="form-control">
                        </div>
                    </div>
                    <!--
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Fee</label>
                        <div class="col-sm-9">
                            <input type="text" name="fee" id="fee" parsley-trigger="change"  placeholder="Nominal" class="form-control">
                        </div>
                    </div>-->

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sisa</label>
                        <div class="col-sm-9">
                            <input type="text" name="sisa_pembayaran"  value="0" readonly="true" class="form-control">
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
                            <input type="text" name="nomsn" readonly="true" value="<?= $detail->nomesin; ?>"  class="form-control">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">No.Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="norangka" readonly="true" value="<?= $detail->norangka; ?>"  class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-9">
                            <input type="text" name="tipe_motor" readonly="true" value="<?= $detail->tipe; ?>"  class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna_motor"  readonly="true" value="<?= $detail->warna; ?>"  class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Terbilang</label>
                        <div class="col-sm-9">
                            <textarea name="terbilang" readonly="true" class="form-control"> <?= terbilang($detail->nominal); ?> </textarea>
                        </div>
                    </div>

                    <div class="form-group"></div>
                </div>
            </div>
        </div>

        
        
   
</div>
 

 