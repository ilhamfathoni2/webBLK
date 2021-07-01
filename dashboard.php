<?php
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="Login.php"</script>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPT BLK Surabaya</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <header>
        <div class="container">
        <h1><a href="dashboard.php">UPT BLK Surabaya</a></h1>
        <ul>
            <li><a href='dashboard.php'>Dashboard</a></li>
            <li><a href='profil.php'>Profil</a></li>
            <li><a href="programdash.php">Program Pelatihan</a></li>
            <li><a href="pesertadash.php">Peserta</a></li>
            <li><a href="keluar.php">Logout</a></li>
        </ul>
        </div>
    </header>

    <!-- conten -->
    <div class="section">
    <div class="container">
        <h3>Dashboard</h3>
        <div class="box">
            <h4>Selamat Datang <?php echo $_SESSION['admin_global']->nama_lengkap ?></h4>
        </div>
    </div>
    </div>

    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - UPT BLK Surabaya.</small>
        </div>
    </footer>

</body>
</html>