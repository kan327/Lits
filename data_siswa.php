<?php 
include 'assets/data.php';
$id="home";
$si = query("SELECT * FROM data_siswa")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS STYLE -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- MATERIAL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="wraper-do">
        <?php include 'assets/sidenav.php';?>
        <main>
            <h1>Data Siswa</h1> 
            <h4 id="w">Total riwayat Peminjaman : <?= count($si)?></h4>
            <div class="gr">
                <a href="create.php" class="btn">
                    <span class="material-symbols-outlined">add_circle</span>
                    <h4>Baru</h4>
                </a>
                <div class="sr">imput disini...</div>
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
                            $val = "SELECT * FROM data_siswa WHERE stats = 'up'";
                            $query = mysqli_query($conn, $val);
                            while($all = mysqli_fetch_array($query)) : ?>
                            <?php if($all['pinjam'] == 'dipinjam'): ?>
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
                                            <a class="btns u " href="update.php?id=<?= $all['id']?>">Update</a>
                                            <a class="btns d " href="delete.php?id=<?= $all['id']?>">Delete</a>                                            
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
</body>
</html>