<div class="row">
	<div class="col-lg-12">
		<section class="panel default blue_title h4">
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-6 pull-left">Master Leasing
					</div>
					<div class="col-md-6 pull-right text-right">
						<a href="<?php echo base_url();?>master-leasing-tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Tambah</a> 
						<a href="<?php echo base_url('master-leasing-pdf/?template=table_pdf&name=master_leasing');?>" target="__blank" class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</a>
						<a href="<?php echo base_url('master-leasing-excel/?template=table_excel&name=master_leasing');?>" target="__blank" class="btn btn-default btn-sm"><i class="fa fa-file-excel-o"></i> Excel</a>
					</div> 
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Kode Leasing</th>
								<th>Leasing</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Pic</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 120px;">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							if(count($data) < 1){
								echo"<tr><td class='text-center' colspan='10'>-No Data Found-</td></tr>";
							}else{
								foreach($data as $k=>$v){ ?>
							<tr>
								<td><?php echo intval($this->uri->segment(2)+($k+1));?></td>
								<td><?php echo $v['kd_leasing'];?></td>
								<td><?php echo $v['leasing'];?></td>
                                <td><?php echo $v['telepon'];?></td>
                                <td><?php echo $v['email'];?></td>
                                <td><?php echo $v['kd_karyawan']." ".$v['karyawan'];?></td>
								<td><?php echo get_status($v['status_leasing']);?></td>
								<td class="text-center">
									<a class="btn btn-sm btn-warning" href="<?php echo base_url("master-leasing-edit-".$v['id']);?>">Edit</a> 
									<a class="btn btn-sm btn-danger" href="<?php echo base_url("master-leasing-delete-".$v['id']);?>" onclick="return confirm('Yakin Hapus Data ?');">Delete</a> 
								</td>
							</tr>
						<?php }} ?>
						</tbody>
						<tfoot>
							<form id="form1" method="post" action="<?php echo base_url('master-leasing');?>">
							<tr>
								<td>#</td>
								<td>
									<input class="form-control input-sm" name="kd_leasing" class="form-control" value="<?php echo (isset($sr_data['kd_leasing'])?$sr_data['kd_leasing']:"");?>" type="text" onkeyup="javascript:if(event.keyCode == 13){submit_search('form1');}else{return false;};"/>
								</td>
								<td>
									<input class="form-control input-sm" name="leasing" value="<?php echo (isset($sr_data['leasing'])?$sr_data['leasing']:"");?>" style="width: 100%;" type="text" onkeyup="javascript:if(event.keyCode == 13){submit_search('form1');}else{return false;};"/>
								</td>
                                <td>
									<input class="form-control input-sm" name="telepon" value="<?php echo (isset($sr_data['telepon'])?$sr_data['alamat']:"");?>" style="width: 100%;" type="text" onkeyup="javascript:if(event.keyCode == 13){submit_search('form1');}else{return false;};"/>
								</td>
                                <td>
									<input class="form-control input-sm" name="email" value="<?php echo (isset($sr_data['email'])?$sr_data['email']:"");?>" style="width: 100%;" type="text" onkeyup="javascript:if(event.keyCode == 13){submit_search('form1');}else{return false;};"/>
								</td>
                                <td>
									<input class="form-control input-sm" name="kd_karyawan" value="<?php echo (isset($sr_data['kd_karyawan'])?$sr_data['kd_karyawan']:"");?>" style="width: 100%;" type="text" onkeyup="javascript:if(event.keyCode == 13){submit_search('form1');}else{return false;};"/>
								</td>
								<td>
									<select class="form-control input-sm" name="status_leasing" onchange="submit_search('form1');">                         
										<option value=""></option>
										<option value="1" <?php echo (isset($sr_data['status_leasing']) && $sr_data['status_leasing']=="1"?"selected":"");?>>Aktif</option>
										<option value="2" <?php echo (isset($sr_data['status_leasing']) && $sr_data['status_leasing']=="2"?"selected":"");?>>Non Aktif</option>
									</select>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
<div class="row">
	<div class="col-lg-1 pull-left text-left">	
		 <select class="form-control input-sm" name="page" onchange="submit_search('form1');"/>
			<option value="10" <?php echo (isset($sr_data['page']) && $sr_data['page']=="10"?"selected":"");?>>10</option>
			<option value="25" <?php echo (isset($sr_data['page']) && $sr_data['page']=="25"?"selected":"");?>>25</option>
			<option value="50" <?php echo (isset($sr_data['page']) && $sr_data['page']=="50"?"selected":"");?>>50</option>
			<option value="100" <?php echo (isset($sr_data['page']) && $sr_data['page']=="100"?"selected":"");?>>100</option>
		</select>
	</div>
	</form>
	<div class="col-lg-11 pull-right text-right">	
		<?php echo $paging;?>
	</div>
</div>