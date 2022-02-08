
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
                            <div class="table-responsive">
                                <a href="<?php echo base_url() ?>admin/input_penggunaan" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Input Penggunaan</a>
                                <table class="all table table-striped table-bordered table-hover" id="datapenggunaan">
                                    <thead>
                                        <tr>
                                            <th>ID Penggunaan</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>ID Bahan</th>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($penggunaan as $penggunaan) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $penggunaan->id_penggunaan ?></td>
                                            <td><?php echo $penggunaan->tanggal_penggunaan ?></td>
                                            <td><?php echo $penggunaan->waktu_penggunaan ?></td>
                                            <td><?php echo $penggunaan->id_bahan ?></td>
                                            <td><?php echo $penggunaan->nama_bahan ?></td>
                                            <td><?php echo $penggunaan->jumlah ?></td>
                                            <td class="center">
                                                <a href="<?php echo base_url() ?>admin/edit_penggunaan/<?php echo $penggunaan->id_penggunaan ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url() ?>admin/delete_bahan/<?php echo $penggunaan->id_penggunaan ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $penggunaan->id_penggunaan ?>?')">
                                                    <i class="fa fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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