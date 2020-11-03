$('.main-banner__content').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  autoplaySpeed:3000,
  arrows: false,
  fade: true,
  cssEase: "linear",
  responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: false
    }
  },
  {
    breakpoint: 900,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,

    }
  }
  ]
});


$('.video-dashboard__slider').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  centerMode:true,
  centerPadding:'100px',
  responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true,
      dots: false
    }
  },
  {
    breakpoint: 900,
    settings: {
      slidesToShow: 2,
      slidesToScroll:1 ,
      arrows: false,
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      autoplay: false,
      autoplaySpeed: 1000,
      arrows:false,
      centerMode: true,
      centerPadding: '25px',
    }
  }
  ]
});

$('.workout-video__slider').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  arrows: false,
  centerMode:true,
  centerPadding:'100px',
  responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: false
    }
  },
  {
    breakpoint: 900,
    settings: {
      slidesToShow: 2,
      slidesToScroll:1 ,
      arrows: false,
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      autoplay: false,
      autoplaySpeed: 1000,
      arrows:false,
      centerMode: true,
      centerPadding: '25px',
    }
  }
  ]
});