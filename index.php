<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <h1>Bitu Kids Container</h1>
  <?php include "templates/footer.php"; ?>

  <script>
  /* -----------------------------------------------------------
    Effective slider
  ----------------------------------------------------------- */
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

  /* -----------------------------------------------------------
    Youtube modal
  ----------------------------------------------------------- */
  $(function() {
    $(document.body).on('click', '[data-modal="#youtubeModal"]', function(e) {
      e.preventDefault();
      e.stopPropagation();

      var modal = $(this).data('modal');
      var iframe = $(this).data('iframe');

      // Reset
      $(modal).find('.box-iframe').html('');

      $.magnificPopup.open({
        items: {
          src: modal
        },
        type: 'inline',
        mainClass: 'mfp-fade',
        removalDelay: 200,
        closeBtnInside: false,
        callbacks: {
          open: function() {
            $(modal).find('.box-iframe').html(iframe);
          },
          close: function() {
            $(modal).find('.box-iframe').html('');
          }
        }
      });
    });
  });

  /* -----------------------------------------------------------
    Moderators slider
  ----------------------------------------------------------- */
  $(function() {
    // PC
    var moderatorsPCSlider = $('.con-moderators .box-slider-pc .box-slider').slick({
      speed: 600,
      autoplaySpeed: 6000,
      autoplay: true,
      infinite: true,
      swipe: true,
      fade: false,
      dots: false,
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1400,
          settings: {
            slidesToShow: 3
          }
        },
        {
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

    $('.con-moderators .slick-next').on('click', function() {
      moderatorsPCSlider.slick('next');
    });

    // Mobile
    $('.con-moderators .box-news-mobile .box-slider').slick({
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

  /* -----------------------------------------------------------
  Newsbitu slider
  ----------------------------------------------------------- */
  $(function() {
    $('.con-newsbitu .box-news-mobile .box-slider').slick({
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
  </script>
</body>

</html>