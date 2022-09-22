<?php 
include 'assets/data.php';
$idpage="home";

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
            <div class="ob">
            <div class="sr">input disini...</div>
            </div>
            <div class="layout">
                <div class="box sa">
                    <h3>Total Data</h3>
                    <div class="bigbox">
                        <div class="littlebox">
                            <p>Data Siswa</p>
                            <span><?= count($si)?></span>
                        </div>
                        <div class="littlebox">
                            <p>Data Buku</p>
                            <span><?= count($db)?></span>
                        </div>
                        <div class="littlebox">
                            <p>Data Sampah</p>
                            <span><?= $tr?></span>
                        </div>
                    </div>
                </div>
                <div class="box du">
                    <h3>Riwayat Data</h3>
                    <div class="bigbox">
                        <div class="littlebox">
                            <p>Data Siswa</p>
                            <span><?= count($aro)?></span>
                        </div>
                        <div class="littlebox">
                            <p>Data Buku</p>
                            <span><?= count($bro)?></span>
                        </div>
                        <div class="littlebox">
                            <p>Data Sampah</p>
                            <span><?= $tr?></span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h3>Buku Yang Diminati </h3>
                    <div class="littlebox-card">
                        <a href="ass"></a>
                        <?php
                        while($fav1 = mysqli_fetch_array($fav_row)):?>
                            <h5><?= $fav1['judul_buku']?></h5>
                            <?php $fav_stk_row = sql("SELECT stok FROM data_buku WHERE judul_buku = '$fav1[judul_buku]' AND stats='up'"); 
                            while($fav_stk = mysqli_fetch_array($fav_stk_row)):?>
                                <span><?= $fav_stk['stok']; if($fav_stk['stok'] !== "Kosong"){ echo ' tersisa~';};?></span>
                            <?php endwhile;?>
                        <?php endwhile;?>
                        <script>
                            document.write('diperbarui pada '+ new Date().getFullYear());
                        </script>
                    </div>
                </div>
                <div class="jumbo">
                    <div class="side">
                        <h3>Daftar Keanggotaan</h3>
                        <p>mendapatkan lencana, fitur, dan kartu keanggotaan, serta lainnya<span class="material-symbols-outlined">done</span></p>
                        <p>akses login, data pribadi, simpan histori, print, dan booking buku<span class="material-symbols-outlined">done</span></p>
                        <p>terhubung dengan komunitas, hobi yang sama, dapatkan teman<span class="material-symbols-outlined">done</span></p>
                        <a href="">login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>