<div class="row">
    <form action="<?php echo base_url("kwitansi-dp-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Kwitansi Diskon</h3>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No Sales Order</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" class="form-control">
                                <input type="text" name="noso" id="noso" parsley-trigger="change" value="" class="form-control">
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" id="Nama" parsley-trigger="change" required placeholder="Nama Customer" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Harga OTR</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga_otr" id="harga_otr" parsley-trigger="change"     placeholder="Harga OTR" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Diskon</label>
                            <div class="col-sm-9">
                                <input type="diskon" name="diskon" id="diskon" parsley-trigger="change"     placeholder="Diskon" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Terbilang</label>
                            <div class="col-sm-9">
                                <textarea name="terbilang"  class="form-control"> </textarea>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Kwitansi</label>
                            <div class="col-sm-9">
                                <input type="no_kwitansi" name="no_kwitansi" id="no_kwitansi" parsley-trigger="change" required placeholder="No. Kwitansi" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No.Rangka</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_rangka" id="no_rangka" parsley-trigger="change"     placeholder="No. Rangka" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Mesin</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_mesin" id="no_mesin" parsley-trigger="change"     placeholder="No. Mesin" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Type</label>
                            <div class="col-sm-9">
                            <input type="text" name="type" id="type" parsley-trigger="change" required   placeholder="Type" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                                <input type="text" name="warna" id="warna" parsley-trigger="change" required   placeholder="Warna" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <button name="submit" id="new" class="btn btn-primary">New</button>
                    <button type="submit" name="save" id="save" class="btn btn-danger">Save</button>
                    <button type="submit" name="New" id="edit" class="btn btn-default">Edit</button>
                    <button type="submit" name="cancel" id="cancel" class="btn btn-default">Cancel</button>
                    <button type="submit" name="print" id="print" class="btn btn-default">Print</button>
                </div>
            </div>


        </div>

    </form>
</div>