<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dan MYSQL - Form Tambah Data Buku</title>
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
    <h2>Form Tambah Data Buku Tamu</h2>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="kode" placeholder="NIM" size="11" required></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" size="30" required></td>
            </tr>
            <tr>
                <td>NO.HP</td>
                <td><input type="number" name="harga" placeholder="No.Hp" size="11" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" name="batal" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
