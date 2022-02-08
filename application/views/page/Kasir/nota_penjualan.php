<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@font-face {
			font-family: "Merchant-Copy";
			src: url(<?php echo base_url() ?>assets/fonts/merchant-copy.ttf);
		}
		td, p, caption {
			font-family: "Merchant-Copy";
			font-size: 20px;
		},
		td {
			padding: 2px;
		},
	</style>
</head>
<body>	
<style type="text/css">
	tr.border_bottom td {
	  border-bottom: 1px dashed;
	}
</style>
<table border="0">
	<tr>
		<td style="padding-bottom: 15px; font-size: 30px" colspan="4" align="center">ZeusCafe</td>
	</tr>
	<tr class="border_bottom">
		<td colspan="4"></td>
	</tr>
	<tr>
		<td colspan="2">ID:</td>
		<td colspan="2" align="right"><?php echo $penjualan->no_nota_penjualan ?></td>
	</tr>
	<tr>
		<td colspan="2">Tanggal:</td>
		<td colspan="2" align="right"><?php echo $penjualan->tgl_nota_penjualan ?> <?php echo $penjualan->waktu_nota_penjualan ?></td>
	</tr>
	<tr>
		<td colspan="2">Kasir:</td>
		<td colspan="2" align="right"><?php echo $this->session->userdata('nama') ?></td>
	</tr>
	<tr class="border_bottom">
		<td colspan="4"></td>
	</tr>
	<?php $total_bayar = 0; ?>
	<?php $total_item = 0; ?>
	<?php foreach($detail_penjualan as $detail_penjualan) { ?>
	<tr>
		<td><?php echo $detail_penjualan->nama_menu ?></td>
		<?php $jumlah = $detail_penjualan->jumlah ?>
		<td style="padding: 4px 10px 4px"><?php echo $jumlah ?></td>
		<td align="right"><?php echo number_format($detail_penjualan->harga) ?></td>
		<?php $total = $detail_penjualan->jumlah * $detail_penjualan->harga ?>
		<td align="right"><?php echo number_format($total) ?></td>
		<?php $total_bayar += $total ?>
		<?php $total_item += $jumlah ?>
	</tr>
	<?php } ?>
	<tr class="border_bottom">
		<td colspan="4"></td>
	</tr>
	<tr>
		<td>Total Item:</td>
		<td style="padding: 4px 10px 4px"><?php echo $total_item ?></td>
		<td></td>
		<td align="right"><?php echo number_format($total_bayar) ?></td>
	</tr>
	<tr>
		<td>Tunai:</td>
		<td style="padding: 4px 10px 4px"></td>
		<td></td>
		<td align="right"><?php echo number_format($bayar) ?></td>
	</tr>
	<tr>
		<td>Kembalian:</td>
		<td style="padding: 4px 10px 4px"></td>
		<td></td>
		<td align="right"><?php echo number_format($kembalian) ?></td>
	</tr>
	<tr class="border_bottom">
		<td colspan="4"></td>
	</tr>
	<tr>
		<td style="padding-top: 20px" colspan="4" align="center">
			<div style="margin: 5px">ZeusCafe</div>
			<div style="margin: 5px">Jl. Ikan Tombro No 6, </div>
			<div>Mojolangu, Kec. Lowokwaru</div>
			<div style="margin: 5px">Kota Malang</div>
		</td>
	</tr>
	<tr class="border_bottom">
		<td colspan="4"></td>
	</tr>
</table>



</body>
</html>