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
                                <?php foreach ($edit_pelanggan as $edit_pelanggan) { ?>
                                <form role="form" method="post" action="<?php echo base_url() ?>kasir/update_pelanggan">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>ID Pelanggan</label>
                                        <input class="form-control" type="text" name="id_pelanggan" required="" value="<?php echo $edit_pelanggan->id_pelanggan ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Nama Pelanggan</label>
                                        <input class="form-control" type="text" name="nama_pelanggan" required="" value="<?php echo $edit_pelanggan->nama_pelanggan ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin">
                                        	<option value="laki-laki" <?php if ($edit_pelanggan->jk == 'laki-laki') { echo "selected"; } ?>>Laki-laki</option>
                                        	<option value="perempuan" <?php if ($edit_pelanggan->jk == 'perempuan') { echo "selected"; } ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                		<label>No Telepon</label>
                                		<input type="text" name="no_telepon" class="form-control" value="<?php echo $edit_pelanggan->no_telepon ?>">
                                	</div>
                                </div>
                                <div class="col-lg-4">
                                	<div class="form-group">
                                		<label>Alamat</label>
                                		<textarea name="alamat" class="form-control"><?php echo $edit_pelanggan->alamat ?></textarea>
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