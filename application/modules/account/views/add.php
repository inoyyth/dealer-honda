<div class="row">
    <form action="<?php echo base_url("user-management-save");?>" method="post" parsley-validate novalidate>
	<div class="col-md-6">
		<div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">User Management</h3>
            </div>
            <div class="porlets-content">
                <div class="row">
                    <div class="col-md-4">
                    <img src="<?php echo base_url('assets/images/user_icon.png');?>" alt="..." class="img-rounded img-responsive">
                    <input type="file" class="form-control input-sm" name="path_foto">
                    </div>
                    <div class="col-md-8">
                        <input type="hidden" name="id" value="<?php echo (isset($detail->id)?$detail->id:"");?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo (isset($detail->username)?$detail->username:"");?>" parsley-trigger="change" required placeholder="Isi Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" value="<?php echo (isset($detail->password)?$detail->password:"");?>" parsley-trigger="change" required placeholder="Isi Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="nama_lengkap" value="<?php echo (isset($detail->nama_lengkap)?$detail->nama_lengkap:"");?>" parsley-trigger="change" required placeholder="Isi Nama Lengkap" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" name="no_telp" value="<?php echo (isset($detail->no_telp)?$detail->no_telp:"");?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi No Telepon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="<?php echo (isset($detail->email)?$detail->email:"");?>" parsley-trigger="change" parsley-type="email" required placeholder="Isi Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" placeholder="Pilih Status" required class="form-control">
                                <option value="1" <?php echo (isset($detail->status)&&$detail->status=='0'?"selected":"selected");?>>Non Aktif</option>
                                <option value="2" <?php echo (isset($detail->status)&&$detail->status=='1'?"selected":"");?>>Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
					<button class="btn btn-primary" type="submit">Submit</button>
					<a href="<?php echo base_url('user-management');?>" class="btn btn-default">Cancel</a>
            </div>
		</div>
	</div>
    <div class="col-md-6">
		<div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">Menu Access</h3>
            </div>
            <div class="porlets-content">
                <div class="table-responsive">
					<table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu</th>
                                <th>Status</th>
                            </tr>
                        <thead>
                        <tbody>
                            <?php foreach($list_menu as $kMenu=>$vMenu){ ?>
                                <tr>
                                    <td><input type="checkbox" name="menu[]" value="<?php echo $vMenu['id'];?>"></td>
                                    <td><?php echo $vMenu['name'];?></td>
                                    <td><?php echo get_status($vMenu['status']);?></td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>