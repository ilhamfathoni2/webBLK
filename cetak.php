<?php
    session_start();
    include 'koneksi.php';

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

    $query = mysqli_query($kon, "SELECT * FROM userdata WHERE id_user='".$_SESSION['id']."'");
    $data = mysqli_fetch_object($query);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ProfilBLKSBY.css">
    <title>Cetak Bukti Pendaftaran</title>
    
</head>
<body>
    <nav class='navbar'>
    <ul class='topnav'>
        <li class='UPT-BLK'><a href='index.php'>UPT BLK Surabaya</a></li>
            <li><a href='index.php'> Home</a>
            <li><a href='#Profil'>Profil</a></li>
            <li><a href='ProgramPelatihan.php'>Program Pelatihan</a></li>
            <li><a href="Kontak.php">Hubungi Kami</a></li>
            <li><a href='Pendaftaran.php'>Pendaftaran</a></li>
            <?php if( isset($_SESSION['status']) ) : ?>
            <?php if( $_SESSION['status'] == 1 ) : ?>
                <li><a href='dashboard.php'>Admin</a></li>
            <?php endif; ?>
            <?php endif; ?>
            <?php if( !isset($_SESSION['status_login']) ) : ?>
            <li class="Topnav-Login" style="float: right;"><a href='Login.php'>Login</a></li>
            <?php else : ?>
            <li class="Topnav-Login" style="float: right;"><a href='Logout.php'>Logout</a></li>
            <?php endif; ?>
        </ul>
        <div class='bottomnav1'>
            <div class='dropdown1'>
                <a class='dropbtn1' href='#' style='font-size:20px; font-weight:700'><img src="BTN-Menu.svg"/></a>
                <div class='dropdown-content1' style='font-size:20px;'>
                  <a href='index.php' style='font-size:20px;'>Profil</a>

                  <a href='ProgramPelatihan.php' style='font-size:20px;'>Program Pelatihan</a>
                  <a href='Pendaftaran.php' style='font-size:20px;'>Pendaftaran</a>
                  <a href="Kontak.php" style='font-size:20px;'>Hubungi Kami</a>
                  <a href='Login.php' style='font-size:20px;'>Login</a>
                </div>
              </div>
        </div>
    </nav><br><br><br><br><br><br>

    <center>
    <div class="containerr">
	<div class="carddd">
    <div class="form">
    <img src="LogoTransparan_small.png"><br>
        <h2>DATA PENDAFTAR</h2><br>
        <h4>UPT BLK Surabaya</h4><br>
    <h2 class="form_title">Data Pendaftar</h2>
        
        <div class="form_div">
            <input class="form_input"  placeholder=" " type="text" disabled value="<?= $dataUser['nama_lengkap']; ?>" />
            <label for="" class="form_label">Nama Lengkap</label>
        </div>

        <div class="form_div">
            <input class="form_input"  placeholder=" " type="text" disabled value="<?= $dataUser['NIK']; ?>" />
            <label for="" class="form_label">NIK</label>
        </div>

        <div class="form_div">
            <input class="form_input" placeholder=" " type="text" disabled value="<?= $dataUser['no_tlp']; ?>" />
            <label for="" class="form_label">Nomer Telphone</label>
        </div>

        <div class="form_div">
            <input class="form_input" placeholder=" " type="text" disabled value="<?= $dataUser['subJurusan']; ?>" />
            <label for="" class="form_label">Jurusan</label>
        </div>

        <div class="form_div">
        <img class="fotouser" src="img/img_user/<?= $dataUser['foto']; ?>">
        </div><br>
    <h4 class="isi">
    Informasi lebih lanjut mengenai seleksi akan diumumkan melalui instagram UPT BLK Surabaya</h4>
    </div>
    </div>
    </div>

    </center><br><br><br>

    <script>
        window.print();
    </script>

</body>
</html>