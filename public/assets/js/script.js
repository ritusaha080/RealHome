

//mobile menu start 
$(".mobile-btn").click(function(){
  $(".responsive-menu").toggleClass("active");
  $(".blank-div").toggleClass("active");    
});
$(".blank-div").click(function(){
  $(".responsive-menu").removeClass("active");
  $(this).removeClass("active")
});
//mobile menu end


// hero slider active 
$('.hero-wrapper').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
});

// agents slide
if ($(".agents-wrapper").length) {
  $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      focusOnSelect: true,
      dots:true,
      arrows: false,
  });
}


// testimonial active 
$('.testimoni-wrapper').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    nextArrow: "<button class='slick-prev pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    prevArrow: "<button class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",

});

// Brand active 
$('.brand-active').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  arrows: false,
  dots: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


//pagination active

$('.pagination-list a').on('click',function(){
  $('.pagination-list a').removeClass('active');
  $(this).addClass('active')
})


// object image actve slide 
// $('.').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   nextArrow: "",
//   prevArrow: "",
//   dots: true,
// });
$('.object-img').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  nextArrow: "<button class='slick-prev pull-right'>NEXT OBJECT</button>",
  prevArrow: "<button class='slick-prev pull-left'>Previous OBJECT</button>",

});


