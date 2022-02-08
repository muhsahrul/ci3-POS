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
	  border-bottom: 1px solid;
	}
</style>
<table border="0">
	<tr>
		<td style="padding-bottom: 20px; font-size: 30px" colspan="4" align="center">ZeusCafe</td>
	</tr>
	<tr>
		<td align="center" colspan="4" style="border-top: 1px solid; border-bottom: 1px solid; padding: 10px"><?php echo $no_nota_pembelian ?> - Supplier: <?php echo $pembelian->nama_supplier ?></td>
	</tr>
	<?php $total_bayar = 0; ?>
	<?php $total_item = 0; ?>
	<?php foreach($detail_pembelian as $detail_pembelian) { ?>
	<tr>
		<td><?php echo $detail_pembelian->nama_bahan ?></td>
		<?php $jumlah = $detail_pembelian->jumlah ?>
		<td style="padding: 4px 10px 4px"><?php echo $jumlah ?></td>
		<td><?php echo $detail_pembelian->harga ?></td>
		<?php $total = $detail_pembelian->jumlah * $detail_pembelian->harga ?>
		<td><?php echo $total ?></td>
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
		<td><?php echo $total_bayar ?></td>
	</tr>
	<!-- <tr>
		<td>Tunai:</td>
		<td style="padding: 4px 10px 4px"></td>
		<td></td>
		<td>50000</td>
	</tr>
	<tr>
		<td>Kembalian:</td>
		<td style="padding: 4px 10px 4px"></td>
		<td></td>
		<td>15000</td>
	</tr> -->
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


</table>



</body>
</html>