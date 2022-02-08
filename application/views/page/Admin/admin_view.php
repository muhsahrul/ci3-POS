<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <style type="text/css">
                                img {
                                  border-radius: 50%;
                                }
                            </style>
                            <div align="center">
                                <?php foreach($user as $user2) { ?>
                                <img src="<?php echo base_url() ?>assets/img/<?php echo $user2->foto ?>" alt="Avatar" style="width:200px">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table border="0" align="center">
                                <style type="text/css">
                                    th, td {
                                      padding-left: 15px;
                                      padding-right: 15px;
                                      padding-top: 5px;
                                      padding-bottom: 5px;
                                      text-align: left;
                                    }
                                </style>
                                <?php foreach ($user as $user) { ?>
                                <tr>
                                    <td>ID User</td>
                                    <td>:</td>
                                    <td><?php echo $user->id_user ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo $user->nama ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?php echo $user->jk ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?php echo $user->alamat ?></td>
                                </tr>
                                <tr>
                                    <td>Level</td>
                                    <td>:</td>
                                    <td><?php echo $user->level ?></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->