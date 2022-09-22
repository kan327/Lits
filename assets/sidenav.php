<?php 
 if($idpage == "home"){
    $home = "mark";
 }elseif($idpage == "siswa"){
    $siswa = "mark";
 }elseif($idpage == "prod"){
    $prod = 'mark';
 }elseif($idpage == "trash"){
    $trash = 'mark';
 }elseif($idpage == null){
    $home = '';
    $siswa = '';
    $prod = '';
 }
?>
<nav>
    <div class="wr">
        <div class="h">
            <div class="or">
                <div class="rd"></div>
            </div>
            <h1>Lits</h1>            
        </div>
        <div class="con">
            <a href="index.php" id="<?=$home?>"><span class="material-symbols-outlined">home</span>Home</a>
            <a href="data_tabel.php?idpage=siswa" id="<?=$siswa?>"><span class="material-symbols-outlined">people</span>Data Siswa</a>
            <a href="data_tabel.php?idpage=buku" id="<?=$prod?>"><span class="material-symbols-outlined">book</span>Data Buku</a>
            <a href="trash.php" id="<?=$trash?>"><span class="material-symbols-outlined">folder</span>RecycleBin</a>
        </div>
    </div>
</nav>   