<?php
    include "koneksi.php";

    // validasi gambar, retrun tmp_name dan nama acak
    function upload($foto) {
        
        $namaFile = $_FILES["$foto"]["name"];
        $ukuranFile = $_FILES["$foto"]["size"];
        $error = $_FILES["$foto"]["error"];
        $tmpName = $_FILES["$foto"]["tmp_name"];
    
    
        // cek apakah data yg diupload adalah gambar
        $ekstensiGambarValid = ["jpg", "jpeg", "png"];
        $ekstensiGambar = explode(".", $namaFile); // variable jadi array ["eka", "jpg"]
        $ekstensiGambar = strtolower(end($ekstensiGambar)); // ambil index terakhir array dan lakukan lowercase
    
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) { // jika variabel tidak ada dalam array $ekstensiGambarValid
            echo    "<script>
                        alert('yang anda upload bukan gambar');
                        document.location.href = 'Pendaftaran.php';
                    </script>";
            return false;
        }
    
        // cek jika ukuran terlalu besar
        if ($ukuranFile > 1000000) { // ukuran dalam byte
            echo    "<script>
                        alert('ukuran gambar terlalu besar (max 1000kb)');
                        document.location.href = 'Pendaftaran.php';
                    </script>";
            return false;
        }
    
    
        // lolos pengecekan, gambar siap diupload
    
        // generate nama gambar baru
        $namaFileBaru = uniqid(); // akan membangkitkan string angka random
        $namaFileBaru .= ".";
        $namaFileBaru .= $ekstensiGambar;
        //var_dump($namaFileBaru); die;
    
        // move_uploaded_file($tmpName, "img/user/" . $namaFileBaru); // copy file yang di pilih beserta namanya ke server tempat penyimpanan gambar
        
        return $arr = [$tmpName, $namaFileBaru]; // return nama file supaya bisa tersimpan didatabase
    
        }
?>