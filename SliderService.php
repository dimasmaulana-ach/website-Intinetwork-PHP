<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->


    <!-- Demo styles -->
    <style>
        h1{
            margin: 0 auto;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 80px;
        }
      .swiper-service {
        width: 84%;
        height: 600px;
        z-index: 0;
        margin-top: 40px;
      }

      .service-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        margin: 10px auto;
        width: 430px;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide .img img {
        display: block;
        margin: 30px auto;
        width: max-content;
        height: 150px;
        object-fit: cover;
      }

      .services{
        /* margin: 0px auto;   */
        text-align: center;
        width: 80%;
        height: 500px;
        box-shadow: 2px 2px 8px rgba(52, 52, 52, 0.306);
        transition: 1s;
    }

    .services .image{
        height: 130px;
        width: 130px;
        /* margin-top: 40px; */
    }

    .services h5{
        margin-top: 20px;
        color: black;
        font-size: 18px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .services p {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: rgb(176, 176, 176);
        margin: 15px 20px;
        text-align: justify;
        font-size: 13px;
    }

    @media only screen and (max-width: 480px){
        .swiper-service{
            z-index: -2;
        }
    }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <h1>Our Service</h1>
    <div class="swiper swiper-service mySwiper-service">
      <div class="swiper-wrapper">
      <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/NetworkArchitectur.png">
                </div>
                <h5>Network Architectur</h5>
                <p>
                    Design Network Architecture adalah sebuah layanan kami untuk perencanaan kerangka system jaringan computer di perusahaan anda maupun mapping kawasan untuk kebutuhan layanan multiplayer.
                    <br> <br>
                    —Survey Network Architecture
                    <br> <br>
                    —Stranding Network Architecture
                    <br> <br>
                    —Design Network Architecture
                </p>
            </div>
        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/Network Management.png">
                </div>
                <h5>Network Management System</h5>
                <p>
                    Network Management System adalah sebuah layanan untuk monitoring system jaringan di perusahaan anda untuk meminimalisasi kesalahan - kesalahan yang mungkin akan terjadi di dalam sebuah system jaringan perusahaan.
                    <br> <br>
                    —Network Monitoring
                    <br> <br>
                    —Device Detection Management
                    <br> <br>
                    —Network Performance Analysis
                    <br> <br>
                    —Fault Network Management
                </p>
            </div>
        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/Automationandcontrol.png">
                </div>
                <h5>Authomation Control</h5>
                <p>
                    Kami menyediakan solusi lengkap terkait kebutuhan penyediaan perangkat dan jasa / Assembly / kalibrasi / Instalasi Instrumentation and Control bagi perusahaan maupun korporasi di Indonesia.
                    <br> <br>
                    —Assembly
                    <br> <br>
                    —Calibration & Configuration
                    <br><br>
                    —Installation
                    <br><br>
                    —Programming
                </p>
            </div>

        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/SurveillanceSystem.png">
                </div>
                <h5>Surveillance System</h5>
                <p>
                    Melayani instalasi jaringan cctv maupun jasa maintenance CCTV di perusahaan anda, dimana pada saat ini CCTV merupakan salah satu alat penunjang untuk menjaga system keamanan ruangan maupun system keamanan area di dalam sebuah perusahaan.
                    <br><br>
                    —CCTV installation
                    <br><br>
                    —Maintenance CCTV
                    <br><br>
                    —CCTV Management System
                </p>
            </div>
        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/WebandAppSolution.png">
                </div>
                <h5>Web and Application Solution</h5>
                <p>
                    Layanan ini kami khususkan bagi anda ( Perusahaan) yang ingin mengembangkan Aplikasi berbasis web maupun mobile sesuai dengan kebutuhan di dalam perusahaan anda. Layanan ini meluputi pembuatan Web Company Profile, E- Commerce, Human Resources Information Application (Aplikasi Karyawan).
                </p>
            </div>
        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/VoIP.png">
                </div>
                <h5>VoIP</h5>
                <p>
                    VoIP Service adalah sebuah layanan dengan menggunakan infrastruktur jaringan yang ada untuk rute panggilan telepon, hadirnya tehnologi VoIP berdampak positif terhadap pengurangan biaya infrastruktur komunikasi perusahaan dan membatasi panggilan keluar perusahaan.
                    <br><br>
                    —Design and architecture Voip
                    <br><br>
                    —Installation and Termination Voip
                    <br><br>
                    —Voip management system
                </p>
            </div>

        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/VSAT.png">
                </div>
                <h5>VSAT Service</h5>
                <p>
                    Layanan VSAT (VSAT Services) adalah salah satu layanan kami yang memungkinkan untuk kebutuhan konektivitas yang hemat biaya, handal dan aman bagi perusahaan maupun korporasi di seluruh wilayah Indonesia.
                    <br><br>
                    —VSAT VPN Services
                    <br><br>
                    —VSAT Installation Small & Large Dish and Maintenance Service
                    <br><br>
                    —VSAT Mobile Installation and Configuration
                </p>
            </div>
        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/WirelessNet.png">
                </div>
                <h5>Wireless Network</h5>
                <p>
                    Jaringan Data Nirkabel (Wireless Network) adalah solusi terbaik bagi perusahaan anda untuk menghubungkan data antar cabang maupun koneksi data dari kantor cabang ke kantor pusat yang memiliki jarak cukup jauh dan tidak tercover menggunakan jaringan kabel fiber optic maupun kabel UTP.
                    <br><br>
                    —Point to Point Wireless Access
                    <br><br>
                    —Hotspot Management System
                    <br><br>
                    —Wireless Access for CCTV protocol
                </p>
            </div>
        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/SystemManageServices.png">
                </div>
                <h5>System Management Service</h5>
                <p>
                    Managed Service adalah sebuah layanan kami untuk perencanaan upgrade system jaringan computer di perusahaan anda atau pengadaan infrastructure mulai dari design, planning, implementing hingga maintenancenya serta Pro-Active Monitoring, Tuning Performa Server, Troubleshooting.
                    <br><br>
                    —Internet & Networking Maintenance
                    <br><br>
                    —System & Application Maintenance
                </p>
            </div>

        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/AccessControlPanel.png">
                </div>
                <h5>Access Control Panel</h5>
                <p>
                    Access Control Management adalah sebuah system untuk membatasi hak akses terhadap objek (Personal (Orang) maupun PC Komputer di dalam sebuah system informasi management.
                    <br><br>
                    —Access Control Installation
                    <br><br>
                    —Access Control Topology
                    <br><br>
                    —Access Control System Components
                </p>
            </div>
        </div>
        <div class="swiper-slide service-slide">
            <div class="services">
                <div class="img">
                    <img class="image" src="image/FiberOptik.png">
                </div>
                <h5>Fiber Optik Network</h5>
                <p>
                    Dengan jaringan yang luas di beberapa kota, memungkinkan Anda untuk menghubungkan kantor cabang dengan kantor pusat (Data Center) anda. Kami dapat menyediakan solusi sesuai dengan kebutuhan Anda. Koneksi dengan menggunakan Jaringan Fiber Optic memberikan kecepatan, kehandalan dan kualitas terbaik.
                    <br><br>
                    —Fiber Optic Installation (Termination)
                    <br><br>
                    —Maintenance Fiber Optic Network
                    <br><br>
                    —Testing OTDR
                </p>
            </div>

        </div>
      </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper-service", {
        // spaceBetween: 30,
        // slidesPerGroup: 3,
        centeredSlides: true,
        slidesPerView: 'auto',
        grabCursor: true,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        keyboard: {
            disable: true,
        },
        grabCursor: {
            disable: true,
        },
        autoplay:{
            delay:2000,  
            disableOnInteraction: false,
        }
      });
    </script>
  </body>
</html>
