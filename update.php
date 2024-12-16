<?php
include "koneksi.php";
$kode = $_POST["kode"];
$nama = $_POST["nama"];
$harga = $_POST["harga"];

$update = mysqli_query ($koneksi, "update tblbook set tb_nama='$nama', tb_harga='$harga' where tb_kode='$kode'");
if ($update){
    header ("location:menampilkan_data.php");
}else{
    header("location:edit.php");
}
?>
