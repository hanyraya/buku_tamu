<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dan MYSQL - Form Edit Data Buku</title>
    <style>
        h2 {
            text-align: center;
        }
        table {
            width: 450px;
            border: 1px solid black;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table td, input {
            padding: 7px;
            font-size: 15px;
        }
        input[type="reset"]:hover {
            background: red;
            border: 1px solid black;
            color: white;
        }
        input[type="submit"]:hover {
            background: green;
            border: 1px solid black;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Form Edit Data Buku Tamu</h2>
    <?php
    include "koneksi.php";
    $kode = $_GET['kode'];
    $data = mysqli_query($koneksi,"select * from tblbook where tb_kode='$kode'");
    while($row = mysqli_fetch_array($data)) {
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="kode" placeholder="NIM" 
                value="<?php echo $row['tb_kode'];?>" size="11" required></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap"
                value="<?php echo $row['tb_nama'];?>" size="30" required></td>
            </tr>
            <tr>
                <td>NO.HP</td>
                <td><input type="number" name="harga" placeholder="No.Hp"
                value="<?php echo $row['tb_harga'];?>" size="11" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="edit" value="Edit">
                    <input type="reset" name="batal" value="Batal">
                </td>
            </tr>
        </table>
    </form>
    <?php
    }
    ?>
</body>
</html>
