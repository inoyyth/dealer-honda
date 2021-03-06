<div class="row">
	<div class="col-md-6">
		<div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">Master Jabatan</h3>
            </div>
            <div class="porlets-content">
				<form action="<?php echo base_url("master-jabatan-save");?>" method="post" parsley-validate novalidate>
					<input type="hidden" name="id">
					<div class="form-group">
						<label>Nama Jabatan</label>
						<input type="text" name="jabatan" parsley-trigger="change" required placeholder="Isi Nama Jabatan" class="form-control">
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" parsley-trigger="change" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Status</label>
						<select name="status_jabatan" placeholder="Pilih Status" required class="form-control">
							<option value="1">Aktif</option>
							<option value="2">Non Aktif</option>
						</select>
					</div>
					<button class="btn btn-primary" type="submit">Submit</button>
					<a href="<?php echo base_url('master-jabatan');?>" class="btn btn-default">Cancel</a>
              </form>
            </div>
		</div>
	</div>
</div>