 
<div class="row">
    <div class="col-lg-12">
        <section class="panel default blue_title h4">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6 pull-left">Rekap Tagihan
                    </div>
                    <div class="col-md-6 pull-right text-right">
                         <a href="<?php echo base_url('kwitansi-dp-tambah');?>" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Tambah </a>
                    </div> 
                </div>
            </div>
            <div class="panel-body">
                <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Transaksi  </h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label class="col-sm-12 control-label">Tanggal</label>
                        <div class="col-sm-6">
                            <input type="text" name="tanggal_start" id="tanggal_start" parsley-trigger="change"   class="form-control datepicker">
                            
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="tanggal_end" id="tanggal_end" parsley-trigger="change"   class="form-control datepicker">
                             
                        </div>
                    </div>
                    
                      <div class="form-group">
                        <label class="col-sm-12 control-label">Leasing</label>
                        <div class="col-sm-6">
                              <select name="leasing" id="leasing" required class="form-control">
                                <option value="">Choose Leasing</option>
                                <?php 
                                    foreach($dtleasing as $leasing) { 
                                        $selected = "";
                                        if(isset($price_list)){
                                            if($price_list['leasing']==$leasing['kd_leasing'] && $price_list['cara_pembelian']=="Kredit"){
                                                $selected = "selected";
                                            }
                                        }
                                    ?>
                                <option label="<?=$leasing['leasing'];?>" value="<?=$leasing['kd_leasing'];?>" <?php echo $selected;?>><?=$leasing['leasing'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        
                    </div>
                   
                    
                    <br>
                    &nbsp;
                    <br>
                    <hr>
                    <div class="form-group">
                         <div class="col-sm-12">
                        <button type="submit" name="list" class="btn btn-default"> List </button>
                        <button type="submit" name="generate" class="btn btn-default">  Generate </button>
                        <button type="submit" name="save" class="btn btn-default"> Save </button>
                        <button type="submit" name="print" class="btn btn-default"> Print </button>
                         </div>
                    </div>
                    &nbsp;
                    <br>
                    <hr>
                    <h2 align='center'> REKAPAN TAGIHAN </h2>
                     <div class="form-group">
                        
                        <div class="col-sm-6">
                             
                        </div>
                        <div class="col-sm-6">
                            <label class="col-sm-12 control-label">Leasing</label>
                            <input type="text" name="tanggal_end" id="tanggal_end" parsley-trigger="change"   class="form-control datepicker">
                             
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-12 control-label">Tanggal</label>
                        <div class="col-sm-6">
                            <input type="text" name="tanggal_start" id="tanggal_start" parsley-trigger="change"   class="form-control datepicker">
                            
                        </div>
                        <div class="col-sm-6">
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12 control-label">Tanggal</label>
                        <div class="col-sm-6">
                            <input type="text" name="tanggal_start" id="tanggal_start" parsley-trigger="change"   class="form-control datepicker">
                            
                        </div>
                        <div class="col-sm-6">
                          
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12 control-label">Tanggal</label>
                        <div class="col-sm-6">
                            <input type="text" name="tanggal_start" id="tanggal_start" parsley-trigger="change"   class="form-control datepicker">
                            
                        </div>
                        <div class="col-sm-6">
                          
                        </div>
                    </div>
                    
                  
                    
                    
                    
                    
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>    
                                <td>  </td>
                                <td> No</td>
                                <td> Tgl Kwitansi</td>
                                <td> Nmr Kwitansi</td>
                                <td> Nama</td>
                                <td> Type</td>
                                <td> No.Mesin</td>
                                <td> No.Rangka</td>
                                <td> OTR </td>
                                <td> DP </td>
                                <td> Subsidi </td>
                                <td> Sisa </td>
                                <td> Price List </td>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>    
                                <td> <input type="checkbox" name="id" value="id"> </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    
            </div>
            </div>
        </section>
    </div>
</div>
 