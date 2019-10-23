<?php 
class Database {

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "native_crud";
  var $koneksi = "";
  
  function __construct()
  {

		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);

    if (mysqli_connect_errno()){
			return "Koneksi database gagal : " . mysqli_connect_error();
    }

	}

	function tampil_data()
	{

    $hasil = [];

    $data = mysqli_query($this->koneksi,"select * from barang");
    
		while($row = mysqli_fetch_array($data)){
			array_push($hasil, $row);
    }
    
    return $hasil;
    
  }

  function input($nama_barang, $stok_barang, $harga_beli, $harga_jual)
  {

    mysqli_query($this->koneksi, "insert into barang values('','$nama_barang','$stok_barang','$harga_beli', '$harga_jual')");
    
  }

  function edit($id)
  {

    $hasil = [];

    $data = mysqli_query($this->koneksi, "select * from barang where id = '$id'");
    while($row = mysqli_fetch_array($data)){
      array_push($hasil, $row);
    }

    return $hasil;

  }
  
  function update($id, $nama_barang, $stok_barang, $harga_beli, $harga_jual)
  {

    mysqli_query($this->koneksi, "update barang set 
      nama_barang = '$nama_barang', 
      stok_barang = '$stok_barang', 
      harga_beli = '$harga_beli', 
      harga_jual = '$harga_jual' 
      where barang.id = '$id'");

  }

  function hapus($id)
  {
    mysqli_query($this->koneksi, "delete from barang where barang.id = '$id'");
  }
  
}

?>