
<div class="contentpanel">
	<!--\\\\\\\ contentpanel start\\\\\\-->
	<div class="pull-left breadcrumb_admin clear_both">
		<div class="pull-right">
			<?php echo $this->breadcrumbs->show();?>
        </div>
	</div>
	<div class="container clear_both padding_fix">
		<?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php echo $this->session->flashdata('error');?>
            </div>
        <?php } ?>
        <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('success');?>
        </div>
        <?php } ?>
		<!--\\\\\\\ container  start \\\\\\-->
		<?php $this->load->view($view);?>
	</div>
      <!--\\\\\\\ container  end \\\\\\-->
</div>
    <!--\\\\\\\ content panel end \\\\\\-->