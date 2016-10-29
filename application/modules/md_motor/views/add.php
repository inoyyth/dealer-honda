<div class="row">
    <form action="<?php echo base_url("master-motor-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Master Motor</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Tipe Motor</label>
                        <input type="text" name="tipe_motor" parsley-trigger="change" required placeholder="Isi Tipe Motor" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nama Motor</label>
                        <input type="text" name="nama_motor" parsley-trigger="change" required placeholder="Isi Nama Motor" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Varian</label>
                        <input type="text" name="varian" parsley-trigger="change" required placeholder="Isi Varian Motor" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Merk</label>
                        <input type="text" name="merk" parsley-trigger="change" required placeholder="Isi Merk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Harga OTR</label>
                        <input type="text" name="harga_otr" parsley-trigger="change" required placeholder="Isi Harga OTR" class="form-control mask" data-inputmask="'mask':'Rp. 99.999.999', 'greedy' : false, 'rightAlignNumerics' : false">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="m_status" placeholder="Pilih Status" required class="form-control">
                            <option value="1" <?php echo (isset($detail['m_status']) && $detail['m_status'] == '1' ? "selected" : "selected"); ?>>Aktif</option>
                            <option value="2" <?php echo (isset($detail['m_status']) && $detail['m_status'] == '2' ? "selected" : ""); ?>>Non Aktif</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('master-motor'); ?>" class="btn btn-default">Cancel</a>    
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Foto Motor</h3>
                </div>
                <div class="porlets-content text-center">
                    <img id="image1" src="<?php echo base_url('assets/images/motor/motor_icon.png'); ?>" style="height: 300px;" alt="..." class="img-rounded img-responsive">
                    <input type="file" onchange="readURL(this);" class="form-control input-sm" name="foto" id="foto">
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image1')
                        .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>