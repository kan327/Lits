<?php 
include "assets/data.php";
$idpage ='';
$id = $_GET['id'];
$idpage = $_GET['idpage'];
$row = sql("SELECT * FROM $idpage WHERE id='$id'");
$ck = mysqli_fetch_array($row);
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
        <?php include 'assets/sidenav.php';?>
        <?php if($idpage == 'data_siswa'):?>
            <div class="container">
                <main>
                    <h1>Update Data Siswa</h1>
                    <div class="cota w">
                        <form action="" method="post">
                            <table class="for">
                                <tr>
                                    <td><label for="ns">Nama Siswa</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="ns" id="ns" value="<?= $ck['nama_siswa']?>" required></td>
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
                                    <td><input type="text" name="nt" id="nt" value="<?= $ck['no_tlp']?>" required></td>
                                </tr>
                                <tr>
                                    <td><label for="pm">tanggal peminjaman</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="pm" id="pm" value="<?= $ck['pinjam']?>" required></td>
                                </tr>
                                <tr>
                                    <td><label for="km">tanggal pengembalian</label></td>
                                    <td>:</td>
                                    <td><input type="text" placeholder="kosongkan jika ingin meminjam~" value="<?= $ck['kembali']?>" name="km" id="km"></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><input class="btn" type="submit" name="simpan_siswa" value="Simpan data siswa +"> </td>
                                </tr>
                            </table>                   
                        </form>
                        <?php 
                        if(isset($_POST['simpan_siswa'])){
                            $ns = $_POST['ns'];
                            $jb = $_POST['jb'];
                            $nt = $_POST['nt'];
                            $pm = $_POST['pm'];
                            if($_POST['km'] == ""){
                                $km = "Dipinjam";
                            }else{
                                $km = $_POST['km'];
                            }
                            if(update("UPDATE data_siswa SET nama_siswa='$ns', judul_buku='$jb', no_tlp='$nt', pinjam='$pm', kembali='$km'  WHERE id='$id'")>0){
                                echo"
                                <script> 
                                alert('data berhasil ditambahkan');
                                document.location.href = 'data_tabel.php?idpage=siswa';
                                </script>";
                            }
                        }
                        ?>
                    </div>
                </main>
            </div>
        <?php elseif($idpage == 'data_buku') :?>
            <div class="container">
                <main>
                    <h1>Update Data Buku</h1>
                    <div class="cota w">
                        <form action="" method="post">
                            <table class="for">
                                <tr>
                                    <td><label for="jbuku">Judul Buku</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="jbuku" id="jbuku" value="<?= $ck['judul_buku']?>" required></td>
                                </tr>
                                <tr>
                                    <td><label for="kb">Kategori buku</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="kb" id="kb" value="<?= $ck['kategori_buku']?>" required></td>
                                </tr>
                                <tr>
                                    <td><label for="sk">Stok</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="sk" id="sk" placeholder="kosongkan jika tidak ada~" value="<?= $ck['stok']?>"></td>
                                </tr>
                                <tr>
                                    <td><label for="ps">Penulis</label></td>
                                    <td>:</td>
                                    <td><input type="text" name="ps" id="ps" value="<?= $ck['penulis']?>" required></td>
                                </tr>
                                <tr>
                                    <td colspan="3"><input class="btn" type="submit" name="simpan_buku" value="Simpan data buku +"> </td>
                                </tr>
                            </table>                   
                        </form>
                        <?php 
                        if(isset($_POST['simpan_buku'])){
                            $jbuku = $_POST['jbuku'];
                            $kb = $_POST['kb'];
                            if($_POST['sk'] == ""){
                                $sk = 'Kosong';
                            }else{
                                $sk = $_POST['sk'];
                            }
                            $ps = $_POST['ps'];
                            if(update("UPDATE data_buku SET judul_buku='$jbuku', kategori_buku='$kb', stok='$sk', penulis='$ps' WHERE id='$id'")>0){
                                echo"
                                <script> 
                                alert('data berhasil ditambahkan');
                                document.location.href = 'data_tabel.php?idpage=buku';
                                </script>";
                            }
                        }
                        ?>
                    </div>
                </main>
            </div>
        <?php else:?>
            <div class="container">
                <main>
                    <h1>ERR: 404 PAGE NOT FOUND, :3</h1>
                </main>
            </div>
        <?php endif;?>
    </div>
</body>
</html>