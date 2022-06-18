<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intinetwork | Interlink Network Indonesia</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <style>
    </style>
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
        <form action="downloadBrochure.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Masukkan Nama" required>
            <label for="phone">Phone</label>
            <input type="text" name="phone" placeholder="Masukkan Phone" required>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Masukkan Email" required>
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
    <div class="header1">
        <nav id="navbar">
            <img src="image/logo.png" class="logo">
            
            <ul id="menu">
                <li class="solid"><a href="Home.php">Home</a></li>
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
                <li class="listUnSolid"><a href="Contact.php">Contact</a></li>
                <li class="listUnSolid mb1000"><a href="Blog.php">Blog</a></li>
            </ul>
            <!-- <div class="nugget" id="nugget">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div> -->
        </nav>

    </div>


    
    <?php
        include "Jumbotron.php";    
    ?>

    <div class="container mt-100">
        <div class="block">
            <img class="image" src="image/image 1.png">
            <h5>Creative Plan and Design</h5>
            <p>perencanaan sistem jaringan di perusahaan anda dengan pengerjaan cepat dan rapi.</p>
        </div>
        <div class="block">
            <img class="image" src="image/image 2.png">
            <h5>Talented Peoples</h5>
            <p>Dikerjakan oleh pekerja ahli dan telah berpengalaman dalam berbagai project.</p>
        </div>
        <div class="block">
            <img class="image" src="image/image 3.png">
            <h5>Modern Tools</h5>
            <p>Menyediakan layanan terbarukan untuk kebutuhan Jaringan dalam perusahaan anda.</p>
        </div>
    </div>

    <div class="container lr12 mt60">
        <img src="image/Group.png" class="image0">
        <img src="image/home.png" class="image1">
        <div class="materi">
            <h3 class="title">Kami melayani segala kebutuhan Jaringan IT di Perusahaan Anda</h3>
            <p class="isi">"Menawarkan segala jenis kebutuhan mulai dari perencanaan sampai pengerjaan akhir."</p>
        </div>
    </div>

    <!-- <div class="slider-all" style="z-index:0;"> -->
        <?php
        include "SliderService.php";
        include "GallerySlider.php";
        include "OurClientSlider.php";
        // install git
        //letsencypt
        ?>
    <!-- </div> -->
    

    
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
            <!-- <a href="#"> -->
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
            <!-- </a> -->
            
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


        let nugget = document.getElementById("nugget");
        let mobile = document.getElementsByClassName("mobile");

        nugget.onclick = function(){
            menu.classList.add("mobile");
        }

        window.onscroll = function() {
            menu.classList.remove("mobile");
        }
    </script>
</body>
</html>