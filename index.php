<?php
    session_start();
    include 'koneksi.php';

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
    <title>Login</title>
    
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
    </nav><br>


    <div class="container">
        <img class="Gambar-Utama" src="BLK-Sby.jpg" />
        <div id="content">
            <h1 class="H1-Page1">Menjadi Tenaga Kerja<br> yang Kompeten dan Profesional</h1>
            <h1 class="H1-Tipis">Melalui Pelatihan Berbasis<br>Kompetensi (PBK)</h1>
            <br><br><br>
            <a class="BTN-Pendaftaran" href="Pendaftaran.php">Pendaftaran Pelatihan</a>
            <br><br><br><br>

            <?php if( isset($_SESSION['status']) ) : ?>
            <?php if( $_SESSION['status'] == 0 ) : ?>
                <a class="BTN_bukti" href="cetak.php?id_user=<?php echo $data->id_user ?>">Cetak Bukti Pendaftaran</a>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

    <span >
    <div class="container-2" id="Profil">
        <div id="content">
            <h2>Profil Balai Latihan Kerja Surabaya</h2><br>
            <p>Balai Latihan Kerja (BLK) Surabaya dibangun pada tahun 1979 
                dengan dana bantuan dari Bank Dunia (World Bank) dan diresmikan 
                oleh Menteri Tenaga Kerja Republik Indonesia (Dr. Harun Zein) 
                pada 19 Maret 1980 dengan dengan luas area keseluruhan 48.470 m2.<br><br>

                Melalui berbagai pelatihan berbasis kompetensi yang telah 
                diselenggarakan selama lebih dari 30 tahun, BLK Surabaya telah 
                mencetak ribuan tenaga kerja terampil dan ahli yang bekerja di 
                perusahaan-perusahaan nasional maupun multinasional.<br><br>
                
                Pada masa sekarang dan mendatang, kualitas sumber daya manusia menjadi
                 sangat penting mengingat persaingan tenaga kerja secara global yang 
                 semakin ketat. Kontribusi BLK Surabaya sebagai lembaga pelatihan milik 
                 pemerintah dalam menghadapi tantangan saat ini adalah dengan meningkatkan 
                 daya saing tenaga kerja Indonesia melalui pelatihan berbasis kompetensi, 
                 uji kompetensi serta sertifikasi keahlian. Untuk menyelenggarakan uji 
                 kompetensi, BLK Surabaya bekerja sama dengan Lembaga Sertifikasi Profesi 
                 (LSP), Badan Nasional Sertifikasi Profesi (BNSP).<br><br>
                
                Untuk membantu penyerapan lulusan oleh dunia kerja, BLK Surabaya menyediakan 
                layanan Kios 3in1, yaitu bentuk pelayanan untuk mengakses lowongan pekerjaan 
                secara online dan Bursa Kerja Khusus (BKK) yang dapat dimanfaatkan oleh lulusan 
                maupun perusahaan yang membutuhkan tenaga kerja. Pada tanggal 24 Desember 2010 
                lembaga pelatihan ini berhasil mendapatkan sertifikasi ISO 9001 : 2008 yang 
                merupakan bukti pengakuan keberhasilan di bidang Manajemen Mutu.</p>
        </div>
        <img class="Gambar-kedua" src="BLK-Sby.jpg" />
    </div>
    </span>

    <footer>
        <p class="at">UPT BLK Surabaya</p>
    </footer>

</body>
</html>