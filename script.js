let burger = document.querySelector('.burger-menu');
let nav = document.querySelector('.main-nav');
burger.addEventListener( 'click', function(){
    burger.classList.toggle('active')
    nav.classList.toggle('active')
})

$('.carousel').slick({
    centerMode: true,
    centerPadding: '60px',
    prevArrow: '<img src="img/Arrow_left.svg" alt="">',
    nextArrow: '<img src="img/Arrow_right.svg" alt="">',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
          