function removeDotsText(slide) {
  slide.on('init', function(e, slick){
    mouseWheel(slide);
    var dots = slide.find('li button');
    dots.each(function(i, el){
      $(el).text('');
    });
  });
}

function sliderInit(slide, options) {
  slide.slick(options);
}
function mouseWheel($slider) {
	$(window).on('wheel', { $slider: $slider }, mouseWheelHandler)
}
function mouseWheelHandler(event) {
	event.preventDefault()
	const $slider = event.data.$slider
	const delta = event.originalEvent.deltaY
	if(delta > 0) {
		$slider.slick('slickPrev')
	}
	else {
		$slider.slick('slickNext')
	}
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

function sliderHomeChangeTranslate(slide) {
  var pics = $('.hexagon2').find('img.hexagon2__clipped-pic');
  var arrow_next = $('#home-slideshow').find('button.slick-next');
  var arrow_prev = $('#home-slideshow').find('button.slick-prev');
  var tmp = '';
  var curentSlide = 1;

  slide.on('beforeChange', function(e, slick, cSlide, nextSlide){
    if(nextSlide - cSlide > 0) {
      translateUp();
    } else {
      translateDown();
    }
  });

  function translateUp() {
    pics.each(function(i, el){
      tr[i] -= 75;
      tmp = 'translate(-50%, ' + tr[i] + '%) scale(.7)';
      $(el).css({
        'transform': tmp
      });
    });
  }

  function translateDown() {
    pics.each(function(i, el){
      tr[i] += 75;
      tmp = 'translate(-50%, ' + tr[i] + '%) scale(.7)';
      $(el).css({
        'transform': tmp
      });
    });
  }
}
function setTranslateY() {
  var pics = $('.hexagon2').find('img.hexagon2__clipped-pic');
  var tmp = '';
  var t = -50;
  tr.push(t);
  pics.each(function(i, el){
    tmp = 'translate(-50%, ' + t + '%) scale(.7)';
    $(el).css({
      'transform': tmp
    });
    t += 75;
    tr.push(t);
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
    speed: 1000,
    infinite: false,
    autoplay: true,
    prevArrow: '<button type="button" class="slick-prev"></button>',
    nextArrow: '<button type="button" class="slick-next"></button>'
  }
  if(slide.length) {
    setTranslateY();
    removeDotsText(slide);
    sliderInit(slide, options);
    sliderHomeChangeTranslate(slide);
    //sliderHomeChange(slide);
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
  var menu = $('header.header .menu__items');
  var items = menu.find('.menu__item');
  var active = menu.find('.menu__item.active');
  var active_link = menu.find('.menu__item.active .menu__link');
  var underline = menu.find('.underline');

  if (window.innerWidth > 1199) {
    desctop();
  } else {
    mobile();
  }

  function desctop() {
    if(active.length !== 0) {
      var rect = active[0].offsetLeft;
      var tr = 'translateX(' + rect + 'px)';
      //console.log(tr, rect);
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

  function mobile() {
    if(active_link.length !== 0) {
      var rect = active[0].offsetTop;
      var rect2 = underline[0].offsetTop;
      rect += 20;
      rect -= rect2;
      var tr = 'translateY(' + rect + 'px)';
      underline.css({
        'width': active_link[0].offsetWidth,
        'transform': tr
      });
    }
  }
}

function setWidthRentPattern() {
  var rent = $('div.rent__pattern');
  if(rent.length) {
    resize();
  }

  $(window).on('resize', function(e){
    resize();
  });

  function resize() {
    var size = window.innerWidth;
    size = size / 140;
    size = Math.round(size);
    size = size * 138.85;
    rent.css('width', size);
  }
}
function setCanvas() {
  var imgs = $('img[data-canvas-img]');
  var canvas;
  imgs.each(function(i, el){
    $(el).css('display', 'none');
    canvas = $('<canvas />');
    canvas.css({'width':'100vw', 'height': '100vh'});
    canvas.attr('data-canvas', 'data-canvas');
    canvas.attr('id', 'slide_' + i);
    $(el).parent().append(canvas);
  });
}

function pathPolygon(ctx, numSides, width, height){
  var Points = new Array(numSides);
  for (var i = 0; i < numSides; i++){
    var p = new Point();
    p.x = width / 2 + width / 2 * Math.cos(i * 2 * Math.PI / numSides);
    p.y = height / 2 + height / 2 * Math.sin(i * 2 * Math.PI / numSides);
    Points[i] = p;

    ctx.beginPath();
    ctx.moveTo(Points[0].x, Points[0].y);
    for (var i = 0; i < numSides; i++){
      ctx.lineTo(Points[i].x, Points[i].y);
      ctx.closePath();
    }
  }
}
function clipImageInPolygon(img, numSides){
  var canvas = document.createElement("canvas");
  canvas.width = img.width;
  canvas.height = img.height;
  var ctx = canvas.getContext("2d");

  pathPolygon(ctx, numSides, img.width, img.height);
  ctx.clip();
  ctx.drawImage(img, 0, 0);

  img.src = canvas.toDataURL("image/png");
}

function createImg() {
  var BLUR_RADIUS = 100;
  var dpi = window.devicePixelRatio;

  var canvas = document.querySelector('[data-canvas]');
  var canvasContext = canvas.getContext('2d');

  canvas.width  = window.innerWidth;
  canvas.height = window.innerHeight;

  var image = new Image();
  image.src = document.querySelector('[data-canvas-img]').src;

  var drawBlur = function() {
    var w = window.innerWidth * dpi;
    var h = window.innerHeight * dpi;
    //console.log(w, h, dpi);
    canvasContext.drawImage(image, 0, 0, w, h);
  };

  image.onload = function() {
    drawBlur();
  }
}

var tr = [];

function paralax() {
  var hexagon = $('div.hexagon2');
  var paralax = hexagon.find('span.hexagon2__pic');
  var x = 0, y = 0, tmp = '';



  if(hexagon.length === 0) return;
  hexagon.on('mousemove', function(e){
    var rect = paralax[0].getBoundingClientRect();
    var width   = rect.width / 2;
		var	height	= rect.height / 2;
		var	reduceX	= 16;
		var	reduceY = 10;
		x= Math.round((( e.pageX - rect.left ) - width) / reduceX) * -1;
		y= Math.round((( e.pageY - rect.top ) - height) / reduceY) * -1;
    tmp = 'rotate(-102.9deg) translate('+ x +'px, ' + y + 'px)';
    paralax.css({
      'transform': tmp
    });
  });
}

$(document).ready(function(){
  homeSliderHandler();
  aboutSliderHandler();
  underlineAnimation();
  setWidthRentPattern();
  paralax();
  //setCanvas();
  //createImg();
});