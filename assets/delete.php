<?php 
include 'data.php';
$id = $_GET['id'];

if(delete($id, $_GET['idpage'])>0){
    if($_GET['idpage'] == "data_siswa"){
        header('Location: ../data_tabel.php?idpage=siswa');
    }elseif($_GET['idpage'] == "data_buku"){
        header('Location: ../data_tabel.php?idpage=buku');
    }
}else{
    echo"
    <script>
    alert('yah gagal :3');
    </script>
    ";
}
?>
