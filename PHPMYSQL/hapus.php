<?php

include "koneksi.php";
$kode = $_GET['kode'];
$hapus = mysqli_query($koneksi, "delete from tblbook where tb_kode='$kode'");

if ($hapus){
    header("location:menampilkan_data.php");
}else{
    echo "Data Gagal Di Hapus";
}
?>