<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
    </header>


<section class="cards-wrapper">
<?php $ambil = $kon->query("SELECT * FROM programpelatihan"); ?>
<?php while($peritem = $ambil->fetch_assoc()) { ?>
  <div class="card-grid-space">
    <!-- <div class="num">01</div> -->
    <!-- style="--bg-img: url(https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/html-syntax/cover.jpg)"> -->
    <a class="card" href="#">
      <div>
      <!-- <img src="<?= $peritem["gambar"]; ?>"> -->
        <h2><?= $peritem["subJurusan"]; ?></h2>
        <p><?= $peritem["deskripsi"]; ?></p>
        <div class="date"><?= $peritem["waktuPelatihan"]; ?></div>
        <div class="tags">
          <div class="tag"><?= $peritem["Kejuruan"]; ?></div>
        </div>
      </div>
    </a>
  </div>
  <?php } ?>

  <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - UPT BLK Surabaya.</small>
        </div>
    </footer>

</body>
</html>
