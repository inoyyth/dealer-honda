<div class="row">
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
                        <input type="text" readonly="true" name="no_ktp" parsley-trigger="change" required value="<?php echo $detail['no_ktp']; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" readonly="true" name="nama_customer" value="<?php echo $detail['nama_customer']; ?>" parsley-trigger="change" required placeholder="Isi Nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" readonly="true" name="tempat_lahir_customer" value="<?php echo $detail['tempat_lahir_customer']; ?>" parsley-trigger="change" required placeholder="Isi Tempat Lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="text" readonly="true" name="tanggal_lahir_customer" value="<?php echo $detail['tanggal_lahir_customer']; ?>" parsley-trigger="change" required placeholder="Isi Tanggal Lahir" class="form-control datepicker">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block-web">
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Kelamin</label>
                        <input type="text" readonly="true" name="m_status" value="<?php echo ($detail['kelamin_customer']=="P"?"Pria":"Wanita"); ?>" parsley-trigger="change" required placeholder="Isi Status" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat_customer" readonly="true" parsley-trigger="change" required placeholder="Isi Alamat Customer" class="form-control"><?php echo $detail['alamat_customer']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" name="telepon_customer" readonly="true" value="<?php echo $detail['telepon_customer']; ?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Telepon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Handphone</label>
                        <input type="text" name="handphone_customer" readonly="true" value="<?php echo $detail['handphone_customer']; ?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Handphone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" readonly="true" name="m_status" value="<?php echo ($detail['m_status']=="1"?"Aktif":"Non Aktif"); ?>" parsley-trigger="change" required placeholder="Isi Status" class="form-control">
                    </div>
                    <a href="<?php echo base_url('master-customer'); ?>" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
</div>