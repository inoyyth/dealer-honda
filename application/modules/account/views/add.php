<div class="row">
    <form action="<?php echo base_url("user-management-save");?>" method="post"  enctype="multipart/form-data" parsley-validate novalidate>
	<div class="col-md-6">
		<div class="block-web">
			<div class="header">
				<div class="actions"> </div>
				<h3 class="content-header">User Management</h3>
            </div>
            <div class="porlets-content">
                <div class="row">
                    <div class="col-md-4">
                    <img id="image1" src="<?php echo base_url('assets/images/user_icon.png');?>" alt="..." class="img-circle img-responsive">
                    <input type="file" onchange="readURL(this);" class="form-control input-sm" name="path_foto" id="path_foto">
                    </div>
                    <div class="col-md-8">
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" parsley-trigger="change" required placeholder="Isi Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" parsley-trigger="change" required placeholder="Isi Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="nama_lengkap" parsley-trigger="change" required placeholder="Isi Nama Lengkap" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" name="no_telp" parsley-trigger="change" parsley-type="digits" required placeholder="Isi No Telepon" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" parsley-trigger="change" parsley-type="email" required placeholder="Isi Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" placeholder="Pilih Status" required class="form-control">
                                <option value="1">Non Aktif</option>
                                <option value="2">Aktif</option>
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