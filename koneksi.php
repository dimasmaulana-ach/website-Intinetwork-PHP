<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "intinet.id";

    //buat koneksi
    //mysqli_connect adalah nama fungsi php untuk menjalankan argumen agar terkoneksi ke server mysql dan atau database.
    $koneksi = mysqli_connect($serverName, $userName, $password, $database);

    //cek koneksi
    // if (!$koneksi) {
    //     die("Koneksi Gagal".mysqli_connect_error());
    //  }
    //  else{
    //      echo "koneksi berhasil";
    //  }
    //  mysqli_connect_error() //-> untuk menampilkan deskripsi error
    // mysqli_connect_errno() //-> untuk menampilkan kode/nomor error
?>