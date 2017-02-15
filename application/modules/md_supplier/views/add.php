<div class="row">
    <form action="<?php echo base_url("master-supplier-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-12">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Master Supplier</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Kode Supplier</label>
                        <input type="text" name="kdsupplier" style="text-transform: uppercase;" parsley-trigger="change" required placeholder="Isi Kode Supplier (SPL001)" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text" name="supplier" parsley-trigger="change" required placeholder="Isi Nama Supplier" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" parsley-trigger="change" required placeholder="Isi Alamat Supplier" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" name="telp" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Telepon" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="block-web">
                <div class="form-group">
                    <label>PIC</label>
                    <input type="text" name="pic" parsley-trigger="change" required placeholder="Isi PIC" class="form-control">
                </div>
                <div class="form-group">
                    <label>Hp</label>
                    <input type="tel" name="hp" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Handphone" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="m_status" placeholder="Pilih Status" required class="form-control">
                        <option value="1">Aktif</option>
                        <option value="2">Non Aktif</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="<?php echo base_url('master-supplier'); ?>" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </form>
</div>