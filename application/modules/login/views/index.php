<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dealer Admin Login</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
            <link href="<?php echo base_url(); ?>themes/css/font-awesome.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo base_url(); ?>themes/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo base_url(); ?>themes/css/animate.css" rel="stylesheet" type="text/css" />
            <link href="<?php echo base_url(); ?>themes/css/admin.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="light_theme  fixed_header left_nav_fixed">
        <?php //echo $this->encrypt->encode('admin'); ?>
        <div class="wrapper">
            <!--\\\\\\\ wrapper Start \\\\\\-->
            <div class="login_page">
                <div class="login_content">
                    <div class="panel-heading border login_heading">sign in now</div>	
                    <form role="form" class="form-horizontal" method="post" action="<?php echo base_url() . "login/verivy_login"; ?>">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="email" name="username" placeholder="Email/Username" id="username" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class=" col-sm-10">
                                <div class="checkbox checkbox_margin">
                                    <label class="lable_margin">
                                        <input type="checkbox"><p class="pull-left"> Remember me</p></label>
                                    <button class="btn btn-default pull-right" type="submit">Sign in</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>themes/js/jquery-2.1.0.js"></script>
        <script src="<?php echo base_url(); ?>themes/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>themes/js/common-script.js"></script>
        <script src="<?php echo base_url(); ?>themes/js/jquery.slimscroll.min.js"></script>
    </body>
</html>
