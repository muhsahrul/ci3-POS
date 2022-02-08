
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">
                        <?php echo $title ?> <?php if($no_nota_penjualan) { echo "(".$no_nota_penjualan.")"; } ?>
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
                                <input id="startdate" class="datepicker" autocomplete="off"></input>
                                <label>End date:</label>
                                <input id="enddate" class="datepicker" autocomplete="off"></input>
                                <table class="table table-striped table-bordered table-hover" id="detail_penjualan">
                                    <thead>
                                        <tr>
                                            <th>No Nota Penjualan</th>
                                            <th>Tanggal</th>
                                            <th>ID Menu</th>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($detail_penjualan as $detail_penjualan) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $detail_penjualan->no_nota_penjualan ?></td>
                                            <td><?php echo $detail_penjualan->tgl_nota_penjualan ?></td>
                                            <td><?php echo $detail_penjualan->id_menu ?></td>
                                            <td><?php echo $detail_penjualan->nama_menu ?></td>
                                            <td><?php echo $detail_penjualan->jumlah ?></td>
                                            <td><?php echo ($detail_penjualan->harga) * ($detail_penjualan->jumlah)  ?></td>
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
                                    <tfoot align="right">
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
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