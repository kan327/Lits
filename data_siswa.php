<?php 
include 'assets/data.php';
$idpage="siswa";

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
        <div class="container">
            <main>
                <h1>Data Siswa</h1> 
                <div class="gr">
                    <a href="create.php?idpage=siswa" class="btn">
                        <span class="material-symbols-outlined">add_circle</span>
                        <h4>Baru</h4>
                    </a>
                    <form action="" class="search" method="get">
                        <input class="sr" type="text" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];};?>"><input type="submit" class="sear" value="cari">
                    </form>
                </div>
                <div class="wrap">
                    <div class="cota">
                        <table cellspacing=0 class="cus">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama siswa</th>
                                    <th>Judul buku</th>
                                    <th>No telepon</th>
                                    <th>Pinjam</th>
                                    <th>Kembali</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(isset($_GET['search'])){
                                    $rs = sql("SELECT * FROM data_siswa WHERE stats='up' AND id LIKE '%$_GET[search]%' OR stats='up' AND nama_siswa LIKE '%$_GET[search]%' OR stats='up' AND judul_buku LIKE '%$_GET[search]%' OR stats='up' AND no_tlp LIKE '%$_GET[search]%' OR stats='up' AND pinjam LIKE '%$_GET[search]%' OR stats='up' AND kembali LIKE '%$_GET[search]%'");
                                }else{
                                    $rs = sql("SELECT * FROM data_siswa WHERE stats='up' ORDER BY id DESC");
                                }
                                while ($all = mysqli_fetch_array($rs)) :?>
                                
                                <?php if($all["kembali"] == "Dipinjam"): ?>
                                    <tr class="warn">
                                <?php else :?>
                                    <tr>
                                <?php endif;?>
                                        <td><?= $all['id'] ?></td>
                                        <td><?= $all['nama_siswa'] ?></td>
                                        <td><?= $all['judul_buku'] ?></td>
                                        <td><?= $all['no_tlp'] ?></td>
                                        <td><?= $all['pinjam'] ?></td>
                                        <td><?= $all['kembali'] ?></td>
                                        <td>
                                            <div class="wraper">
                                                <a class="btns u " href="update.php?id=<?= $all['id']?>&idpage=data_siswa">Update</a>
                                                <a class="btns d " href="assets/delete.php?id=<?= $all['id']?>&idpage=data_siswa">Delete</a>                                            
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                        <h2>End (,,> - <,,)</h2> 
                    </div>
                </div>
            </main> 
        </div>           
    </div>
</body>
</html>