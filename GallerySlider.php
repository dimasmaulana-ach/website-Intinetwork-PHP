<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />


    <!-- Demo styles -->
    <style>
      .gallery {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
        z-index: 0;
        background: none;
        padding-bottom: 50px;
      }

      .galery {
        background-position: center;
        background-size: cover;
        width: 530px;
        height: 530px;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
      }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <h1>Our Project</h1>
    <div class="swiper gallery mySwiper-0">
      <div class="swiper-wrapper">
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (1).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (2).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (3).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (4).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (5).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (6).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (7).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (8).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (9).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (10).png" />
        </div>
        <div class="swiper-slide galery">
          <img src="image/gallery/1 (11).png" />
        </div>
      </div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper-0", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },
        keyboard: {
          disable: true,
        },
        loop: true,
      });
    </script>
  </body>
</html>
