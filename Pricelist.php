<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricelist | Interlink Network Indonesia</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container-prices{
            background-color: white;
            margin: 0 5% 30px 5%;
            display: flex;
            flex-wrap: wrap;
            
        }

.container-prices .block-price{
    margin: 0px auto;  
    text-align: center;
    width: 22%;
    height: 420px;
    transition: 1s;
    padding: 25px 10px;
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.208);
}

.container-prices .block-price .image{
    height: 80px;
    margin-top: 10px;
}

.container-prices .block-price h5{
    margin-top: 10px;
    color: black;
    font-size: 18px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

.container-prices .block-price h2{
    font-family: Arial, Helvetica, sans-serif;
    margin: 10px 0;
    height: 50px;
}

.container-prices .block-price h3{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
}

.container-prices .block-price p {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: gray;
    margin: 0 15px;
}

.container-prices .block-price .deskripsi{
    height: 120px;
}

.container-prices .block-price:hover{
    transform: scale(1.1);
}

.container-prices .harga{
    display: inline-flex;
    margin-left: -30px;
}

.container-prices .harga h1{
    font-family: Arial, Helvetica, sans-serif;
}

.container-prices .harga .meter{
    margin-top: 8px;
    margin-left: -1px;
}

.container-prices .harga .rp{
    margin-top: 1px ;
}

.container-prices .btn-call {
    text-decoration: none;
    padding: 15px 60px;
    background-color: #DF1414;
    color: white;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

    </style>
</head>
<body>
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
                <li class="solid price"><a href="Pricelist.php">Pricelist</a>
                    <ul class="dropdown">
                        <li class="listUnSolid"><a href="#access">Access Point</a></li>
                        <li class="listUnSolid"><a href="#pc">PC / Laptop</a></li>
                        <li class="listUnSolid"><a href="#kabel">Kabel</a></li>
                        <li class="listUnSolid"><a href="#router">Router dan Firewall</a></li>
                        <li class="listUnSolid"><a href="#server">Server</a></li>
                        <li class="listUnSolid"><a href="#jasa">Jasa Lain</a></li>
                    </ul>
                </li>
                <li class="listUnSolid"><a href="Gallery.php">Gallery</a></li>
                <li class="listUnSolid"><a href="Contact.php">Contact</a></li>
                <li class="listUnSolid"><a href="Blog.php">Blog</a></li>
            </ul>
        </nav>
    </div>
    <div class="jumbotron-about">
        <h1>Pricelist</h1>
    </div>


    
    <h1 id="access" style="margin-top: 50px; padding-top:120px; text-align:center; font-family:Arial, Helvetica, sans-serif;">Access Point</h1>
    <div class="container-prices" style="margin-top: 50px;">
        <div class="block-price">
            <img src="image/pricelist/Setting AP.png" class="image">
            <h2>Setting AP</h2>
            <p class="deskripsi">
            Jasa setting access point wifi dengan dhcp, security dan tarik kabel lan dari switch (belum termasuk kabel)
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>150.000</h1>
                <p class="meter">/wifi</p>
            </div>
            <p>Sampai 350.000</p>
        </div>
        <div class="block-price" style=" margin-left: -100px;">
            <img src="image/pricelist/Instalasi dan terminasi AP.png" class="image">
            <h2>Instalasi dan Terminasi AP</h2>
            <p class="deskripsi">
            Jasa instalasi untuk setting wifi access point (Cisco Meraki, Dlink, UNV, Tplink, Ruiji, Aruba)
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p class="rp">Rp.</p>
                <h1>150.000 </h1>
                <p class="meter">/wifi</p>
            </div>
            <p>Sampai 750.000</p>
        </div>
        <div class="block-price" style=" margin-left: -100px;">
            <img src="image/pricelist/Instalasi Hotspot Area.png" class="image">
            <h2>Instalasi Hotspot Area</h2>
            <p class="deskripsi">
            Jasa Instalasi wifi hotspot untuk cafe, hotel, sekolah, kampus, restaurant dan lain-lain
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>250.000</h1>
                <p class="meter">/wifi</p>
            </div>
            <p>Sampai 350.000</p>
        </div>
    </div>


    
    <h1 id="pc" style="margin-top: 50px; padding-top:120px; text-align:center; font-family:Arial, Helvetica, sans-serif;">PC & Laptop</h1>
    <div class="container-prices" style="margin-top: 50px;">
        <div class="block-price">
            <img src="image/pricelist/Printer.png" class="image">
            <h2>Setting Printer</h2>
            <p class="deskripsi">
            Memberikan jasa setting printer network dan printer usb
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>100.000</h1>
            </div>
            <p>Sampai 150.000</p>
        </div>
        <div class="block-price">
            <img src="image/pricelist/Recovery Data.png" class="image">
            <h2>Recovery Data</h2>
            <p class="deskripsi">
            Memberikan jasa recovery data recovery hardisk, upgrade PC, backup data
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p class="rp">Rp.</p>
                <h1>5.000.000 </h1>
            </div>
            <p>Sampai 25.000.000</p>
        </div>
        <div class="block-price">
            <img src="image/pricelist/Antivirus.png" class="image">
            <h2>Instalasi & Setting Antivirus</h2>
            <p class="deskripsi">
            Memberikan jasa instalasi dan konfigurasi antivirus untuk laptop client (kaspery, avira, bitfender, mcafee, dan lain-lain
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>200.000</h1>
                <p class="meter">/PC</p>
            </div>
            <p>Sampai 500.000</p>
        </div>
        <div class="block-price">
            <img src="image/pricelist/Linux.png" class="image">
            <h2>Instalasi OS</h2>
            <p class="deskripsi">
            Memberikan jasa untuk installasi OS windows 7,8,10 dan linux
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>250.000</h1>
                <p class="meter">/PC</p>
            </div>
            <p>Sampai 350.000</p>
        </div>        
    </div>

    


    <h1 id="kabel" style="margin-top: 50px; padding-top:120px; text-align:center; font-family:Arial, Helvetica, sans-serif;">Kabel Jaringan</h1>
    <div class="container-prices" style="margin-top: 50px;">
        <div class="block-price">
            <img src="image/pricelist/penarikan.png" class="image">
            <h2>Penarikan</h2>
            <p class="deskripsi">
            Jasa penarikan installasi kabel data Lan vertical, horizontal dan jasa installasi kabel lan dengan punch down ke patch panel dengan modular
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>150.000</h1>
            </div>
            <p>Sampai 450.000</p>
        </div>
        <div class="block-price" style="margin-left: -100px;">
            <img src="image/pricelist/instalasi fiber optik.png" class="image">
            <h2>Instalasi Kabel Fiber Optik</h2>
            <p class="deskripsi">
            Jasa installasi kabel fiber optic indoor/outdoor, Multimedia/singlemode
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p class="rp">Rp.</p>
                <h1>9.000 </h1><p class="meter">/meter</p>
            </div>
            <p>Sampai 80.000</p>
        </div>
        <div class="block-price" style="margin-left: -100px;">
            <img src="image/pricelist/Instalasi kabel Pabx.png" class="image">
            <h2>Instalasi Kabel PABX</h2>
            <p class="deskripsi">
            Jasa instalasi kabel Pabx atau kabel telfon
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>150.000</h1>
                <p class="meter">/meter</p>
            </div>
            <p>Sampai 450.000</p>
        </div>
    </div>


    <h1 id="router" style="margin-top: 50px; padding-top:120px; text-align:center; font-family:Arial, Helvetica, sans-serif;">Router dan Firewall</h1>
    <div class="container-prices" style="margin-top: 50px;">
        <div class="block-price">
            <img src="image/pricelist/Instalasi dan Konfigurasi.png" class="image">
            <h2>Instalasi dan Konfigurasi Router</h2>
            <p class="deskripsi">
            Memberikan jasa instalasi dan setting Mikrotik Router OS / Router Board, Bandwidth Management, Blok situs website dan lain-lain
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>
        <div class="block-price" style="margin-left: -280px;">
            <img src="image/pricelist/Instalasi dan Konfigurasi Fortinet.png" class="image">
            <h2>Instalasi dan Konfigurasi Fortinet</h2>
            <p class="deskripsi">
            Memberikan jasa instalasi dan konfigurasi fortinet
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>
    </div>

    <h1 id="server" style="margin-top: 50px; padding-top:120px; text-align:center; font-family:Arial, Helvetica, sans-serif;">Server</h1>
    <div class="container-prices" style="margin-top: 50px;">
        <div class="block-price">
            <img src="image/pricelist/Instalasi OS Server.png" class="image">
            <h2>Installasi OS Server</h2>
            <p class="deskripsi">
            Jasa installasi Windows Server / Linux serta Raid Hardisk, File Server, dan Application dan lain-lain
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>
        <div class="block-price" style="margin-left: -100px;">
            <img src="image/pricelist/Setting Hardisk Server.png" class="image">
            <h2>Setting Hardisk Server</h2>
            <p class="deskripsi">
            Memberikan jasa untuk setting NAS Hardisk untuk data sharing di jaringan komputer Lan / wifi
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p class="rp">Rp.</p>
                <h1>500.000 </h1>
            </div>
            <p>Sampai 5.000.000</p>
        </div>
        <div class="block-price" style="margin-left: -100px;">
            <img src="image/pricelist/Backup Restore.png" class="image">
            <h2>Backup & Restore Data Server</h2>
            <p class="deskripsi">
            Memberikan jasa untuk backup & restore data melalui jaringan
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>   
    </div>
    
    <div class="container-prices" style="margin-top: 50px;">
        <div class="block-price">
            <img src="image/pricelist/SetUp jasa Ruang Server.png" class="image">
            <h2>Jasa Setup Ruang Server</h2>
            <p class="deskripsi">
            Jasa merapikan dan terminasi ruang server
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>
        <div class="block-price" style="margin-left: -280px;">
            <img src="image/pricelist/Manage Service ruang server.png" class="image">
            <h2>Manage Service Ruang Server</h2>
            <p class="deskripsi">
            Jasa pengecekan dan maintanance ruang server (Kerapihan dan Kebersihan, labeling, AC, Tingkat Kelembapan Ruang Server)
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div> 
    </div>




    <h1 id="jasa" style="margin-top: 50px; padding-top:120px; text-align:center; font-family:Arial, Helvetica, sans-serif;">Jasa Lain</h1>
    <div class="container-prices" style="margin-top: 50px;">
        <div class="block-price">
            <img src="image/pricelist/Instalasi Antena.png" class="image">
            <h2>Instalasi Antena(Wireless)</h2>
            <p class="deskripsi">
            Memberikan jasa installasi antena P2P, Point to Point (outdoor)
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>2.500.000</h1>
            </div>
            <p>Sampai 4.500.000</p>
        </div>
        <div class="block-price">
            <img src="image/pricelist/instalasi Door lock.png" class="image">
            <h2>Instalasi Door Lock</h2>
            <p class="deskripsi">
            Memberikan jasa installasi Door Lock Finger print
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p class="rp">Rp.</p>
                <h1>250.000 </h1>
            </div>
            <p>Sampai 1.200.000</p>
        </div>
        <div class="block-price">
            <img src="image/pricelist/Instalasi IP CCTV.png" class="image">
            <h2>Instalasi IP CCTV</h2>
            <p class="deskripsi">
            Jasa instalasi IP CCTV berikut dengan kabel, kamera dan DVR dengan hardisk custom
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>100.000</h1>
            </div>
            <p>Sampai 450.000</p>
        </div>
        <div class="block-price">
            <img src="image/pricelist/Fluke Test.png" class="image">
            <h2>Fluke Test</h2>
            <p class="deskripsi">
            Jasa testing menggunakan Fluke
            </p>
            <h3>Harga Mulai</h3>
            <div class="harga">
                <p>Rp.</p>
                <h1>85.000</h1>
            </div>
            <p>Sampai 250.000</p>
        </div>        
    </div>

    
    <div class="container-prices" style="margin-top: 50px;">
        <div class="block-price">
            <img src="image/pricelist/Pengadaan Kebutuhan IT.png" class="image">
            <h2>Pengadaan Kebutuhan IT</h2>
            <p class="deskripsi">
            Jasa pengadaan Komputer, Laptop, Server, Jaringan Komputer Lan, Pabx, fiber optic dan lain-lain
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>
        <div class="block-price">
            <img src="image/pricelist/IT Consultan.png" class="image">
            <h2>IT Konsultan</h2>
            <p class="deskripsi">
            Jasa IT Konsultan jaringan komputer Lan, Pabx, CCTV, fiber optic dan lain-lain
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>
        <div class="block-price">
            <img src="image/pricelist/Video Converebce.png" class="image">
            <h2>Video Converence</h2>
            <p class="deskripsi">
            Jasa setting video conference seperti konfigurasi Zoom Room, Webex, Google Meet, Goole Hangout dan lain lain
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>
        <div class="block-price">
            <img src="image/pricelist/Survey Lokasi.png" class="image">
            <h2>Survey Lokasi</h2>
            <p class="deskripsi">
            Memberikan jasa untuk survey lokasi
            </p>
            <a href="" class="btn-call">Call Us</a>
        </div>        
    </div>



    <div class="before-footer" style="margin-top: 100px;">
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


    </script>
</body>
</html>