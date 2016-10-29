<div class="row">
    <form action="<?php echo base_url("master-karyawan-save");?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
	<div class="col-md-8">
		<div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">Master Karyawan</h3>
            </div>
            <div class="porlets-content">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $detail['id'];?>">
                    <label>Kode Karyawan</label>
                    <input type="text" name="kd_karyawan" parsley-trigger="change" required readonly="true" value="<?php echo $detail['kd_karyawan'];?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input type="text" name="karyawan" parsley-trigger="change" value="<?php echo $detail['karyawan'];?>" required placeholder="Isi Nama Karyawan" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <select name="kd_jabatan_karyawan" class="form-control" required="true">
                        <?php foreach($list_jabatan as $kListJabatan=>$vListJabatan){?>
                        <option value="<?php echo $vListJabatan['id'];?>" <?php ($vListJabatan['id']==$detail['kd_jabatan_karyawan']?"selected":"");?>><?php echo $vListJabatan['jabatan'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <input type="text" name="tgl_masuk" parsley-trigger="change" value="<?php echo $detail['tgl_masuk'];?>" required placeholder="Isi Tanggal Masuk" class="form-control datepicker">
                </div>
                <div class="form-group">
                    <label>Tanggal Keluar</label>
                    <input type="text" name="tgl_keluar" parsley-trigger="change" value="<?php echo $detail['tgl_keluar'];?>" placeholder="Isi Tanggal Keluar" class="form-control datepicker">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status_karyawan" placeholder="Pilih Status" required class="form-control">
                        <option value="1" <?php echo (isset($detail['status_karyawan'])&&$detail['status_karyawan']=='1'?"selected":"selected");?>>Aktif</option>
                        <option value="2" <?php echo (isset($detail['status_karyawan'])&&$detail['status_karyawan']=='2'?"selected":"");?>>Non Aktif</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="<?php echo base_url('master-karyawan');?>" class="btn btn-default">Cancel</a>
            </div>
		</div>
	</div>
    <div class="col-md-4">
        <div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">Foto Karyawan</h3>
            </div>
            <div class="porlets-content">
                <img id="image1" src="<?php echo (!empty($detail['foto'])?base_url($detail['foto']):base_url('assets/images/user_icon.png'));?>" alt="..." class="img-circle img-responsive">
                <input type="file" onchange="readURL(this);" class="form-control input-sm" name="foto" id="foto">
                <input type="hidden" name="image_hidden" value="<?php echo $detail['foto'];?>">
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