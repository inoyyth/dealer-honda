<form action="<?php echo base_url("kwitansi-dp-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
    <div class="col-md-12">
        <div class="block-web">
            <div class="header">
                <div class="actions"> </div>
                <h3 class="content-header">Surat Jalan</h3>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" class="form-control">
                            <input type="text" name="noso" id="noso" parsley-trigger="change" required value="" class="form-control">
                        </div>
                    </div>
                </div><!--col-md-6-->
                
                </div><!--row-->
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-sm-3">
                            
                        </div>
                        
                        <div class="col-sm-9">
                        <button name="submit" id="apply" class="btn btn-primary">Apply</button>
                        </div>
                    </div>
                </div>
                
            </div><!--block-web-->
        
        </div><!--col-md-12-->
</form>