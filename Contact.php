<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Interlink Network Indonesia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body">

<div class="hidden" id="modals">
    <div class="modals-1" id="gudukModal">
        <div class="judul" style="display: flex;">
            <h1 style="padding: 0; text-align:left; margin:auto; font-family:Arial, Helvetica, sans-serif;">Please Fill This Form!</h1>
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

    <div class="opening">
        <p>Opening Hour : (08.00 AM - 05.00 PM)</p>
    </div>
    <div class="header-about">
        <nav id="navbar">
            <img src="image/logo.png" class="logo">
            <ul id="menu">
                <li class="listUnSolid"><a href="Home.php">Home</a></li>
                <li class="listUnSolid"><a href="About.php">About</a></li>
                <li class="listUnSolid"><a href="Portofolio.php">Portofolio</a></li>
                <li class="listUnSolid"><a href="Service.php">Services</a></li>
                <li class="listUnSolid price"><a href="Pricelist.php">Pricelist</a>
                    <ul class="dropdown">
                        <li class="listUnSolid"><a href="Pricelist.php #access">Access Point</a></li>
                        <li class="listUnSolid"><a href="Pricelist.php #pc">PC / Laptop</a></li>
                        <li class="listUnSolid"><a href="Pricelist.php #kabel">Kabel</a></li>
                        <li class="listUnSolid"><a href="Pricelist.php #router">Router dan Firewall</a></li>
                        <li class="listUnSolid"><a href="Pricelist.php #server">Server</a></li>
                        <li class="listUnSolid"><a href="Pricelist.php #jasa">Jasa Lain</a></li>
                    </ul>
                </li>
                <li class="listUnSolid"><a href="Gallery.php">Gallery</a></li>
                <li class="solid"><a href="Contact.php">Contact</a></li>
                <li class="listUnSolid"><a href="Blog.php">Blog</a></li>
            </ul>
        </nav>
    </div>
    <div class="jumbotron-about">
        <h1>Contact</h1>
    </div>

    <div class="container" style="margin-top: 150px;">
        <div class="gmaps">
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15805.933903324969!2d112.604258!3d-7.948886000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788387d48cb615%3A0x2568fbb9098e2231!2sJl.%20Joyosuko%20Timur%20No.12%2C%20Dinoyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065144!5e0!3m2!1sid!2sid!4v1654806427373!5m2!1sid!2sid" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        
        </div>
    </div>


    <div class="container-contact">
        <div class="form">
            <form action="ContactLogic.php" method="POST">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                <input type="text" name="subject" class="subject" placeholder="Subject"  required>
                <input type="text" name="name" class="name" placeholder="Name" required>
                <input type="text" name="email" class="email" placeholder="Email" required>
                <input type="text" name="phone" class="phone" placeholder="Phone" required>
                <input type="text" name="company" class="company" placeholder="Company" required>
                <button class="submit">Send</button>
            </form>
        </div>
        <div class="info">
            <div class="isi-info">
                <img src="image/address.png" class="height">
                <h5>Jl. Joyo Suko Timur Kav.5, <br> Lawokwaru, Kota Malang, <br> Jawa Timur 65144</h5>
            </div>
            <div class="isi-info">
                <img src="image/telp.png">
                <h5>0341-580009</h5>
            </div>
            <div class="isi-info">
                <img src="image/mail.png">
                <h5>admin@intinetwork.id</h5>
            </div>
        </div>
    </div>

    <div class="before-footer">
        <div class="container-before-footer">
            <div class="content-before-footer">
                <div class="title">
                    <h2>Anda Mencari Solusi dari segala permasalahan Jaringan IT perusahaan anda?</h2>
                </div>
                <div class="btn">
                    <a href="Contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container-footer-about">
            <div class="brochur">
                <div class="logo">
                    <img src="image/logo.png" class="image" style="cursor:default;">
                </div>
                <div class="btn-download">
                    <button id="btnModals">
                        <img src="image/download.png" class="image">
                        <h4>DOWNLOAD BROCHURE</h4>
                    </button>
                    </a>
                </div>
            </div>
        
            <div class="hr-footer"></div>
            <div class="about-footer">
                <div class="header-footer">
                    <div class="block-about address">
                        <h5>Address</h5>
                        <p>Jl. Joyo Suko Timur Kav.5, Lawokwaru, Kota Malang, Jawa Timur 65144</p><br>
                        <p>0341-580009</p><br>
                        <p>admin@intinetwork.id</p>
                    </div>
                    <div class="block-about">
                        <h5>Useful Links</h5>
                        <ul>
                            <li><a href="About.php">About</a></li>
                            <li><a href="Portofolio.php">Portofolio</a></li>
                            <li><a href="Service.php">Service</a></li>
                            <li><a href="Gallery.php">Gallery</a></li>
                            <li><a href="Contact Us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="block-about media">
                        <h5>Follow Us</h5>
                        <a href="https://www.instagram.com/intinetwork.id/" target="_blank"><img src="image/Instagram.png" class="height"></a>
                        <a href="https://www.youtube.com/channel/UC0sLH3gVHMtMAeUwk0KveaQ" target="_blank"><img src="image/Youtube.png" class="height"></a>
                        <a href="https://www.facebook.com/Intinetworkid-2149539008424491" target="_blank"><img src="image/Facebook.png" class="height"></a>
                    </div>
                </div>
            </div>
        </div>
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

        
        var modal = document.getElementById("modals");
        var btnModal = document.getElementById("btnModals");
        var body = document.getElementById("body");
        let close = document.getElementById("close");
        var show = document.getElementById("gudukModal");
        var modals1 = document.getElementById("modals-1");
        var show = document.getElementsByClassName("show");

        btnModals.onclick = function(){
            if(btnModals){
                modals.classList.remove("hidden");
                body.classList.add("overflow");
                modals.classList.add("show");
            }
        }

        close.onclick = function(){
            if(close){
                modals.classList.remove("show");
                body.classList.remove("overflow");
                modals.classList.add("hidden");
            }
        }


    </script>
</body>
</html>