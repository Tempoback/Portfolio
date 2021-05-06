// $(".autoplay").slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 3000,
//   arrows: false,
//   fade: true,
//   asNavFor: ".slider-nav",
//   centerMode: true,
// });

// $(".slider-nav").slick({
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   asNavFor: ".autoplay",
//   focusOnSelect: true,
//   centerMode: true,
//   arrows: true,
//   responsive: [
//     {
//       breakpoint: 1024,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 1,
//         centerMode: false,
//       },
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         centerMode: false,
//       },
//     },

//     // You can unslick at a given breakpoint now by adding:
//     // settings: "unslick"
//     // instead of a settings object
//   ],
// });

$(document).ready(function () {
  $(".slider").slick({
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: true,
  });
});
