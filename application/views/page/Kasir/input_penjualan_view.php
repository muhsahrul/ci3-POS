<style type="text/css">
    .btn-transparent:hover,.btn-transparent:focus,.btn-transparent:active, 
    .btn-transparent:active:focus:not(:disabled):not(.disabled),
    .btn-transparent:focus, .btn-transparent:active, .btn-transparent:hover{
        box-shadow: none!important;
        outline: 0;
        cursor: default;
    }
</style>
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
                            <form method="post" action="<?php echo base_url() ?>kasir/insert_detail_penjualan" onkeydown="return event.key != 'Enter';">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>No Nota Penjualan</label>
                                    <?php 
                                        if ($id_penjualan) {
                                            $num = (int)substr($id_penjualan->no_nota_penjualan, -4) + 1;
                                            
                                            $b1 = substr($id_penjualan->no_nota_penjualan, 6, 2);
                                            $b2 = date('m');

                                            if ($b1 == $b2) {
                                                if ($num > 0 && $num <= 9) {
                                                    $id = "PJ".date('Ym')."000".$num;
                                                } else if ($num > 9 && $num <= 99) {
                                                    $id = "PJ".date('Ym')."00".$num;
                                                } else if ($num > 99 && $num <= 999) {
                                                    $id = "PJ".date('Ym')."0".$num;
                                                } else {
                                                    $id = "PJ".date('Ym')."".$num;
                                                }
                                            } else {
                                                $id = "PJ".date('Ym')."0001";
                                            }
                                        } else {
                                            $id = "PJ".date('Ym')."0001";
                                        }
                                    ?>
                                    <input class="form-control" type="text" name="no_nota_penjualan" required="" value="<?php echo $id ?>" readonly id="no_nota_penjualan">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input class="form-control" type="text" name="tgl" required="" value="<?php echo date('Y-m-d') ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Waktu</label>
                                    <div id="timestamp" class="form-control" readonly></div>
                                </div>
                            </div>
                            <?php 
                                $num = (int)substr($id_pelanggan->id_pelanggan, -3) + 1;
                                if ($num > 0 && $num <= 9) {
                                    $id2 = "P000".$num;
                                } else if ($num > 9 && $num <= 99) {
                                    $id2 = "P00".$num;
                                } else {
                                    $id2 = "P0".$num;
                                }
                            ?>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Pelanggan</label>
                                    <input type="text" name="id_pelanggan" value="<?php echo $id2 ?>" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Pelanggan</label>
                                    <input type="text" name="nama_pelanggan" class="form-control" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>No. HP</label>
                                    <input type="text" name="no_telepon" class="form-control" required autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary" id="simpan" disabled>
                                    <i class="fa fa-print"></i> &nbsp Cetak
                                </button>
                                <input type="text" name="counter" id="counter">
                                <table class="table table-striped table-bordered table-hover" id="example">
                                    <thead>
                                        <tr>
                                            <th width="30%">Nama Menu</th>
                                            <th width="20%">Harga</th>
                                            <th width="10%">Jumlah</th>
                                            <th width="10%">Sisa Stok</th>
                                            <th width="20%">Total</th>
                                            <th width="20%">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>
                                                <a class="btn btn-danger btn-block" id="addRow">
                                                    <i class="fa fa-plus"></i> &nbsp Tambah Item
                                                </a>
                                            </td>
                                            <td>            
                                                <a class="btn btn-success btn-block" id="btnTotal" onclick="totals(),diskon()">
                                                    <i class="fa fa-plus"></i> &nbsp Total
                                                </a>
                                            </td>
                                            <td>
                                                <input type="number" name="total" id="totals" class="form-control" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td><label class="btn btn-transparent btn-block btn-disabled"><b>Diskon :</b></label></td>
                                            <td>
                                                <input type="number" name="diskon" id="diskon" class="form-control" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td><label class="btn btn-transparent btn-block btn-disabled"><b>Bayar :</b></label></td>
                                            <td>
                                                <input type="number" name="bayar" id="bayar" class="form-control" disabled onchange="kembalian()" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"></td>
                                            <td><label class="btn btn-transparent btn-block btn-disabled"><b>Kembalian :</b></label></td>
                                            <td>
                                                <input type="number" name="kembalian" id="kembalian" class="form-control" readonly>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            </form>
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