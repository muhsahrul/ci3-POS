
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
                                <a href="<?php echo base_url() ?>admin/input_supplier" class="btn btn-primary" style="margin-bottom: 10px"><i class="fa fa-plus"></i> Input Supplier</a>
                                <table class="all table table-striped table-bordered table-hover" id="datapelanggan">
                                    <thead>
                                        <tr>
                                            <th>ID Supplier</th>
                                            <th>Nama Supplier</th>
                                            <th>No Telepon</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($supplier as $supplier) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $supplier->id_supplier ?></td>
                                            <td><?php echo $supplier->nama_supplier ?></td>
                                            <td><?php echo $supplier->no_telepon ?></td>
                                            <td><?php echo $supplier->alamat ?></td>
                                            <td class="center">
                                                <a href="<?php echo base_url() ?>admin/edit_supplier/<?php echo $supplier->id_supplier ?>" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?php echo base_url() ?>admin/delete_supplier/<?php echo $supplier->id_supplier ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data <?php echo $supplier->nama_supplier ?>?')">
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