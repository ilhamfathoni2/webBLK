<?php

    include 'koneksi.php';
    $id_user = $_GET['id_user'];

    $hapus = "DELETE FROM userdata WHERE id_user = $id_user";
    $hasil = mysqli_query($kon, $hapus);

    header("Location: pesertadash.php");

?>