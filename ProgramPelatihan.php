<?php
    session_start();
    include 'koneksi.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="TampilanProgram.css" rel="stylesheet">
    <title>Daftar Program</title>
    <style>
* {
    margin: 0;
    box-sizing: border-box;
    font-family: "Raleway", sans-serif;
  }

body {
  margin: 0;
  min-height: 100vh;
  font-family: 'Open Sans';
  background: #fafafa;
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
/* .dropdown1:hover .dropbtn1 {
    background-color: #3094db;
    color: rgb(255, 255, 255);
} */
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
    width:100%;
}

/* Cards */
@import url('https://fonts.googleapis.com/css?family=Heebo:400,700|Open+Sans:400,700');

:root {
  --color: #3c3163;
  --transition-time: 0.5s;
}

* {
  box-sizing: border-box;
}

a {
  color: inherit;
}

.cards-wrapper {
  display: grid;
  justify-content: center;
  align-items: center;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 3rem;
  padding: 3rem;
  margin: 0 auto;
  width: max-content;
}

.card {
  font-family: 'Heebo';
  --bg-filter-opacity: 0.5;
  background-image: linear-gradient(rgba(0,0,0,var(--bg-filter-opacity)),rgba(0,0,0,var(--bg-filter-opacity))), var(--bg-img);
  height: 15em;
  width: 15em;
  font-size: 1.5em;
  color: white;
  border-radius: 1em;
  padding: 1em;
  /*margin: 2em;*/
  display: flex;
  align-items: flex-end;
  background-size: cover;
  background-position: center;
  box-shadow: 0 0 5em -1em black;
  transition: all, var(--transition-time);
  position: relative;
  overflow: hidden;
  border: 10px solid #ccc;
  text-decoration: none;
}

.card:hover {
  transform: rotate(0);
}

.card h1 {
  margin: 0;
  font-size: 1.5em;
  line-height: 1.2em;
}

.card p {
  font-size: 0.75em;
  font-family: 'Open Sans';
  margin-top: 0.5em;
  line-height: 2em;
}

.card .tags {
  display: flex;
}

.card .tags .tag {
  font-size: 0.75em;
  background: rgba(255,255,255,0.5);
  border-radius: 0.3rem;
  padding: 0 0.5em;
  margin-right: 0.5em;
  line-height: 1.5em;
  transition: all, var(--transition-time);
}

.card:hover .tags .tag {
  background: var(--color);
  color: white;
}

.card .date {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 0.75em;
  padding: 1em;
  line-height: 1em;
  opacity: .8;
}

.card:before, .card:after {
  content: '';
  transform: scale(0);
  transform-origin: top left;
  border-radius: 50%;
  position: absolute;
  left: -50%;
  top: -50%;
  z-index: -5;
  transition: all, var(--transition-time);
  transition-timing-function: ease-in-out;
}

.card:before {
  background: #ddd;
  width: 250%;
  height: 250%;
}

.card:after {
  background: white;
  width: 200%;
  height: 200%;
}

.card:hover {
  color: var(--color);
}

.card:hover:before, .card:hover:after {
  transform: scale(1);
}

.card-grid-space .num {
  font-size: 3em;
  margin-bottom: 1.2rem;
  margin-left: 1rem;
}

.info {
  font-size: 1.2em;
  display: flex;
  padding: 1em 3em;
  height: 3em;
}

.info img {
  height: 3em;
  margin-right: 0.5em;
}

.info h1 {
  font-size: 1em;
  font-weight: normal;
}

/* MEDIA QUERIES */
@media screen and (max-width: 1285px) {
  .cards-wrapper {
    grid-template-columns: 1fr 1fr;
  }
}

@media screen and (max-width: 900px) {
  .cards-wrapper {
    grid-template-columns: 1fr;
  }
  .info {
    justify-content: center;
  }
  .card-grid-space .num {
    /margin-left: 0;
    /text-align: center;
  }
}

@media screen and (max-width: 500px) {
  .cards-wrapper {
    padding: 4rem 2rem;
  }
  .card {
    max-width: calc(100vw - 4rem);
  }
}

@media screen and (max-width: 450px) {
  .info {
    display: block;
    text-align: center;
  }
  .info h1 {
    margin: 0;
  }
}

@media screen and (max-width:880px) {
    .topnav{
        display:none;
    }
    .bottomnav1{
        display:block;
    }
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
                  <!-- <a href='#' style='font-size:20px;'>Visi Misi</a> -->
                  <a href='ProgramPelatihan.php' style='font-size:20px;'>Program Pelatihan</a>
                  <a href='Kontak.php' style='font-size:20px;'>Hubungi Kami</a>
                  <a href='Pendaftaran.php' style='font-size:20px;'>Pendaftaran</a>
                  <a href='Login.php'>Login</a></li>
                </div>
              </div>
        </div>
    </nav>


<section class="cards-wrapper">
<?php $ambil = $kon->query("SELECT * FROM programpelatihan"); ?>
<?php while($peritem = $ambil->fetch_assoc()) { ?>
  <div class="card-grid-space">
    <!-- <div class="num">01</div> -->
    <!-- style="--bg-img: url(https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/html-syntax/cover.jpg)"> -->
    <a class="card" href="#"
        style="--bg-img: url(https://images1-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&resize_w=1500&url=https://codetheweb.blog/assets/img/posts/html-syntax/cover.jpg)">
      <div>
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

</body>
</html>