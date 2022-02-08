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
                                <form role="form" method="post" action="<?php echo base_url() ?>kasir/insert_menu">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>ID Menu</label>
                                        <?php 
                                            if ($id_menu) {
                                                $num = (int)substr($id_menu->id_menu, -3) + 1;    
                                            } else {
                                                $num = 1;
                                            }
                                            
                                            if ($num > 0 && $num <= 9) {
                                                $id = "M000".$num;
                                            } else if ($num > 9 && $num <= 99) {
                                                $id = "M00".$num;
                                            } else if ($num > 99 && $num <= 999) {
                                                $id = "M0".$num;
                                            } else {
                                                $id = "M".$num;
                                            }
                                        ?>
                                        <input class="form-control" placeholder="Ex: M0001" type="text" name="id_menu" required="" value="<?php echo $id ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Nama Menu</label>
                                        <input class="form-control" type="text" name="nama_menu" required="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-control" name="kategori">
                                        	<option value="makanan">Makanan</option>
                                        	<option value="minuman">Minuman</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                		<label>Satuan</label>
                                		<select class="form-control" name="satuan">
                                            <option value="porsi">Porsi</option>
                                			<option value="gelas">Gelas</option>
                                		</select>
                                	</div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                		<label>Harga</label>
                                		<input type="number" name="harga" class="form-control" required="">
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