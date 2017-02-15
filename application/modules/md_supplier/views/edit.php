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
                        <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                        <label>Kode Supplier</label>
                        <input type="text" name="kdsupplier" parsley-trigger="change" required style="text-transform: uppercase;" value="<?php echo $detail['kdsupplier']; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text" name="supplier" parsley-trigger="change" required placeholder="Isi Nama Supplier" class="form-control" value="<?php echo $detail['supplier']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" parsley-trigger="change" required placeholder="Isi Alamat Leasing" class="form-control"><?php echo $detail['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" name="telp" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Telepon" class="form-control" value="<?php echo $detail['telp']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="block-web">
                <div class="form-group">
                    <label>PIC</label>
                    <input type="text" name="pic" parsley-trigger="change" required placeholder="Isi Nama PIC" class="form-control" value="<?php echo $detail['pic']; ?>">
                </div>
                <div class="form-group">
                    <label>Hp</label>
                    <input type="tel" name="hp" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Handphone" class="form-control" value="<?php echo $detail['hp']; ?>">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="m_status" placeholder="Pilih Status" required class="form-control">
                        <option value="1" <?php echo (isset($detail['m_status']) && $detail['m_status'] == '1' ? "selected" : "selected"); ?>>Aktif</option>
                        <option value="2" <?php echo (isset($detail['m_status']) && $detail['m_status'] == '2' ? "selected" : ""); ?>>Non Aktif</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="<?php echo base_url('master-supplier'); ?>" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </form>
</div>