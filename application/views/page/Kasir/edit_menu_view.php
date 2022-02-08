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
                            	<?php foreach ($edit_menu as $edit_menu) { ?>
                                <form role="form" method="post" action="<?php echo base_url() ?>kasir/update_menu">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>ID Menu</label>                                 		
                                        <input class="form-control" placeholder="Ex: M0001" type="text" name="id_menu" required="" value="<?php echo $edit_menu->id_menu ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Nama Menu</label>
                                        <input class="form-control" type="text" name="nama_menu" required="" value="<?php echo $edit_menu->nama_menu ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-control" name="kategori">
                                        	<option value="makanan" <?php if ($edit_menu->kategori == 'makanan') { echo 'selected'; } ?>>
                                        		Makanan
                                        	</option>
                                        	<option value="minuman" <?php if ($edit_menu->kategori == 'minuman') { echo 'selected'; } ?>>
                                        		Minuman
                                        	</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                		<label>Satuan</label>
                                		<select class="form-control" name="satuan">
                                            <option value="porsi" <?php if ($edit_menu->satuan == 'porsi') { echo 'selected'; } ?>>
                                            	Porsi
                                            </option>
                                			<option value="gelas" <?php if ($edit_menu->satuan == 'gelas') { echo 'selected'; } ?>>
                                				Gelas
                                			</option>
                                		</select>
                                	</div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                		<label>Harga</label>
                                		<input type="number" name="harga" class="form-control" required="" value="<?php echo $edit_menu->harga ?>">
                                	</div>
                                </div>
                                <div class="col-lg-12">
                                	<button class="btn btn-primary" type="submit">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                </div>
                                </form>
                            	<?php } ?>
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