
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
                                <a href="<?php echo base_url() ?>admin/input_pembelian" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Input Pembelian</a>
                                <table class="all table table-striped table-bordered table-hover" id="datapelanggan">
                                    <thead>
                                        <tr>
                                            <th>No Nota</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Supplier</th>
                                            <th>Total Bahan</th>
                                            <th>Total Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pembelian as $pembelian) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $pembelian->no_nota_pembelian ?></td>
                                            <td><?php echo $pembelian->tgl_nota_pembelian ?></td>
                                            <td><?php echo $pembelian->waktu_nota_pembelian ?></td>
                                            <td><?php echo $pembelian->nama_supplier ?></td>
                                            <td><?php echo $pembelian->total_bahan ?></td>
                                            <td><?php echo $pembelian->total_harga ?></td>
                                            <td>
                                                <a href="<?php echo base_url() ?>admin/detail_pembelian/<?php echo $pembelian->no_nota_pembelian ?>" class="btn btn-danger">
                                                    <i class="fa fa-list"></i>
                                                </a>
                                                <a href="<?php echo base_url() ?>admin/nota_pembelian/<?php echo $pembelian->no_nota_pembelian ?>" class="btn btn-success">
                                                    <i class="fa fa-print"></i>
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