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
                    <!--<div class="panel-heading">
                        Basic Form Elements
                    </div>-->
                    <div class="panel-body">
                        <div class="row">
                            <form method="post" action="<?php echo base_url() ?>admin/insert_detail_pembelian" onkeydown="return event.key != 'Enter';">
                                <div class="col-lg-12" style="margin-bottom: 10px">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-save"></i> &nbsp Simpan
                                        </button>
                                        <button type="reset" class="btn btn-danger">
                                            <i class="fa fa-times"></i> &nbsp Batal
                                        </button>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <label>
                                            Total Pembayaran:
                                        </label>
                                        <input type="number" name="total_pembayaran" id="total_pembayaran" readonly value=0>
                                    </div> -->
                                    <!-- <a href="<?php //echo base_url() ?>kasir/cobacoba">cobacoba</a> -->
                                </div>
                                <input type="hidden" name="no_nota_pembelian" value="<?php echo $no_nota_pembelian ?>">
                                <!-- #1 -->
                                <?php for($i = 1; $i <= 5; $i++) { ?>
                                <div class="col-lg-12">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>ID Bahan</label>
                                            <input type="text" name="id_bahan<?php echo $i ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>#<?php echo $i ?> Bahan</label>
                                            <input type="text" name="nama_bahan<?php echo $i ?>" id="nama_bahan<?php echo $i ?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" name="harga<?php echo $i ?>" class="form-control" id="harga<?php echo $i ?>" readonly onchange="total()">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input type="number" name="jumlah<?php echo $i ?>" class="form-control" id="jumlah<?php echo $i ?>" value=0 onchange="total();total_pembayaran()">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input type="number" name="total<?php echo $i ?>" class="form-control" readonly id="total<?php echo $i ?>" value=0 onchange="total_pembayaran()">
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <script type="text/javascript">
                                    function total(){
                                        for (i = 1; i <= 5; i++) {
                                            harga = parseInt(document.getElementById('harga' + i).value);
                                            jumlah = parseInt(document.getElementById('jumlah' + i).value);

                                            document.getElementById('total' + i).value = harga * jumlah;
                                        }
                                    }
                                </script>
                            </form>
                            <!-- /.col-lg-6 (nested) -->
                            
                            <!-- /.col-lg-6 (nested) -->
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

</div>