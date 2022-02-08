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
                                <form role="form" method="post" action="<?php echo base_url() ?>admin/update_penggunaan">
                                <?php foreach ($edit_penggunaan as $edit_penggunaan) { ?>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>ID Penggunaan</label>
                                        <input class="form-control" type="text" name="id_penggunaan" required="" value="<?php echo $edit_penggunaan->id_penggunaan ?>" readonly>
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
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>ID Bahan</label>
                                        <input type="text" name="id_bahan" id="id_bahan" class="form-control" readonly value="<?php echo $edit_penggunaan->id_bahan ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Nama Bahan</label>
                                        <input type="text" name="nama_bahan" id="nama_bahan" class="form-control" autocomplete="off" required value="<?php echo $edit_penggunaan->nama_bahan ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                        <input type="number" name="jumlah" class="form-control" required value="<?php echo $edit_penggunaan->jumlah ?>">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Satuan</label>
                                        <input type="text" name="satuan" class="form-control" readonly value="<?php echo $edit_penggunaan->satuan ?>">
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
                                
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <?php } ?>
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