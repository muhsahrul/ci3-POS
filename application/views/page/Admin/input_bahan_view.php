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
                                <form role="form" method="post" action="<?php echo base_url() ?>admin/insert_bahan">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>ID Bahan</label>
                                        <?php 
                                            $num = (int)substr($id_bahan->id_bahan, -3) + 1;
                                            if ($num > 0 && $num <= 9) {
                                                $id = "B000".$num;
                                            } else if ($num > 9 && $num <= 99) {
                                                $id = "B00".$num;
                                            } else {
                                                $id = "B0".$num;
                                            }
                                        ?>
                                        <input class="form-control" placeholder="Ex: B0001" type="text" name="id_bahan" required="" value="<?php echo $id ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                	<div class="form-group">
                                        <label>Jenis</label>
                                        <select class="form-control" name="jenis">
                                        	<option value="makanan">Makanan</option>
                                        	<option value="minuman">Minuman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Bahan</label>
                                        <input class="form-control" type="text" name="nama_bahan" required="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Satuan</label>
                                        <select class="form-control" name="satuan">
                                            <option value="bungkus">Bungkus</option>
                                            <option value="kg">kg</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" name="harga" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Supplier</label>
                                        <select name="id_supplier" class="form-control">
                                            <?php foreach ($supplier as $supplier) { ?>
                                                <option value="<?php echo $supplier->id_supplier ?>"><?php echo $supplier->nama_supplier ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                	<button class="btn btn-primary" type="submit">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                    <button class="btn btn-danger" type="reset">
                                        <i class="fa fa-times"></i> Batal
                                    </button>
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