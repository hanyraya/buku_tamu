<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dan MYSQL - Menampilkan Data Dari Database MYSQL dengan PHP</title>
</head>
<style>
        h2{
            text-align:center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align:center;
        }
        table, th, td {
            border: 1px solid black;
            text-align:center;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            margin-right: 10px;
            text-decoration: none;
            color: blue;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>

<body>
    <h2>DATA BUKU TAMU</h2>
    <br>
    <h4><a href="tambah_data.php">Tambah Data Buku Tamu</a></h4>
    <table align="center">
            <tr bgcolor="yellow">
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>NO.HP</th>
                <th>ACTION</th>
            </tr>
   
            <?php
            include "koneksi.php";
           $no = 1;
           $data = mysqli_query($koneksi, "select * from tblbook");
           while ($row = mysqli_fetch_array($data)){
           ?>
           <tr>
            <td> <?php echo $no++; ?> </td>
            <td> <?php echo $row['tb_kode']; ?> </td>
            <td> <?php echo $row['tb_nama']; ?> </td>
            <td> <?php echo $row['tb_harga']; ?> </td>
            <td>
                <a href="edit.php?kode=<?php echo $row["tb_kode"];?>">Edit</a> ||
                <a href="hapus.php?kode=<?php echo $row["tb_kode"];?>"
                onclick="return confirm('Apakah Yakin Anda Menghapus Data Ini?')">Hapus</a>
           </td>
           </tr>
           <?php
           }
           ?>
           </table>
    </body>
    </html>