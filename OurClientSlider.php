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

      .our-client {
        z-index: 0;
        margin-left: -50px;
      }

      .client {
        text-align: center;
        background: #fff;
        margin-left: auto;
        width: 500px;
        height: 200px;

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

      .client img {
        display: block;
        height: 50px;
        object-fit: cover;
      }

      .client-wrapper{
          padding: 30px;
      }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <h1>Our Client</h1>
    <div class="swiper our-client mySwiper">
      <div class="swiper-wrapper client-wrapper">
        <div class="swiper-slide client">
            <img src="image/Our Client/1.png" alt="" style="height: max-content; width:84%;">
        </div>
        <div class="swiper-slide client">
            <img src="image/Our Client/2.png" alt="" style="height: max-content; width:84%;">
        </div>
        <div class="swiper-slide client">
            <img src="image/Our Client/3.png" alt="" style="height: max-content; width:84%;">
        </div>
        <div class="swiper-slide client">
            <img src="image/Our Client/4.png" alt="" style="height: max-content; width:84%;">
        </div>
      </div>
      <!-- <div class="swiper-pagination"></div> -->
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        // slidesPerView: 4,
        // spaceBetween: 30,
        // slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,  
        // speed:1000,
        grabCursor: true,
        direction: 'horizontal',
        navigation: 
        {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: 
        {
          el: '.swiper-pagination',
          dynamicBullets: true,
        },
        zoom: true,
        keyboard: 
        {
          enabled: true,
          onlyInViewport: false,
        },
        autoplay: 
        {
          delay: 2000,
          disableOnInteraction: false,
        },
      });  
    </script>
  </body>
</html>