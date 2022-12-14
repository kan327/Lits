<?php 
include 'assets/data.php';
$idpage = $_GET['idpage'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS STYLE -->
    <style>
        <?php include 'assets/style.css' ?>
    </style>
    <!-- MATERIAL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- icon -->
    <link rel="icon" type="icon" href="assets/lcn.png">
</head>
<body>
    <div class="wraper-do">
        <?php include 'assets/sidenav.php'?>
        <?php if($idpage == 'siswa'):?>
            <div class="container">
                <main>
                    <h1>Tambah Data Siswa</h1>
                    <div class="cota w">
                        <form action="assets/save.php" method="post">
                            <table class="for">
                                <tr>
                                    <td><label for="ns">Nama Siswa</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="ns" id="ns" required></td>
                                </tr>
                                <tr>
                                    <td><label for="jb">Judul buku yang dipinjam</label></td>
                                    <td>:</td>
                                    <td>
                                        <div class="select">
                                        <select id="standard-select" name="jb" id="jb">
                                            <?php 
                                            $row = sql("SELECT judul_buku FROM data_buku WHERE stats='up'");
                                            while($all = mysqli_fetch_array($row)):?>
                                            <?php if($all['judul_buku'] == "" || $all['judul_buku'] == NULL):?>
                                                <option value="kosong :3">Kosong, :3</option>
                                                <?php else:?>
                                                <option value="<?= $all['judul_buku']?>"><?= $all['judul_buku']?></option>
                                            <?php endif;?>
                                            <?php endwhile;?>
                                        </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="nt">No Telepon</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="nt" id="nt" required></td>
                                </tr>
                                <tr>
                                    <td><label for="pm">tanggal peminjaman</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="pm" id="pm" required></td>
                                </tr>
                                <tr>
                                    <td><label for="km">tanggal pengembalian</label></td>
                                    <td>:</td>
                                    <td><input type="text" placeholder="kosongkan jika ingin meminjam~" name="km" id="km"></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><input class="btn" type="submit" name="simpan_siswa" value="Simpan data siswa +"></td>
                                </tr>
                            </table>                   
                        </form>
                    </div>
                </main>               
            </div>
        <?php elseif($idpage == 'buku'):?>
            <div class="container">
                <main>
                    <h1>Tambah Data Buku</h1>
                    <div class="cota w">
                        <form action="assets/save.php" method="post">
                            <table class="for">
                                <tr>
                                    <td><label for="jbuku">Judul Buku</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="jbuku" id="jbuku" required></td>
                                </tr>
                                <tr>
                                    <td><label for="kb">Kategori buku</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="kb" id="kb" required></td>
                                </tr>
                                <tr>
                                    <td><label for="st">Stok</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="st" id="st" placeholder="kosongkan jika tidak ada~" ></td>
                                </tr>
                                <tr>
                                    <td><label for="ps">Penulis</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="ps" id="ps" required></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><input class="btn" type="submit" name="simpan_buku" value="Simpan data buku +"> </td>
                                </tr>
                            </table>                   
                        </form>
                    </div>
                </main>
            </div>
        <?php else:?>
            <main>
                <h1>ERR: 404 PAGE NOT FOUND, :3</h1>
            </main>
        <?php endif;?>
    </div>
</body>
</html>