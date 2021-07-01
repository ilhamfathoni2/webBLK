<?php

    $id_user = $_GET['id_user'];
    include 'koneksi.php';
    include 'function.php';

    if(isset($_POST['update'])){
    $nik = $_POST['NIK'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['subJurusan'];
    $noHP = $_POST['noHp'];
    // $foto = $_POST['foto'];

    $foto = upload("foto");

    $fotobaru = $foto[1];


    $update = "UPDATE userdata SET `NIK`= $nik,`nama_lengkap`= '$nama',`subJurusan`= '$jurusan',`no_tlp`='$noHP',`foto`='$fotobaru' WHERE id_user = $id_user";

    $hasil = mysqli_query($kon, $update);
    move_uploaded_file($foto[0], "img/img_user/" . $foto[1]); // copy file yang di pilih beserta namanya ke server tempat penyimpanan gambar

    if($hasil){
        header('Location: pesertadash.php');
    }
    else{
        echo 'Gagal Update !';
    }
    }
    

?>