<?php
    $login_success = $this->session->flashdata('login_success');
    $login_error = $this->session->flashdata('login_error');
    $input_menu = $this->session->flashdata('input_menu');
    $edit_menu = $this->session->flashdata('edit_menu');
    $delete_menu = $this->session->flashdata('delete_menu');
    $input_pelanggan = $this->session->flashdata('input_pelanggan');
    $edit_pelanggan = $this->session->flashdata('edit_pelanggan');
    $input_bahan = $this->session->flashdata('input_bahan');
    $edit_bahan = $this->session->flashdata('edit_bahan');
    $delete_bahan = $this->session->flashdata('delete_bahan');
    $input_supplier = $this->session->flashdata('input_supplier');
    $edit_supplier = $this->session->flashdata('edit_supplier');
    $delete_supplier = $this->session->flashdata('delete_supplier');
    $input_penjualan = $this->session->flashdata('input_penjualan');
    $input_detail_penjualan = $this->session->flashdata('input_detail_penjualan');
    $input_pembelian = $this->session->flashdata('input_pembelian');
    $input_detail_pembelian = $this->session->flashdata('input_detail_pembelian');
    $input_penggunaan = $this->session->flashdata('input_penggunaan');
    $edit_penggunaan = $this->session->flashdata('edit_penggunaan');
?>

<?php if ($login_success != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $login_success ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($login_error != NULL) { ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
      <?php echo $login_error ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_menu != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_menu ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($edit_menu != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $edit_menu ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($delete_menu != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $delete_menu ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_pelanggan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_pelanggan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($edit_pelanggan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $edit_pelanggan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_bahan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_bahan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($edit_bahan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $edit_bahan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($delete_bahan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $delete_bahan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_supplier != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_supplier ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($edit_supplier != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $edit_supplier ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($delete_supplier != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $delete_supplier ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_penjualan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_penjualan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_detail_penjualan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_detail_penjualan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_pembelian != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_pembelian ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_detail_pembelian != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_detail_pembelian ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($input_penggunaan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $input_penggunaan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>

<?php if ($edit_penggunaan != NULL) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <?php echo $edit_penggunaan ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
<?php } ?>