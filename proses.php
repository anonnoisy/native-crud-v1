<?php 
include 'database/database.php';
$db = new database();

$aksi = $_GET['aksi'];

  if($aksi == "tambah"){

    $db->input($_POST['nama_barang'], $_POST['stok_barang'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("location:index.php");

  }elseif($aksi == "hapus"){ 	

    $db->hapus($_GET['id']);
    header("location:index.php");

  }elseif($aksi == "update"){

    $db->update($_POST['id'], $_POST['nama_barang'], $_POST['stok_barang'], $_POST['harga_beli'], $_POST['harga_jual']);
    header("location:index.php");

  }elseif($aksi == "hapus") {
    $db->hapus($_POST['id']);
    header("location:index.php");
  }

?>