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
        echo '<script>window.location="Login.php"</script>';
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
    <title>REGISTER</title>
    <style>
* {
    margin: 0;
    box-sizing: border-box;
    font-family: "Raleway", sans-serif;
  }

body {
    background: #fafafa;
    /* background-color: #f2f2f2; */
    /* background-image: url(bg01.svg); */
}
.navbar{
    float:right;
    width:100%;
    padding: 8px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.116);
}
.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #ffffff;
    /* height:50px */
}
.topnav li {
    float: left;
    /* height: 50px; */
}
.topnav li a {
    display: inline-block;
    color: #333;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
}
/* .topnav li:hover {
    background: #eaeaea;
    position: relative;
} */
.UPT-BLK {
    font-weight: bold;
    color: #333;
    margin-right: 10%;
    margin-left: 3%;
}
.Topnav-Login {
    font-weight: bold;
    margin-right: 4%;
}
.topnav li:hover a {
    color:#3094db;
}
.topnav ul {
    left: -9999px;
    list-style-type: none;
    position: absolute;
    top: -9999px;
}
.topnav li:hover ul {
    background-color: #eaeaea;
    left: 0px;
    padding: 0px;
    top: 50px;
    width: 160px;
}
.topnav li:hover ul li {
    border: none;
    height: 40px;
}
.topnav li:hover ul li a {
    color: #3094db;
    display: block;
    text-align: left !important;
    font-size: 20px;
    height: 40px;
    line-height: 40px;
    padding: 0px;
    text-decoration: none;
    text-indent: 5px;
    width: 160px;
    padding: 3px;}
.topnav li:hover ul li a:hover {
    background: #3094db;
    color: #fff;
    height: 40px;
    padding: 3px;
}
.bottomnav1 {
    display:none;
    list-style-type: none;
    width:50px;
    margin-top:0px;
    padding: 0;
    overflow: hidden;
    z-index:9999;
    margin-left:0px;
    /* background:#f1f1f1; */
    border-radius: 4px 4px 0 0;
}
a.dropbtn1 {
    text-decoration: none;
    /* background: #3094db; */
    width:50px;
    display: inline-block;
    /* color: rgb(255, 255, 255); */
    text-align: center;
    padding: 10px;
}
.dropdown1 {
    display: inline-block;
}
.dropdown-content1 {
    z-index:9999;
    display: none;
    position: absolute;
    background-color: #ffffff;
    border-radius: 0 4px;
    margin-top:0px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.185);
}
.dropdown-content1 a {
    font-size:20px;
    color: #555;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content1 a:hover {
    background-color:  #3094db;
    color:rgb(255, 255, 255);
}
.dropdown1:hover .dropdown-content1 {
    display: block;
    width:100%
}
@media screen and (max-width:880px) {
    .topnav{
        display:none;
    }
    .bottomnav1{
        display:block;
    }
}

#card {
    background: #fbfbfb;
    border-radius: 8px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.226);
    height: 600px;
    margin: 9rem auto 8.1rem auto;
    width: 60%;
}
.pilihan{
    width: 90%;
    height: 40px;
    background-color: white;
    border: solid 1px #3232ca;
    border-radius: 5px;
    box-shadow: 0px 1px 10px #f1f1f1;
}
#card-content {
    padding: 12px 44px;
}
#card-title {
    font-family: "Raleway Thin", sans-serif;
    letter-spacing: 4px;
    padding-bottom: 23px;
    padding-top: 13px;
    text-align: center;
}
.underline-title {
    background: linear-gradient(to right, #3232ca, #1cb5e0);
    height: 2px;
    margin: 5px auto 0 auto;
    width: 89px;
}
a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
    padding-left: 50px;
}
.form-content {
    width: 90%;
    height: 40px;
    background-color: white;
    border: solid 1px #3232ca;
    border-radius: 5px;
    box-shadow: 0px 1px 10px #f1f1f1;
}
.upload{
    width: 90%;
    height: 40px;
    
}
#signup {
    color: #1cb5e0;
    font-family: "Raleway", sans-serif;
    font-size: 10pt;
    margin-left: 40px;
    margin-top: 16px;
}
#submit-btn {
    background: linear-gradient(to right, #3232ca, #1cb5e0);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #1cb5e0;
    cursor: pointer;
    color: white;
    font-family: "Raleway SemiBold", sans-serif;
    height: 42.3px;
    margin-left: 10px;
    margin-top: 45px;
    transition: 0.25s;
    width: 153px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #1cb5e0;
}

    </style>
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
                  <a href="Kontak.php" style='font-size:20px;'>Hubungi Kami</a>
                  <a href='Pendaftaran.php' style='font-size:20px;'>Pendaftaran</a>
                  <a href='Login.php' style='font-size:20px;'>Login</a>
                </div>
              </div>
        </div>
    </nav><br>

    <div id="card">
        <div id="card-content">
            <div id="card-title">
              <h2>Pendaftaran</h2>
              <div class="underline-title"></div>
            </div>
        </div>
        <form method="POST" class="form" action="" enctype="multipart/form-data">
            
            <select class="pilihan" name="subJurusan">
                <option value="" disabled selected>Pilih Program</option>
                    <?php foreach( $kejuruan as $program ) : ?>
                <option value="<?= $program['subJurusan']; ?>"><?= $program['subJurusan']; ?></option>
                    <?php endforeach; ?>
            </select><br>

                <input class="form-content" type="hidden" name="id_user" value="<?= $id_user; ?>" required />

                <input class="form-content"  placeholder="Nama Lengkap" type="text" name="nama" required />

                <div class="form-border"></div><br>
                <input class="form-content"  placeholder="Masukkan NIK" type="text" name="NIK" required />

                <div class="form-border"></div><br>
                <input class="form-content" placeholder="Nomer Telphone" type="text" name="no_tlp" required />

                <div class="form-border"></div><br>
                <input placeholder="Buat Password" class="form-content" type="password" name="password" required />

                <div class="form-border"></div><br>
                <input placeholder="foto" class="upload" type="file" name="foto" autocomplete="off" required />
                
                <input id="submit-btn" type="submit" name="submit" value="DAFTAR" />
                <a href="login.php" id="signup">Have account ?</a>
        </form>
    </div>

</body>
</html>