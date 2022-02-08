
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
                                <a href="<?php echo base_url() ?>admin/input_bahan" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Input Bahan</a>
                                <table class="all table table-striped table-bordered table-hover" id="datamenu">
                                    <thead>
                                        <tr>
                                            <th>ID Bahan</th>
                                            <th>Nama Bahan</th>
                                            <th>Jenis</th>
                                            <th>Stok(Bungkus)</th>
                                            <th>Stok(Cangkir)</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Supplier</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($bahan as $bahan) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $bahan->id_bahan ?></td>
                                            <td><?php echo $bahan->nama_bahan ?></td>
                                            <td><?php echo $bahan->jenis ?></td>
                                            <td><?php echo $bahan->stok ?></td>
                                            <td><?php echo $bahan->stok_cangkir ?></td>
                                            <td><?php echo $bahan->satuan ?></td>
                                            <td><?php echo $bahan->harga ?></td>
                                            <td><?php echo $bahan->nama_supplier ?></td>
                                            <td class="center">
                                                <a href="<?php echo base_url() ?>admin/edit_bahan/<?php echo $bahan->id_bahan ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url() ?>admin/delete_bahan/<?php echo $bahan->id_bahan ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $bahan->nama_bahan ?>?')">
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