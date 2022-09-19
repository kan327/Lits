<?php 
include 'assets/data.php';
$id = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="wraper-do">
        <?php include 'assets/sidenav.php'?>
        <main>
            <h1>Tambah Data Siswa</h1>
            <div class="cota w">
                <form action="assets/save.php" method="post">
                    <table class="for">
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td><label for="nama"></label><input type="text" name="nama" id="nama"></td>
                        </tr>
                        <tr>
                            <td>Judul buku yang dipinjam</td>
                            <td>:</td>
                            <td><label for="nama"></label><input type="text" name="nama" id="nama"></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td>:</td>
                            <td><label for="nama"></label><input type="text" name="nama" id="nama"></td>
                        </tr>
                        <tr>
                            <td>tanggal peminjaman</td>
                            <td>:</td>
                            <td><label for="nama"></label><input type="text" name="nama" id="nama"></td>
                        </tr>
                        <tr>
                            <td>tanggal pengembalian</td>
                            <td>:</td>
                            <td><label for="nama"></label><input type="text" name="nama" id="nama"></td>
                        </tr>
                        <tr>
                            <td colspan="3"><input class="btn" type="submit" name="simpan" value="Simpan data siswa +"> </td>
                        </tr>
                    </table>                   
                </form>
            </div>
        </main>
    </div>
</body>
</html>