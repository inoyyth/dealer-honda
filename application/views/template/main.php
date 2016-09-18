
<div class="contentpanel">
	<!--\\\\\\\ contentpanel start\\\\\\-->
	<div class="pull-left breadcrumb_admin clear_both">
		<div class="pull-right">
			<ol class="breadcrumb">
				<?php echo $this->breadcrumbs->show();?>
			</ol>
        </div>
	</div>
	<div class="container clear_both padding_fix">
		<!--\\\\\\\ container  start \\\\\\-->
		<?php $this->load->view($view);?>
	</div>
      <!--\\\\\\\ container  end \\\\\\-->
</div>
    <!--\\\\\\\ content panel end \\\\\\-->

