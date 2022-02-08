
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><?php echo $title ?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php $this->load->view('template/notif') ?>
                            <div class="table-responsive">
                                <a href="<?php echo base_url() ?>kasir/input_pelanggan" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Input Pelanggan</a>
                                <table class="all table table-striped table-bordered table-hover" id="datapelanggan">
                                    <thead>
                                        <tr>
                                            <th>ID Pelanggan</th>
                                            <th>Nama Pelanggan</th>
                                            <th>No Telepon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pelanggan as $pelanggan) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $pelanggan->id_pelanggan ?></td>
                                            <td><?php echo $pelanggan->nama_pelanggan ?></td>
                                            <td><?php echo $pelanggan->no_telepon ?></td>
                                            <td class="center">
                                                <a href="<?php echo base_url() ?>kasir/edit_pelanggan/<?php echo $pelanggan->id_pelanggan ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url() ?>kasir/delete_pelanggan/<?php echo $pelanggan->id_pelanggan ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $pelanggan->nama_pelanggan ?>?')">
                                                    <i class="fa fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->