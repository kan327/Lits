<?php 
include 'data.php';

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
    $ck = sql("INSERT INTO data_siswa VALUES ('','$ns','$jb','$nt','$pm','$km','up')");
    if($ck){
        header('Location: ../data_tabel.php?idpage=siswa');
    }else{
        header('Location: save.php?status=err');
    }
}elseif(isset($_POST['simpan_buku'])){
    $jbuku = $_POST['jbuku'];
    $kb = $_POST['kb'];
    if($_POST['st'] == ""){
        $st = "Kosong";
    }else{
        $st = $_POST['st'];
    }
    $ps = $_POST['ps'];

    $ck = sql("INSERT INTO data_buku VALUES ('','$jbuku','$kb','$st','$ps','up')");
    if($ck){
        header('Location: ../data_tabel.php?idpage=buku');
    }else{
        header('Location: save.php?status=err');
    }
}
?>