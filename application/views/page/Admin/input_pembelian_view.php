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
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" method="post" action="<?php echo base_url() ?>admin/insert_pembelian">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>No Nota Pembelian</label>
                                        <?php 
                                            if ($id_pembelian) {
                                                $num = (int)substr($id_pembelian->no_nota_pembelian, -4) + 1;
                                                
                                                $b1 = substr($id_pembelian->no_nota_pembelian, 6, 2);
                                                $b2 = date('m');

                                                if ($b1 == $b2) {
                                                    if ($num > 0 && $num <= 9) {
                                                        $id = "PB".date('Ym')."000".$num;
                                                    } else if ($num > 9 && $num <= 99) {
                                                        $id = "PB".date('Ym')."00".$num;
                                                    } else if ($num > 99 && $num <= 999) {
                                                        $id = "PB".date('Ym')."0".$num;
                                                    } else {
                                                        $id = "PB".date('Ym')."".$num;
                                                    }
                                                } else {
                                                    $id = "PB".date('Ym')."0001";
                                                }
                                            } else {
                                                $id = "PB".date('Ym')."0001";
                                            }
                                        ?>
                                        <input class="form-control" type="text" name="no_nota_pembelian" required="" value="<?php echo $id ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input class="form-control" type="text" name="tgl" required="" value="<?php echo date('Y-m-d') ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Waktu</label>
                                        <div id="timestamp" class="form-control" readonly></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Supplier</label>
                                        <select class="form-control" name="id_supplier">
                                            <?php foreach ($supplier as $supplier) { ?>
                                            <option value="<?php echo $supplier->id_supplier ?>"><?php echo $supplier->id_supplier ?> | <?php echo $supplier->nama_supplier ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save"></i> &nbsp Simpan
                                    </button>
                                    <a class="btn btn-danger" id="addRow2">
                                        <i class="fa fa-plus"></i> &nbsp Tambah Item
                                    </a>
                                    <input type="text" name="counter" id="counter" value="">
                                    <table class="table table-striped table-bordered table-hover" id="example2">
                                        <thead>
                                            <tr>
                                                <th>ID Bahan</th>
                                                <th>Nama Bahan</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Satuan</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="col-lg-12" align="right">
                                    <input type="text" name="totalHargaAll" id="totalHargaAll" value="0">
                                    <input type="text" name="totalJumlahAll" id="totalJumlahAll" value="0">
                                </div>

                                </form>
                            </div>
                            <!-- /.row (nested) -->
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