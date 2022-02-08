<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zeus Cafe | Kasir</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/zeuscafe.jpeg" />

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
    	<div class="row">
    		<div class="col-md-4 col-md-offset-4" style="margin-bottom: 10px">
    			<div align="center">
    				<img src="<?php echo base_url() ?>assets/img/zeuscafe.jpeg" width="200px" height="200px">
    			</div>
    		</div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php $this->load->view('template/notif') ?>
                <div class="login-panel panel panel-default" style="margin-top: 10px">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In | Zeus Cafe</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo base_url() ?>login/proses_login">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url() ?>assets/js/sb-admin.js"></script>

</body>

</html>
