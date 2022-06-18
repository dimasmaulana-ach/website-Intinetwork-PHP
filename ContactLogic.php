<?php
if($_POST){
    session_start();

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO contact (name, phone, email, company, subject, message) VALUES
    ('".$name."','".$phone."','".$email."','".$company."','".$subject."','".$message."')");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='Contact.php';</script>";
    }
}
?>