
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
                                <a href="<?php echo base_url() ?>kasir/input_menu" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Input Menu</a>
                                <table class="all table table-striped table-bordered table-hover" id="datamenu">
                                    <thead>
                                        <tr>
                                            <th>ID Menu</th>
                                            <th>Nama Menu</th>
                                            <th>Kategori</th>
                                            <th>Satuan</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($menu as $menu) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $menu->id_menu ?></td>
                                            <td><?php echo $menu->nama_menu ?></td>
                                            <td><?php echo $menu->kategori ?></td>
                                            <td><?php echo $menu->satuan ?></td>
                                            <td><?php echo $menu->harga ?></td>
                                            <td class="center">
                                                <a href="<?php echo base_url() ?>kasir/edit_menu/<?php echo $menu->id_menu ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url() ?>kasir/delete_menu/<?php echo $menu->id_menu ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $menu->nama_menu ?>?')">
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