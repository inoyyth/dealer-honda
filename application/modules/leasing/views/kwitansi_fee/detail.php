<div class="row">

     
        <div class="col-md-12">


        <div class="panel panel-default">
          <div class="panel-heading">
                <h3 class="content-header">Kwitansi Fee</h3>
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
                        <label class="col-sm-3 control-label"><b>Fee</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= formatrp($detail->fee); ?></label>
                          
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="col-sm-3 control-label"><b>Terbilang</b></label>
                        <div class="col-sm-9">
                        <label class="control-label"><?= terbilang($detail->fee); ?></label>
                          
                        </div>
                    </div>
          </div>
        </div>


            
            </div>
        </div>

        
        
 
 

 