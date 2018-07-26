<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css?v=0.0.0.1" />
  <title><?php if ( is_single() ) { ?> <?php } ?><?php wp_title(':',true,right); ?> <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

</head>
<body style="overflow: hidden;">
<!-- BEGIN: header -->
  <header class="header">
    <div class="logo logo--home header__logo">
      <a href="<?php echo home_url(); ?>" class="logo__link">
          <span class="logo__icon"></span>
      </a>
    </div>
    <div class="menu menu--home header__menu">
        <input type="checkbox" id="hum"  class="menu__control"/>
        <label for="hum" class="menu__hum">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </label>
        <ul class="menu__items">
          <li class="menu__item"><a href="./about.html" class="menu__link">О нас</a></li>
          <li class="menu__item"><a href="./catalog.html" class="menu__link">каталог</a></li>
          <li class="menu__item"><a href="./rent.html" class="menu__link">Условия аренды</a></li>
          <li class="menu__item"><a href="./contacts.html" class="menu__link">контакты</a></li>
          <div class="underline"></div>
        </ul>
    </div>
  </header>
<!-- END: header -->

<div class="catalog-redirect">
  <p class="catalog-redirect__descriptions">Аренда декора
    для праздничных
    мероприятий</p>
  <a href="#" class="pro-decor-btn pro-decor-btn--home">Каталог</a>
</div>

<!-- BEGIN: hexagon -->
  <div class="hexagon2">
      <div class="hexagon2__border"></div>
      <span class="hexagon2__1">
        <span class="hexagon2__2">
          <span class="hexagon2__3">
            <span class="hexagon2__4">
              <span class="hexagon2__5">
                <span class="hexagon2__6">
                  <span class="hexagon2__pic">
                      <img class="hexagon2__clipped-pic" src="<?php bloginfo('template_url'); ?>/img/home/bg_4.jpg" alt="non blured" />
                      <img class="hexagon2__clipped-pic" src="<?php bloginfo('template_url'); ?>/img/home/bg_2.jpg" alt="non blured" />
                      <img class="hexagon2__clipped-pic" src="<?php bloginfo('template_url'); ?>/img/home/bg_3.jpg" alt="non blured" />
                      <img class="hexagon2__clipped-pic" src="<?php bloginfo('template_url'); ?>/img/home/bg_1.jpg" alt="non blured" />
                  </span>
                </span>
              </span>
            </span>
          </span>
        </span>
      </span>
  </div>
<!-- END: hexagon -->

<!-- BEGIN: footer -->
  <footer class="footer footer--home">
    <div class="phone footer__phone">
      <a href="tel:#" class="phone__number">+3 8096 796 77 07</a>
    </div>
    <ul class="f-socials footer__f-socials">
      <li class="f-socials__item"><a href="#" class="f-socials__link">Подпишитесь на нас в соц сетях</a></li>
      <li class="f-socials__item"></li>
      <li class="f-socials__item"><a href="https://www.facebook.com/prodecroclub.com.ua/" class="f-socials__link">facebook</a></li>
      <li class="f-socials__item"><a href="https://www.instagram.com/prodecorclub/" class="f-socials__link">instagram</a></li>
    </ul>
  </footer>
<!-- END: footer -->

<!-- BEGIN: slideshow -->
  <section id="home-slideshow" class="home-slideshow">
    <div class="home-slideshow__item">
      <img class="home-slideshow__background" data-canvas-img src="<?php bloginfo('template_url'); ?>/img/home/bg_4.jpg" alt="background" />
    </div>
    <div class="home-slideshow__item">
      <img class="home-slideshow__background" data-canvas-img src="<?php bloginfo('template_url'); ?>/img/home/bg_2.jpg" alt="background" />
    </div>
    <div class="home-slideshow__item">
      <img class="home-slideshow__background" data-canvas-img src="<?php bloginfo('template_url'); ?>/img/home/bg_3.jpg" alt="background" />
    </div>
    <div class="home-slideshow__item">
      <img class="home-slideshow__background" data-canvas-img src="<?php bloginfo('template_url'); ?>/img/home/bg_1.jpg" alt="background" />
    </div>
  </section>
<!-- END: slideshow -->
  <script src="<?php bloginfo('template_url'); ?>/js/plugins/jquery-3.3.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/plugins/slick.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  <?php wp_footer();?>
</body>
</html>