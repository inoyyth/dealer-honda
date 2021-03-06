<div class="row">
    <form action="<?php echo base_url("master-aksesoris-save");?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
	<div class="col-md-8">
		<div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">Master Aksesoris</h3>
            </div>
            <div class="porlets-content">
                <div class="form-group">
                    <label>Kode Aksesoris</label>
                    <input type="hidden" name="id" value="<?php echo $detail['id'];?>">
                    <input type="text" name="kd_aksesoris" parsley-trigger="change" required readonly="true" value="<?php echo $detail['kd_aksesoris'];?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Aksesoris</label>
                    <input type="text" name="aksesoris" value="<?php echo $detail['aksesoris'];?>" parsley-trigger="change" required placeholder="Isi Nama Aksesoris" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select style="text-transform: capitalize;" name="kategori" class="form-control" required="true">
                        <?php foreach($global_data as $k=>$v){?>
                        <option value="<?php echo $v['id'];?>" <?php echo ($v['id']==$detail['kategori']?"selected":"");?>><?php echo $v['value'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="m_status" placeholder="Pilih Status" required class="form-control">
                        <option value="1" <?php echo ($detail['m_status']=="1"?"selected":"");?>>Aktif</option>
                        <option value="2" <?php echo ($detail['m_status']=="2"?"selected":"");?>>Non Aktif</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="<?php echo base_url('master-aksesoris');?>" class="btn btn-default">Cancel</a>
            </div>
		</div>
	</div>
    <div class="col-md-4">
        <div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">Foto Aksesoris</h3>
            </div>
            <div class="porlets-content">
                <img onerror="this.onerror=null;this.src='<?php echo base_url('assets/images/aksesoris/icon.png');?>';" id="image1" src="<?php echo (!empty($detail['url_foto'])?base_url($detail['url_foto']):base_url('assets/images/aksesoris/icon.png'));?>" alt="..." class="img-circle img-responsive">
                <input type="file" onchange="readURL(this);" class="form-control input-sm" name="foto" id="foto">
                <input type="hidden" name="image_hidden" value="<?php echo $detail['url_foto'];?>">
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