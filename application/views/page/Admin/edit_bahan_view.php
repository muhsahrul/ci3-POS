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
                            	<?php foreach ($edit_bahan as $edit_bahan) { ?>
                                <form role="form" method="post" action="<?php echo base_url() ?>admin/update_bahan">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>ID Bahan</label>                                 		
                                        <input class="form-control" placeholder="Ex: M0001" type="text" name="id_bahan" required="" value="<?php echo $edit_bahan->id_bahan ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Nama Bahan</label>
                                        <input class="form-control" type="text" name="nama_bahan" required="" value="<?php echo $edit_bahan->nama_bahan ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                        <label>Jenis</label>
                                        <select class="form-control" name="jenis">
                                        	<option value="makanan" <?php if ($edit_bahan->jenis == 'makanan') { echo 'selected'; } ?>>
                                        		Makanan
                                        	</option>
                                        	<option value="minuman" <?php if ($edit_bahan->jenis == 'minuman') { echo 'selected'; } ?>>
                                        		Minuman
                                        	</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Satuan</label>
                                        <select class="form-control" name="satuan">
                                            <option value="bungkus" <?php if ($edit_bahan->satuan == 'bungkus') { echo 'selected'; } ?>>
                                                Bungkus
                                            </option>
                                            <option value="kg" <?php if ($edit_bahan->satuan == 'kg') { echo 'selected'; } ?>>
                                                kg
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="number" name="harga" class="form-control" value="<?php echo $edit_bahan->harga ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Supplier</label>
                                        <select name="id_supplier" class="form-control">
                                            <?php foreach($supplier as $supplier) { ?>
                                                <option value="<?php echo $supplier->id_supplier ?>" <?php if ($edit_bahan->id_supplier == $supplier->id_supplier) { echo 'selected'; } ?>>
                                                    <?php echo $supplier->nama_supplier ?>
                                                </option>
                                            <?php } ?>
                                        </select>
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