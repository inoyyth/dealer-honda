<div class="row">
    <form action="<?php echo base_url("master-biro-jasa-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-8">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Master Birojasa Edit</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Nama Birojasa</label>
                        <input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
                        <input type="text" name="nama_birojasa" value="<?php echo $detail['nama_birojasa'];?>" parsley-trigger="change" required placeholder="Isi Nama Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telepon Birojasa</label>
                        <input type="tel" name="telepon_birojasa" value="<?php echo $detail['telepon_birojasa'];?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Telepon Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Handphone Birojasa</label>
                        <input type="tel" name="handphone_birojasa" value="<?php echo $detail['handphone_birojasa'];?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Handphone Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Birojasa</label>
                        <textarea name="alamat_birojasa" parsley-trigger="change" required placeholder="Isi Alamat Birojasa" class="form-control"><?php echo $detail['alamat_birojasa'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label>PIC Birojasa</label>
                        <input type="text" name="pic_birojasa" value="<?php echo $detail['pic_birojasa'];?>" parsley-trigger="change" required placeholder="Isi Nama PIC Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kontak PIC Birojasa</label>
                        <input type="text" name="pic_kontak_birojasa" value="<?php echo $detail['pic_kontak_birojasa'];?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Kontak PIC Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Emal Birojasa</label>
                        <input type="text" name="email_birojasa" value="<?php echo $detail['email_birojasa'];?>" parsley-trigger="change" required placeholder="Isi Kontak PIC Birojasa" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status_birojasa" placeholder="Pilih Status" required class="form-control">
                            <option value="1" <?php echo ($detail['status_birojasa']=="1"?"selected":"");?>>Aktif</option>
                            <option value="2" <?php echo ($detail['status_birojasa']=="2"?"selected":"");?>>Non Aktif</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('master-biro-jasa'); ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>