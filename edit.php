<?php 
include 'database/database.php';
$db = new database();
?>

<h3>Edit Data Barang</h3>

<form action="proses.php?aksi=update" method="post">

<?php
foreach($db->edit($_GET['id']) as $barang){
?>

<input type="hidden" name="id" value="<?php echo $barang['id']; ?>">

<table>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" value="<?= $barang['nama_barang'] ?>"></td>
	</tr>
	<tr>
		<td>Stok Barang</td>
		<td><input type="text" name="stok_barang" value="<?= $barang['stok_barang'] ?>"></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td><input type="number" name="harga_jual" value="<?= $barang['harga_jual'] ?>"></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td><input type="number" name="harga_beli" value="<?= $barang['harga_beli'] ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>

<?php
}
?>

</form>