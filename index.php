<?php 
include 'database/database.php';
$db = new database();
?>

<h3>Data Barang</h3>

<a href="tambah.php">Input Data</a>

<table border="1" style="border-collapse: collapse">
	<tr>
		<th>No</th>
		<th>Nama Barang</th>
		<th>Stok Barang</th>
		<th>Harga Beli</th>
		<th>Harga Jual</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama_barang']; ?></td>
		<td><?php echo $x['stok_barang']; ?></td>
		<td><?php echo $x['harga_beli']; ?></td>
		<td><?php echo $x['harga_jual']; ?></td>
		<td>
      <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
      <span> | </span>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>