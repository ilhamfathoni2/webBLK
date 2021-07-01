<?php 
    
    session_start();
    include 'koneksi.php';
    include 'function.php';

    // ==== Ambil data sub jurusan =====
    $tampilJurusan = "SELECT * FROM programpelatihan";
    $hasil2 = mysqli_query($kon, $tampilJurusan);
    $kejurusan = [];
    while( $jurusan = mysqli_fetch_assoc($hasil2) ){
        $kejuruan[] = $jurusan;
    }

    if(isset($_POST["submit"])){

    // var_dump($_POST["subJurusan"]);
    // die;
    $subJurusan = htmlspecialchars($_POST["subJurusan"]);
    $nik = htmlspecialchars($_POST["NIK"]);
    $nama = htmlspecialchars($_POST["nama"]);
    $noTlp = htmlspecialchars($_POST["no_tlp"]);
    $pass = htmlspecialchars(md5($_POST["password"]));
    $id_user = htmlspecialchars($_POST["id_user"]);

    // $foto = $_POST["foto"];
    $foto = upload("foto");

    $fotobaru = $foto[1];

    //======= Query input menginput data kedalam tabel userdata
    $sql = "INSERT INTO `userdata` (`NIK`, `nama_lengkap`, `subJurusan`, `no_tlp`, `foto`, `password`) 
    VALUES ($nik, '$nama', '$subJurusan', '$noTlp', '$fotobaru', '$pass')";
    
    
    //Mengeksekusi/menjalankan query diatas
    $hasil = mysqli_query($kon, $sql);
    move_uploaded_file($foto[0], "img/img_user/" . $foto[1]); // copy file yang di pilih beserta namanya ke server tempat penyimpanan gambar
    
    // var_dump($sql);
    // die;

    //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
    if ($hasil) {
        // echo '<script>window.location="Login.php"</script>';
        echo '<script>alert("Berhasil Mendaftarkan !")</script>';
        echo '<script>window.location="pesertadash.php"</script>';
    }
    else {
        echo '<script>alert("Gagal Mendaftar !")</script>';
        // echo '<script>window.location="Pendaftaran.php"</script>';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Tambah Peserta Baru</title>
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

    <div class="containerr">
	<div class="carddd">
    <form action="" method="POST" class="form" enctype="multipart/form-data">
    <h2 class="form_title">Tambah Data Peserta</h2>

        <div class="form_div">
        <select class="form_input" name="subJurusan">
            <option value="" disabled selected>Pilih Program</option>
            <?php foreach( $kejuruan as $program ) : ?>
            <option value="<?= $program['subJurusan']; ?>"><?= $program['subJurusan']; ?></option>
            <?php endforeach; ?>
        </select><br>
        </div>

        <input class="form_input" type="hidden" name="id_user" value="<?= $id_user; ?>" required />
        
        <div class="form_div">
            <input class="form_input"  placeholder=" " type="text" name="nama" required />
            <label for="" class="form_label">Nama Lengkap</label>
        </div>

        <div class="form_div">
            <input class="form_input"  placeholder=" " type="text" name="NIK" required />
            <label for="" class="form_label">Masukkan NIK</label>
        </div>

        <div class="form_div">
            <input class="form_input" placeholder=" " type="text" name="no_tlp" required />
            <label for="" class="form_label">Nomer Telphone</label>
        </div>

        <div class="form_div">
            <input placeholder=" " class="form_input" type="password" name="password" required />
            <label for="" class="form_label">Buat Password</label>
        </div>

        <div class="form_div">
            <input placeholder=" " class="form_input" type="file" name="foto" autocomplete="off" required />
            <label for="" class="form_label">Foto</label>
        </div>
                
            <input class="form_button" type="submit" name="submit" value="DAFTAR" />
        </form>
    </div>
    </div>
    </div><br><br><br>

</body>
</html>