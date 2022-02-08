<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zeus Cafe | <?php echo $this->session->userdata('level') ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/zeuscafe.jpeg" />

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url() ?>assets/datatable/bootstrap.min.css" rel="stylesheet">

    <!-- Datatable -->
    <link href="<?php echo base_url() ?>assets/datatable/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url() ?>assets/font-awesome/css/all.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
    
    <!-- autocomplete -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/autocomplete/jquery-ui.min.css">
    
    <!-- print -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatable/print/buttons.dataTables.min.css">

    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?><?php echo $this->session->userdata('level') ?>"><img src="<?php echo base_url() ?>assets/img/zeuscafe.jpeg" width="30px" height="30px" style="display: inline-block;"> Zeus Cafe</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $this->session->userdata('username') ?><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!-- <li>
                            <a href="<?php //echo base_url() ?>admin/user_profile"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li> -->
                        </li>
                        <!-- <li class="divider"></li> -->
                        <li><a href="<?php echo base_url() ?>login/logout"><i class="fa fa-sign-out-alt fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url() ?><?php echo $this->session->userdata('level') ?>"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                        </li>
                        <?php if ($this->session->userdata('level') == 'kasir') { ?>
                        <li>
                            <a href="<?php echo base_url() ?>kasir/menu"><i class="fa fa-coffee fa-fw"></i> Menu</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money-bill-wave fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>kasir/penjualan">Penjualan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>kasir/detail_penjualan">Detail Penjualan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>kasir/pelanggan"><i class="fa fa-users fa-fw"></i> Pelanggan</a>
                        </li>
                        <?php } else if ($this->session->userdata('level') == 'admin') { ?>
                        <li>
                            <a href="<?php echo base_url() ?>admin/bahan"><i class="fa fa-wine-bottle fa-fw"></i> Bahan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/penggunaan"><i class="fa fa-sync fa-fw"></i> Penggunaan</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money-bill-wave fa-fw"></i> Transaksi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>admin/pembelian">Pembelian</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>admin/detail_pembelian">Detail Pembelian</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>admin/supplier"><i class="fa fa-truck fa-fw"></i> Supplier</a>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>