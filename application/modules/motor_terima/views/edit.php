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
                    <input type="hidden" name="id" value="<?php echo $detail['id'];?>">
                    <label>Kode Gudang</label>
                    <input type="text" name="kd_gudang" parsley-trigger="change" required readonly="true" value="<?php echo $detail['kd_gudang'];?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Gudang</label>
                    <input type="text" name="gudang" parsley-trigger="change" required placeholder="Isi Nama Gudang" class="form-control" value="<?php echo $detail['gudang'];?>">
                </div>
                <div class="form-group">
                    <label>Nama Gudang</label>
                    <textarea name="alamat" parsley-trigger="change" required placeholder="Isi Alamat Gudang" class="form-control"><?php echo $detail['alamat'];?></textarea>
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="tel" name="telepon" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Tanggal Telepon" class="form-control" value="<?php echo $detail['telepon'];?>">
                </div>
                <div class="form-group">
                    <label>Pic</label>
                    <input type="text" name="pic" parsley-trigger="change" required placeholder="Isi Nama PIC Gudang" class="form-control" value="<?php echo $detail['pic'];?>">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status_gudang" placeholder="Pilih Status" required class="form-control">
                        <option value="1" <?php echo (isset($detail['status_gudang'])&&$detail['status_gudang']=='1'?"selected":"selected");?>>Aktif</option>
                        <option value="2" <?php echo (isset($detail['status_gudang'])&&$detail['status_gudang']=='2'?"selected":"");?>>Non Aktif</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="<?php echo base_url('master-gudang');?>" class="btn btn-default">Cancel</a>
            </div>
		</div>
	</div>
    </form>
</div>