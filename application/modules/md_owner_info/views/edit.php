<div class="row">
    <form action="<?php echo base_url("owner-save"); ?>" method="post" enctype="multipart/form-data" parsley-validate novalidate>
        <div class="col-md-8">
            <div class="block-web">
                <div class="header">
                    <div class="actions"> </div>
                    <h3 class="content-header">Owner Settings</h3>
                </div>
                <div class="porlets-content">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" name="company_name" value="<?php echo $detail['company_name'];?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Company Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Owner Name</label>
                        <input type="hidden" name="id" value="<?php echo $detail['id'];?>"/>
                        <input type="text" name="owner_name" value="<?php echo $detail['owner_name'];?>" parsley-trigger="change" required placeholder="Isi Nama Owner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Owner KTP ID</label>
                        <input type="number" name="owner_ktp" value="<?php echo $detail['owner_ktp'];?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi ID KTP Owner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Owner NPWP ID</label>
                        <input type="number" name="owner_npwp" value="<?php echo $detail['owner_npwp'];?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi ID NPWP Owner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Owner Telepon</label>
                        <input type="tel" name="owner_telp" value="<?php echo $detail['owner_telp'];?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Telepon Owner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Owner Handphone</label>
                        <input type="tel" name="owner_handphone" value="<?php echo $detail['owner_handphone'];?>" parsley-trigger="change" parsley-type="digits" required placeholder="Isi Handphone Owner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Owner Email</label>
                        <input type="email" name="owner_email" value="<?php echo $detail['owner_email'];?>" parsley-trigger="change" parsley-type="email" required placeholder="Isi Email Owner" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat Owner</label>
                        <textarea name="owner_address" parsley-trigger="change" required placeholder="Isi Alamat Owner" class="form-control"><?php echo $detail['owner_address'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Jabatan Owner</label>
                        <input type="text" name="owner_jabatan" value="<?php echo $detail['owner_jabatan'];?>" parsley-trigger="change" required placeholder="Isi Jabatan Owner" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo base_url('owner'); ?>" class="btn btn-default">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>