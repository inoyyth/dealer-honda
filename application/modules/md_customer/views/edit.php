<div class="row">
    <form action="<?php echo base_url("master-customer-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Master Customer</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                        <label>No KTP</label>
                        <input type="text" name="no_ktp" parsley-trigger="change" required value="<?php echo $detail['no_ktp']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_customer" value="<?php echo $detail['nama_customer']; ?>" parsley-trigger="change" required placeholder="Isi Nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir_customer" value="<?php echo $detail['tempat_lahir_customer']; ?>" parsley-trigger="change" required placeholder="Isi Tempat Lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" name="tanggal_lahir_customer" value="<?php echo $detail['tanggal_lahir_customer']; ?>" parsley-trigger="change" required placeholder="Isi Tanggal Lahir" class="form-control datepicker">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Kelamin</label>
                        <div>
                            <label class="radio-inline"><input type="radio" name="kelamin_customer" value="P" <?php echo ($detail['kelamin_customer']=="P"?"checked":"");?>>Pria </label>
                            <label class="radio-inline"><input type="radio" name="kelamin_customer" value="W" <?php echo ($detail['kelamin_customer']=="W"?"checked":"");?>>Wanita </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat_customer" parsley-trigger="change" required placeholder="Isi Alamat Customer" class="form-control"><?php echo $detail['alamat_customer']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" name="telepon_customer" value="<?php echo $detail['telepon_customer']; ?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Telepon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Handphone</label>
                        <input type="text" name="handphone_customer" value="<?php echo $detail['handphone_customer']; ?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Handphone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="m_status" placeholder="Pilih Status" required class="form-control">
                            <option value="1" <?php echo (isset($detail['status_customer']) && $detail['status_customer'] == '1' ? "selected" : "selected"); ?>>Aktif</option>
                            <option value="2" <?php echo (isset($detail['status_customer']) && $detail['status_customer'] == '2' ? "selected" : ""); ?>>Non Aktif</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('master-customer'); ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>