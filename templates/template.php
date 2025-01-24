<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <!-- content of page here -->
  <?php include "templates/footer.php"; ?>

  <script>
  $(function() {
    // PC
    var effectivePCSlider = $('.con-effective .box-slider-pc .box-slider').slick({
      speed: 600,
      autoplaySpeed: 6000,
      autoplay: true,
      infinite: true,
      swipe: true,
      fade: false,
      dots: false,
      arrows: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });

    $('.con-effective .slick-prev').on('click', function() {
      effectivePCSlider.slick('prev');
    });
    $('.con-effective .slick-next').on('click', function() {
      effectivePCSlider.slick('next');
    });

    // Mobile
    $('.con-effective .box-news-mobile .box-slider').slick({
      speed: 600,
      autoplaySpeed: 6000,
      autoplay: true,
      infinite: true,
      swipe: true,
      fade: false,
      dots: false,
      arrows: false,
      slidesToShow: 1,
      slidesToScroll: 1
    });

  });