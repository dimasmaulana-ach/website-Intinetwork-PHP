<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="style.css">

    <!-- Demo styles -->
    <style>
      .jumbotron {
        width: 100%;
        height: 100vh;
        margin-top: -100vh;
        z-index: -2;
      }

      .jumbo {
        background-position: center;
        background-size: cover;
      }

      .jumbo img {
        display: block;
        width: 100%;
      }

      @media only screen and (max-width: 480px){
        .jumbotron{
          /* margin-top: 0px; */
          width: 100%;
          height: 300px;
        }

        .swiper-slide{
          margin-top: 50px;
        }
      }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <div class="swiper jumbotron mySwiper1">
      <div class="swiper-wrapper">
        <div class="swiper-slide jumbo">
          <img src="image/Jumbotron (1).png" />
        </div>
        <div class="swiper-slide jumbo">
          <img src="image/Jumbotron (2).png" />
        </div>
        <div class="swiper-slide jumbo">
          <img src="image/Jumbotron (3).png" />
        </div>
      </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper1", {
        spaceBetween: 30,
        effect: "fade",
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        keyboard: {
            disable: true,
            onlyInViewport: false,
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        loop: true,
      });
    </script>
  </body>
</html>
