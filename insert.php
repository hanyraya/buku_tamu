<?php
include "koneksi.php";
$kode = $_POST["kode"];
$nama = $_POST["nama"];
$harga = $_POST["harga"];

$simpan = mysqli_query ($koneksi, "Insert Into tblbook values('$kode','$nama','$harga')");
if ($simpan){
    header ("location:menampilkan_data.php");
}else{
    header("location:tambah_data.php");
}
?>
