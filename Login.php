<?php
    session_start();
    include 'koneksi.php'
    // $id_user = $_GET['id_user'];

    // $ambildata = "SELECT * FROM userdata WHERE id_user = $id_user";
    // $ambildata = mysqli_query($kon, $ambildata);
    // $dataUser = mysqli_fetch_assoc($ambildata);
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

    <div class="l-form">
        <form action="LoginAction.php" method="POST" class="form">
            <h1 class="form_title">Login</h1>

            <div class="form_div">
                <input type="text" class="form_input" placeholder=" " name="NIK" required>
                <label for="" class="form_label">NIK</label>
            </div>

            <div class="form_div">
                <input name="password" type="password" class="form_input" placeholder=" " required>
                <label for="" class="form_label">Password</label>
            </div>
            
            <input type="submit" class="form_button" name="login" value="Login"><a href="index.php?id_user=<?php echo $dataUser['id_user']; ?>"></a></input>
        </form>
    </div>


    
</body>
</html>