<div class="row">
    <form action="<?php echo base_url("kwitansi-dp-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Pre Delivery Inspection</h3>
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
                            <label class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="tanggal" id="tanggal" parsley-trigger="change"     placeholder="Tanggal" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal PDI</label>
                            <div class="col-sm-9">
                                <input type="text" name="tgl_pdi" id="tgl_pdi" parsley-trigger="change"     placeholder="Tanggal PDI" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">PIC</label>
                            <div class="col-sm-9">
                                <input type="text" name="pic" id="pic" parsley-trigger="change"     placeholder="Input PIC" class="form-control">
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Tipe</label>
                            <div class="col-sm-9">
                                <input type="text" name="tipe" id="tipe" parsley-trigger="change" required placeholder="Tipe" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Mesin</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_mesin" id="no_mesin" parsley-trigger="change"     placeholder="No. Mesin" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. Rangka</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_rangka" id="no_rangka" parsley-trigger="change"     placeholder="No. Rangka" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Warna</label>
                            <div class="col-sm-9">
                            <input type="text" name="warna" id="warna" parsley-trigger="change" required   placeholder="Warna" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">No. PDI</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_pdi" id="no_pdi" parsley-trigger="change" required   placeholder="No. PDI" class="form-control">
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