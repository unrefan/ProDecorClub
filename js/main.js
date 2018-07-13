function removeDotsText(slide) {
  slide.on('init', function(e, slick){
    var dots = slide.find('li button');
    dots.each(function(i, el){
      $(el).text('');
    });
  });
}

function sliderInit(slide, options) {
  slide.slick(options);
}

function sliderHomeChange(slide) {
  var pic = $('#hexagonPic');
  var pics = $('#home-slideshow').find('.home-slideshow__item .home-slideshow__background');
  slide.on('beforeChange', function(e, slick, cSlide){
    pic.css('opacity', '0');
  });
  slide.on('afterChange', function(e, slick, cSlide){
    pic.css('opacity', '1');
    pic.attr('src', pics.eq(cSlide).attr('src'));
  });
}

function homeSliderHandler() {
  var slide = $('#home-slideshow');
  var options = {
    dots: true,
    vertical: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    verticalSwiping: true,
    infinite: false,
    autoplay: true,
    prevArrow: '<button type="button" class="slick-prev"></button>',
    nextArrow: '<button type="button" class="slick-next"></button>'
  }
  if(slide.length) {
    removeDotsText(slide);
    sliderInit(slide, options);
    sliderHomeChange(slide);
  }
}

function setPaginationAboutCard(slide) {
  var card = $('div.card div.card__page');
  slide.on('init', function(e, slick){
    card.text(1 + '/' + slick.$slides.length);
  });
}

function sliderAboutChange(slide) {
  var card = $('div.card div.card__page');
  // slide.on('beforeChange', function(e, slick, cSlide){

  // });
  slide.on('afterChange', function(e, slick, cSlide){
    card.text(cSlide + 1 + '/' + slick.$slides.length);
  });
}

function aboutSliderHandler() {
  var slide = $('#servicesSlider');
  var options = {
    dots: false,
    vertical: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    verticalSwiping: false,
    infinite: true,
    autoplay: true,
    prevArrow: '<button type="button" class="slick-prev"></button>',
    nextArrow: '<button type="button" class="slick-next"></button>'
  }
  if(slide.length) {
    setPaginationAboutCard(slide);
    removeDotsText(slide);
    sliderInit(slide, options);
    sliderAboutChange(slide)
  }
}

function underlineAnimation() {
  var menu = $('header.header .menu');
  var items = menu.find('.menu__item');
  var active = menu.find('.menu__item.active');
  var underline = menu.find('.underline');

  if(active.length !== 0) {
    var rect = active[0].offsetLeft;
    var tr = 'translateX(' + rect + 'px)';
    underline.css({
      'width': active[0].clientWidth,
      'transform': tr
    });
  }

  items.each(function(i, el){
    $(el).on('mouseover', function(e){
      var rect = el.offsetLeft;
      var tr = 'translateX(' + rect + 'px)';
      underline.css({
        'width': el.clientWidth,
        'transform': tr
      });
    });
    $(el).on('mouseleave', function(e){
      if(active.length !== 0) {
        var rect = active[0].offsetLeft;
        var tr = 'translateX(' + rect + 'px)';
        underline.css({
          'width': active[0].clientWidth,
          'transform': tr
        });
      }
    });
  });
}

$(document).ready(function(){
  homeSliderHandler();
  aboutSliderHandler();
  underlineAnimation();
});