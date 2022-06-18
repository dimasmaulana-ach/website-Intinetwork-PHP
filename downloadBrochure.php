<?php
if($_POST){
    session_start();

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $deskripsi = $_POST['deskripsi'];
    
    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO brochure (name, phone, email, deskripsi) VALUES
    ('".$name."','".$phone."','".$email."','".$deskripsi."')");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='admin_tampil.php';</script>";
    }

}
?>