<?php

    include "koneksi.php";
    session_start();

    if(isset($_POST["submit"])){

    $nama = htmlspecialchars($_POST["nama"]);
    $program = htmlspecialchars($_POST["program"]);
    $noTlp = htmlspecialchars($_POST["no_tlp"]);
    $tglLahir = htmlspecialchars($_POST["tgl_lahir"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $kecamatan = htmlspecialchars($_POST["kecamatan"]);
    $kabupaten = htmlspecialchars($_POST["kabupaten"]);
    $provinsi = htmlspecialchars($_POST["provinsi"]);
    $email = htmlspecialchars($_POST["email"]);
    $pass = htmlspecialchars(md5($_POST["password"]));

    // echo "'$nama', '$program', '$noTlp', '$tglLahir', '$alamat', '$kecamatan', '$kabupaten', '$provinsi', '$email', '$pass'";

    //Query input menginput data kedalam tabel userdata
    $sql = "INSERT INTO `userdata` (`nama_lengkap`, `pilih_program`, `no_tlp`, `tgl_lahir`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `email`, `password`)
    VALUES ('$nama','$program',
    '$noTlp','$tglLahir','$alamat','$kecamatan',
    '$kabupaten','$provinsi','$email','$pass')";

    //Mengeksekusi/menjalankan query diatas
    $hasil = mysqli_query($kon, $sql);


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