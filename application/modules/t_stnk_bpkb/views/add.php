<form action="<?php echo base_url("kwitansi-dp-save"); ?>" class="form-horizontal row-border" id="frmkwitansidp" method="post" enctype="multipart/form-data" parsley-validate novalidate>
    <div class="col-md-12">
        <div class="block-web">
            <div class="header">
                <div class="actions"> </div>
                <h3 class="content-header">Proses STNK/BPKB</h3>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Sales Order</label>
                        <div class="col-sm-9">
                            <input type="hidden" name="id" id="id" parsley-trigger="change" required readonly="true" class="form-control">
                            <div class="col-md-9">
                            <input type="text" name="noso" id="noso" parsley-trigger="change" required value=" " class="form-control">
                            </div>
                            <button type="submit" name="search" id="search" class="btn btn-default">Search</button>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Mesin</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_mesin" id="no_mesin" parsley-trigger="change" required placeholder="No. Mesin" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No. Rangka</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_rangka" id="no_rangka" parsley-trigger="change"     placeholder="No. Rangka" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Type</label>
                        <div class="col-sm-9">
                            <input type="text" name="type" id="type" parsley-trigger="change"     placeholder="Type" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warna</label>
                        <div class="col-sm-9">
                            <input type="text" name="warna" id="warna" parsley-trigger="change"     placeholder="Warna" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="text" name="tahun" id="tahun" parsley-trigger="change"     placeholder="Tahun" class="form-control">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">No Proses</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_proses" id="no_proses" parsley-trigger="change" required placeholder="No Proses" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Leasing</label>
                        <div class="col-sm-9">
                            <input type="text" name="Leasing" id="Leasing" parsley-trigger="change"     placeholder="Leasing" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tgl Proses STNK</label>
                        <div class="col-sm-9">
                            <input type="text" name="tgl_proses_stnk" id="tgl_proses_stnk" parsley-trigger="change"     placeholder="Tanggal Proses STNK" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Tgl Proses BPKB</label>
                        <div class="col-sm-9">
                            <input type="text" name="tgl_proses_bpkb" id="tgl_proses_bpkb" parsley-trigger="change" required   placeholder="Tanggal Proses BPKB" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Est. STNK selesai</label>
                        <div class="col-sm-9">
                            <input type="text" name="est_stnk_selesai" id="est_stnk_selesai" parsley-trigger="change" required   placeholder="Estimasi STNK Selesai" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Est. BPKB selesai</label>
                        <div class="col-sm-9">
                            <input type="text" name="est_bpkb_selesai" id="est_bpkb_selesai" parsley-trigger="change" required   placeholder="Estimasi BPKB Selesai" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-3"
                             <div class="col-sm-9">
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="checkbox" name="est_bpkb_selesai" > <label class="control-label">Beri tanda apabila STNK sama dengan data customer</label>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            
            <div class="col-md-6">
                <button name="submit" id="new" class="btn btn-default">Print TT STNK</button>
                <button type="submit" name="save" id="save" class="btn btn-default">Print TT BPKB</button>
                <button type="submit" name="New" id="edit" class="btn btn-default">Print KW Ket 1</button>
                <button type="submit" name="cancel" id="cancel" class="btn btn-default">Print KW Ket 2</button>
            </div>
            
            <div class="col-md-4">
                <button name="submit" id="new" class="btn btn-default">New</button>
                <button type="submit" name="save" id="save" class="btn btn-default">Save</button>
                <button type="submit" name="New" id="edit" class="btn btn-default">Edit</button>
            </div>
        
        </div>
</form>