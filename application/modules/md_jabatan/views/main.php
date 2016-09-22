<div class="row">
	<div class="col-lg-12">
		<section class="panel default blue_title h4">
			<div class="panel-heading">
				<div class="row">
					<div class="col-md-6 pull-left">Master Jabatan</div>
					<div class="col-md-6 pull-right text-right">
						<a href="<?php echo base_url();?>master-jabatan-tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus-square"></i> Tambah</a> 
						<button class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</button>
						<button class="btn btn-success btn-sm"><i class="fa fa-file-excel-o"></i> Excel</button>
					</div> 
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Jabatan</th>
								<th>Keterangan</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							if(count($data) < 1){
								echo"<tr><td class='text-center'>-No Data Found-</td></tr>";
							}else{
								foreach($data as $k=>$v){ ?>
							<tr>
								<td><?php echo $k+1;?></td>
								<td><?php echo $v['jabatan'];?></td>
								<td><?php echo $v['keterangan'];?></td>
								<td><?php echo $v['status'];?></td>
								<td></td>
							</tr>
						<?php }} ?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
<div class="row">
	<div class="col-lg-6 pull-left text-left">	
		<?php echo $paging;?>
	</div>	
	<div class="col-lg-6 pull-right text-right">	
		<?php echo $paging;?>
	</div>
</div>