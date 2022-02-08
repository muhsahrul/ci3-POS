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
                                <?php foreach ($edit_supplier as $edit_supplier) { ?>
                                <form role="form" method="post" action="<?php echo base_url() ?>admin/update_supplier">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>ID Supplier</label>
                                        <input class="form-control" type="text" name="id_supplier" required="" value="<?php echo $edit_supplier->id_supplier ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Nama Supplier</label>
                                        <input class="form-control" type="text" name="nama_supplier" required="" value="<?php echo $edit_supplier->nama_supplier ?>" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                		<label>No Telepon</label>
                                		<input type="text" name="no_telepon" class="form-control" value="<?php echo $edit_supplier->no_telepon ?>" autocomplete="off">
                                	</div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                		<label>Alamat</label>
                                		<textarea name="alamat" class="form-control"><?php echo $edit_supplier->alamat ?></textarea>
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