
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">
                        <?php echo $title ?> <?php if($no_nota_pembelian) { echo "(".$no_nota_pembelian.")"; } ?>
                    </h3>
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
                                <label>Start date:</label>
                                <input id="startdate2" class="datepicker2" autocomplete="off"></input>
                                <label>End date:</label>
                                <input id="enddate2" class="datepicker2" autocomplete="off"></input>
                                <table class="table table-striped table-bordered table-hover" id="detail_pembelian">
                                    <thead>
                                        <tr>
                                            <th>No Nota Pembelian</th>
                                            <th>Tanggal</th>
                                            <th>ID Bahan</th>
                                            <th>Nama</th>
                                            <th>Supplier</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($detail_pembelian as $detail_pembelian) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $detail_pembelian->no_nota_pembelian ?></td>
                                            <td><?php echo $detail_pembelian->tgl_nota_pembelian ?></td>
                                            <td><?php echo $detail_pembelian->id_bahan ?></td>
                                            <td><?php echo $detail_pembelian->nama_bahan ?></td>
                                            <td><?php echo $detail_pembelian->nama_supplier ?></td>
                                            <td><?php echo $detail_pembelian->jumlah ?></td>
                                            <td><?php echo ($detail_pembelian->harga)*($detail_pembelian->jumlah) ?></td>
                                            <!-- <td>
                                                <a href="<?php //echo base_url() ?>kasir/input_detail_penjualan/<?php //echo $penjualan->no_nota_penjualan ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <?php //} else { ?>
                                                <a href="<?php //echo base_url() ?>kasir/detail_penjualan/<?php //echo $penjualan->no_nota_penjualan ?>" class="btn btn-danger">
                                                    <i class="fa fa-list"></i>
                                                </a>
                                                <a href="" class="btn btn-success">
                                                    <i class="fa fa-print"></i>
                                                </a>
                                                <?php //} ?>
                                             --></td>
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