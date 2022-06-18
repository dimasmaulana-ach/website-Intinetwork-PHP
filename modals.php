<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="hidden" id="modals">
    <div class="modals-1" id="gudukModal">
        <div class="judul" style="display: flex;">
            <h1 style="padding: 0; text-align:left; margin:auto;">Please Fill This Form!</h1>
            <a id="close">
                <img src="image/close.png"  style="width: 20px;height:20px; margin-left:auto;">
            </a>
        </div>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Masukkan Nama" >
            <label for="phone">Phone</label>
            <input type="text" name="phone" placeholder="Masukkan Phone" >
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" >
            <label for="problem">Problem</label>
            <textarea name="deskripsi" id="" cols="30" rows="10" placeholder="Masukkan Keluhan Anda" ></textarea>
            <div class="btn-sub">
                <button type="submit" id="download" class="btn">Download</button>
            </div>
        </form>
        <!-- <a href="Home.php">Close</a> -->

    </div>
</div>
</body>
</html>