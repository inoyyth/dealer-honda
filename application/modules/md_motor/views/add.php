<div class="row">
    <form action="<?php echo base_url("master-leasing-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Master Leasing</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Kode Leasing</label>
                        <input type="text" name="kd_leasing" parsley-trigger="change" required readonly="true" value="<?php echo $code; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Leasing</label>
                        <input type="text" name="leasing" parsley-trigger="change" required placeholder="Isi Nama Leasing" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" parsley-trigger="change" required placeholder="Isi Alamat Leasing" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" name="telepon" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Telepon" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" parsley-trigger="change" parsley-type="email" required placeholder="Isi Email" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="block-web">
                <div class="form-group">
                    <label>PIC</label>
                    <select name="pic" parsley-trigger="change" required placeholder="Pilih PIC" class="form-control">
                        <?php foreach ($list_karyawan as $kListKaryawan => $vListKaryawan) { ?>
                            <option value="<?php echo $vListKaryawan['id']; ?>"><?php echo $vListKaryawan['kd_karyawan'] . " " . $vListKaryawan['karyawan']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Hp</label>
                    <input type="tel" name="hp" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Handphone" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kalimat KW 1</label>
                    <textarea name="kalimat_kw_1" parsley-trigger="change" required placeholder="Isi Kalimat KW 1" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Kalimat KW 21</label>
                    <textarea name="kalimat_kw_2" parsley-trigger="change" required placeholder="Isi Kalimat KW 2" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status_leasing" placeholder="Pilih Status" required class="form-control">
                        <option value="1">Aktif</option>
                        <option value="2">Non Aktif</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="<?php echo base_url('master-leasing'); ?>" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </form>
</div>