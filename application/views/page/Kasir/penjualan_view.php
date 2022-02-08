
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
                                <a href="<?php echo base_url() ?>kasir/input_penjualan" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Input Penjualan</a>
                                <table class="all table table-striped table-bordered table-hover" id="datapenjualan">
                                    <thead>
                                        <tr>
                                            <th>No Nota</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Pelanggan</th>
                                            <th>Total Menu</th>
                                            <th>Total Harga</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($penjualan as $penjualan) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $penjualan->no_nota_penjualan ?></td>
                                            <td><?php echo $penjualan->tgl_nota_penjualan ?></td>
                                            <td><?php echo $penjualan->waktu_nota_penjualan ?></td>
                                            <td><?php echo $penjualan->id_pelanggan ?></td>
                                            <td><?php echo $penjualan->total_menu ?></td>
                                            <td><?php echo $penjualan->total_harga ?></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>kasir/detail_penjualan/<?php echo $penjualan->no_nota_penjualan ?>" class="btn btn-danger">
                                                    <i class="fa fa-list"></i>
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