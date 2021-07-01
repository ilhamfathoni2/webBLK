<?php 

    include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peserta</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <header>
        <div class="container">
        <h1><a href="dashboard.php">UPT BLK Surabaya</a></h1>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="programdash.php">Program Pelatihan</a></li>
            <li><a href="pesertadash.php">Peserta</a></li>
            <li><a href="keluar.php">Logout</a></li>
        </ul>
        </div>
    </header><br><br>

    <div class="container">
    <form action="" method="GET">
    <input type="text" class="btn_cari" name="cari" placeholder="Search Name..">
    <input type="submit" class="BtnCari" name="cari1" value="Cari">
    </form>
    </div>

	<div class="container">
    <button class="Btn_tambah"><a href="tambah_peserta.php">Tambah Peserta Baru</a></button>
    </div><br><br>

    <form action="" method="POST">
    <table class="container">
        <tr>
            <th>No.</th>
            <th>NIK</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>No.HP</th>
            <th>Foto</th>
            <th>Status</th>
            <th colspan="2">Action</th>
        </tr>
        <?php 
        // ==== Ambil data User =====
        $tampilUser = "SELECT * FROM userdata";
        $hasil = mysqli_query($kon, $tampilUser);

        if(isset($_GET['cari1'])){
            $tampilUser = "SELECT * FROM userdata WHERE nama_lengkap LIKE '%".$_GET['cari']."%'";
            $hasil = mysqli_query($kon, $tampilUser);
        }

        while( $user = mysqli_fetch_assoc($hasil) ){
            $users[] = $user;
        }?>
        <?php $i=1;
        foreach( $users as $dataUser ) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $dataUser['NIK']; ?></td>
            <td><?= $dataUser['id_user']; ?></td>
            <td><?= $dataUser['nama_lengkap']; ?></td>
            <td><?= $dataUser['subJurusan']; ?></td>
            <td><?= $dataUser['no_tlp']; ?></td>
            <td><img src="img/img_user/<?= $dataUser['foto']; ?>"></td>
            <td><?= $dataUser['status']; ?></td>
            <td><button class="Bdelete" type="button" onclick="return confirm('Yakin Mbok Hapus ?');"><a href="hapusPeserta.php?id_user=<?php echo $dataUser['id_user']; ?>">Delete</button></a></td>
            <td><button class="Btnupdate" type="button"><a href="update.php?id_user=<?php echo $dataUser['id_user']; ?>">Update</button></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </form><br><br><br>
   

    <!-- <footer>
        <div class="containerr">
            <small>Copyright &copy; 2021 - UPT BLK Surabaya.</small>
        </div>
    </footer> -->

</body>
</html>