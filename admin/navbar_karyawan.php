
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin | Interlink Network Indonesia</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<?php
include "koneksi.php";
?>
    <div class="header-about">
        <nav id="navbar">
            <img src="../image/logo.png" class="logo">
            <ul id="menu">
                <li class="solid"><a href="karyawan.php">Home</a></li>
                <li class="listUnSolid"><a href="brochure.php">Brochure</a></li>
                <li class="listUnSolid"><a href="Service.php">Contact</a></li>
                <li class="listUnSolid"><a href="logout.php">Log Out</a></li>
                <li class="listUnSolid"><a href="logout.php"><?php echo $_SESSION['name']?></a></li>
            </ul>
        </nav>
    </div>
    <div class="jumbotron-about">
        <h1><?php echo $_SESSION["name"] ?></h1> 
    </div>

    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>
</html>