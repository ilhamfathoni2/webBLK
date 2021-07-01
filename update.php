<?php

    session_start();
    include 'koneksi.php';
    include 'prosesUpdate.php';

    $id_user = $_GET['id_user'];

    $ambildata = "SELECT * FROM userdata WHERE id_user = $id_user";
    $ambildata = mysqli_query($kon, $ambildata);
    $dataUser = mysqli_fetch_assoc($ambildata);

    // ==== Ambil data sub jurusan =====
    $tampilJurusan = "SELECT * FROM programpelatihan";
    $hasil2 = mysqli_query($kon, $tampilJurusan);
    $kejurusan = [];
    while( $jurusan = mysqli_fetch_assoc($hasil2) ){
        $kejuruan[] = $jurusan;
    }

    if($_SESSION['status_login'] != true){
        echo '<script>window.location="Login.php"</script>';
    }

    // $query = mysqli_query($kon, "SELECT * FROM userdata WHERE id_user=$id_user");
    // $data = mysqli_fetch_object($query);
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
    </header><br>

    <div class="containerr">
	<div class="carddd">
    <form action="" method="POST" class="form" enctype="multipart/form-data">
    <h2 class="form_title">Update Data Peserta</h2>

    <div class="form_div">
		<input class="form_input" name="NIK" type="text" placeholder=" " value="<?= $dataUser['NIK']; ?>">
		<label for="" class="form_label">NIK</label>
	</div>

    <div class="form_div">
		<input class="form_input" name="nama" type="text"  placeholder=" " value="<?= $dataUser['nama_lengkap']; ?>">
		<label for="" class="form_label">Nama</label>
	</div>

    <div class="form_div">
    <select class="form_input" name="subJurusan">
        <option value="<?= $dataUser['subJurusan']; ?>"><?= $dataUser['subJurusan']; ?></option>
        <?php foreach( $kejuruan as $program ) : ?>
        <option value="<?= $program['subJurusan']; ?>"><?= $program['subJurusan']; ?></option>
        <?php endforeach; ?>
    </select><br>
    </div>

    <div class="form_div">
		<input class="form_input" name="noHp" type="text"  placeholder=" " value="<?= $dataUser['no_tlp']; ?>">
		<label for="" class="form_label">No.HP</label>
	</div>

    <div class="form_div">
        <img src="img/img_user/<?= $dataUser['foto']; ?>">
    </div><br>

    <div class="form_div">
        <input placeholder="foto" class="form_input" type="file" name="foto" autocomplete="off" required>
        <label for="" class="form_label">Foto Baru</label>
    </div>

    <input type="submit" name="update" class="form_button" value="Update"></input>

    </form><br>

    </body>
</html>