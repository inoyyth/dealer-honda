<div class="row">
    <form action="<?php echo base_url("master-gudang-save");?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
	<div class="col-md-8">
		<div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">Master Gudang</h3>
            </div>
            <div class="porlets-content">
                <div class="form-group">
                    <label>Kode Gudang</label>
                    <input type="text" name="kd_gudang" parsley-trigger="change" required readonly="true" value="<?php echo $code;?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Gudang</label>
                    <input type="text" name="gudang" parsley-trigger="change" required placeholder="Isi Nama Gudang" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Gudang</label>
                    <textarea name="alamat" parsley-trigger="change" required placeholder="Isi Alamat Gudang" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="tel" name="telepon" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Tanggal Telepon" class="form-control">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status_gudang" placeholder="Pilih Status" required class="form-control">
                        <option value="1">Aktif</option>
                        <option value="2">Non Aktif</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="<?php echo base_url('master-gudang');?>" class="btn btn-default">Cancel</a>
            </div>
		</div>
	</div>
    </form>
</div>