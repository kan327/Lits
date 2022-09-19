<?php 
 if($id == "home"){
    $home = "mark";
    $prod = '';
 }elseif($id == "buku"){
    $home = '';
    $prod = "mark";
 }elseif($id == null){
    $home = '';
    $prod = '';
 }
 else{
    echo"<script>alert('typo itu!!');</script>";
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
            <a href="data_siswa.php" id="<?=$home?>">Data Siswa</a>
            <a href="data_buku.php" id="<?=$prod?>">Data Buku</a>
        </div>
    </div>
</nav>   