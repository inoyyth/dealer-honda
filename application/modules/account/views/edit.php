<div class="row">
    <form action="<?php echo base_url("user-management-save"); ?>" method="post"  enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-6">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">User Management</h3>
                </div>
                <div class="porlets-content">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                            <img id="image1" src="<?php echo (!empty($detail['path_foto']) ? $detail['path_foto'] : base_url('assets/images/account/user_icon.png')); ?>" alt="..." class="img-circle img-responsive">
                            <input type="file" onchange="readURL(this);" class="form-control input-sm" name="path_foto" id="path_foto">
                            <input type="hidden" name="image_hidden" value="<?php echo $detail['path_foto']; ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo $detail['username']; ?>" parsley-trigger="change" required placeholder="Isi Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="<?php echo $this->encrypt->decode($detail['password']); ?>" parsley-trigger="change" required placeholder="Isi Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="nama_lengkap" value="<?php echo $detail['nama_lengkap']; ?>" parsley-trigger="change" required placeholder="Isi Nama Lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>As SuperAdmin</label>
                                <input type="checkbox" name="super_admin"class="form-control" value="2" <?php echo (@$detail['super_admin'] == "2" ? "checked" : ""); ?>>
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" name="no_telp" value="<?php echo $detail['no_telp']; ?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi No Telepon" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="<?php echo $detail['email']; ?>" parsley-trigger="change" parsley-type="email" required placeholder="Isi Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" placeholder="Pilih Status" required class="form-control">
                                    <option value="1" <?php echo (isset($detail['status']) && $detail['status'] == '1' ? "selected" : "selected"); ?>>Aktif</option>
                                    <option value="2" <?php echo (isset($detail['status']) && $detail['status'] == '2' ? "selected" : ""); ?>>Non Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('user-management'); ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
		<?php if($this->sessionGlobal['super_admin']=="2") { ?>
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
                                    <th>Add</th>
                                    <th>Upd</th>
                                    <th>Del</th>
                                    <th>Prt</th>
                                </tr>
                            <thead>
                            <tbody>
                                <?php
                                $mn = unserialize($detail['access_menu']);

                                $result = array();
                                foreach ($mn as $k => $inner) {
                                    $result[] = $inner['menu'];
                                }
                                //dump($mn);

                                foreach ($list_menu as $kMenu => $vMenu) {
                                    if (in_array($vMenu['id'], $result)) {
                                        
                                        // Get Index Array from Value Array
                                        $resNum = array_search($vMenu['id'], $result);
                                        
                                        $cek = "checked='true'";
                                        $act = "";
                                        if (isset($mn[$resNum]['child']['add']) && $mn[$resNum]['child']['add'] === 1) {
                                            $addChk = "checked='true'";
                                        } else {
                                            $addChk = "";
                                        }
                                        if (isset($mn[$resNum]['child']['upd']) && $mn[$resNum]['child']['upd'] === 1) {
                                            $updChk = "checked='true'";
                                        } else {
                                            $updChk = "";
                                        }
                                        if (isset($mn[$resNum]['child']['del']) && $mn[$resNum]['child']['del'] === 1) {
                                            $delChk = "checked='true'";
                                        } else {
                                            $delChk = "";
                                        }
                                        if (isset($mn[$resNum]['child']['prt']) && $mn[$resNum]['child']['prt'] === 1) {
                                            $prtChk = "checked='true'";
                                        } else {
                                            $prtChk = "";
                                        }
                                    } else {
                                        $cek = "";
                                        $act = "disabled='true'";
                                        $addChk = "";
                                        $updChk = "";
                                        $delChk = "";
                                        $prtChk = "";
                                    }
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" id="parent<?php echo $vMenu['id']; ?>" <?php echo $cek; ?> name="menu[]" value="<?php echo $vMenu['id'] . "|" . $vMenu['slug']; ?>" onclick="checkParent(<?php echo $vMenu['id']; ?>);"></td>
                                        <td><?php echo $vMenu['name']; ?> </td>
                                        <td><?php echo get_status($vMenu['status']); ?> </td>
                                        <td><input type="checkbox" class="child<?php echo $vMenu['id']; ?>" name="sub_add<?php echo $vMenu['id']; ?>" onclick="cekCheckboxes(this);" <?php echo $addChk . " " . $act; ?>></td>
                                        <td><input type="checkbox" class="child<?php echo $vMenu['id']; ?>" name="sub_upd<?php echo $vMenu['id']; ?>" onclick="cekCheckboxes(this);" <?php echo $updChk . " " . $act; ?>></td>
                                        <td><input type="checkbox" class="child<?php echo $vMenu['id']; ?>" name="sub_del<?php echo $vMenu['id']; ?>" onclick="cekCheckboxes(this);" <?php echo $delChk . " " . $act; ?>></td>
                                        <td><input type="checkbox" class="child<?php echo $vMenu['id']; ?>" name="sub_prt<?php echo $vMenu['id']; ?>" onclick="cekCheckboxes(this);" <?php echo $prtChk . " " . $act; ?>></td>
                                    </tr>
                                    <?php continue;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
    </form>
</div>
<script>
    $(document).ready(function () {

    });
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

    function cekCheckboxes(checkbox) {
        if (checkbox.checked) {
            checkbox.value = '1';
        } else {
            checkbox.value = '0';
        }
    }

    function checkParent(id) {
        if (document.getElementById('parent' + id).checked) {
            $('.child' + id).prop('checked', true);
            $('.child' + id).attr('value', 1);
            $('.child' + id).removeAttr('disabled');
        } else {
            $('.child' + id).prop('checked', false);
            $('.child' + id).attr('value', 0);
            $('.child' + id).attr('disabled', 'true');
        }
    }
</script>