<?php 
$conn = mysqli_connect('localhost', 'root', '', 'uji')or die('ERR sepertinya ada yang salah');

function query($syntx){
    global $conn;
    $result = mysqli_query($conn, $syntx);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] =$row;
    }
    return $rows;
}
function sql($syntx){
    global $conn;
    $result = mysqli_query($conn, $syntx);
    return $result;
}

function update($syntx){
    global $conn;
    mysqli_query($conn, $syntx);
    return mysqli_affected_rows($conn);
}

function delete($id, $tb){
    global $conn;
    mysqli_query($conn, "UPDATE $tb SET stats = 'drop' WHERE id  = '$id'");
    return mysqli_affected_rows($conn);
}
$fav_row = sql("SELECT judul_buku, COUNT(*) duplikat FROM data_siswa WHERE stats='up' GROUP BY judul_buku HAVING duplikat > 1 ORDER BY duplikat DESC ");
$si = query("SELECT * FROM data_siswa WHERE stats = 'up'");
$db = query("SELECT * FROM data_buku WHERE stats = 'up'");
$aro = query("SELECT * FROM data_siswa WHERE stats = 'drop'");
$bro = query("SELECT * FROM data_buku WHERE stats = 'drop'");
$a = count($aro);
$b = count($bro);

$tr = $a + $b;
?>