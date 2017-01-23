<div class="row">
    <form action="<?php echo base_url("master-biro-jasa-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-8">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Master Birojasa Add</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Nama Birojasa</label>
                        <input type="text" name="nama_birojasa" parsley-trigger="change" required placeholder="Isi Nama Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telepon Birojasa</label>
                        <input type="tel" name="telepon_birojasa" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Telepon Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Handphone Birojasa</label>
                        <input type="tel" name="handphone_birojasa" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Handphone Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Birojasa</label>
                        <textarea name="alamat_birojasa" parsley-trigger="change" required placeholder="Isi Alamat Birojasa" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>PIC Birojasa</label>
                        <input type="text" name="pic_birojasa" parsley-trigger="change" required placeholder="Isi Nama PIC Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kontak PIC Birojasa</label>
                        <input type="text" name="pic_kontak_birojasa" parsley-trigger="change"parsley-type="digits" required placeholder="Isi Kontak PIC Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Emal Birojasa</label>
                        <input type="text" name="email_birojasa" parsley-trigger="change" required placeholder="Isi Kontak PIC Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status_birojasa" placeholder="Pilih Status" required class="form-control">
                            <option value="1">Aktif</option>
                            <option value="2">Non Aktif</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('master-biro-jasa'); ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>