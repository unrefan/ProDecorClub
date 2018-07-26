<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="./css/styles.css?v=0.0.0.1" />
  <title>Pro Decor</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
</head>
<body>

<!-- BEGIN: header -->
  <header class="header">
    <div class="logo header__logo">
      <a href="./index.html" class="logo__link">
          <span class="logo__icon"></span>
      </a>
    </div>
    <div class="menu header__menu">
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
          <li class="menu__item active"><a href="./catalog.html" class="menu__link">Каталог</a></li>
          <li class="menu__item"><a href="./rent.html" class="menu__link">Условия аренды</a></li>
          <li class="menu__item"><a href="./contacts.html" class="menu__link">Контакты</a></li>
          <div class="underline"></div>
        </ul>
    </div>
  </header>
<!-- END: header -->

<!-- BEGIN: catalog -->
<section class="catalog">
  <div class="category catalog__category">
    <div class="category__wrapper">

    <!-- BEGIN: Category -->
      <div class="category__expand-list-holder">
        <select class="expand-list category__expand-list" name="category" id="category">
          <option value="arcs" data-size="deffault" selected>Арки</option>
          <option value="vases" data-size="thin">Вазы</option>
          <option value="trees" data-size="deffault">Деревья</option>
          <option value="candlestick" data-size="thin">Подсвечники</option>
          <option value="curbstone" data-size="thin">Стойки/тумбы</option>
          <option value="photozone" data-size="deffault">Фотозоны</option>
        </select>
      </div>
    <!-- END: Category -->

    <!-- BEGIN: Sort -->
      <div class="category__sort-holder">
        <select class="sort category__sort" name="sort" id="sort">
          <option value="arcs">Сортировать по</option>
          <option value="arcs">Цена по возрастанию</option>
          <option value="candlestick">Цена по убыванию</option>
          <option value="vases">Дате</option>
          <option value="trees">Популярности</option>
        </select>
      </div>
    <!-- END: Sort -->
    </div>
  </div>

  <div class="products catalog__products">

    <!-- BEGIN: common container -->
    <div id="productContainer" class="products__wrapper"></div>
    <!-- END: common container -->

    <!-- BEGIN: arcs -->
    <div  class="products__wrapper" data-category="arcs">
      <figure class="p-card products__p-card">
        <a href="./products/arcs/arc1.html">
          <picture class="p-card__photo">
            <img src="./img/catalog/arcs/arch1.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>

      <figure class="p-card products__p-card">
        <a href="#">
          <picture class="p-card__photo">
            <img src="./img/catalog/arcs/arch3.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>
    </div>
    <!-- END: arcs -->

    <!-- BEGIN: vases -->
    <div class="products__wrapper p-card--thin" data-category="vases">
      <figure class="p-card products__p-card">
        <a href="#">
          <picture class="p-card__photo">
            <img src="./img/catalog/vases/v1.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>

      <figure class="p-card products__p-card">
        <a href="#">
          <picture class="p-card__photo">
            <img src="./img/catalog/vases/v2.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>

      <figure class="p-card products__p-card">
        <a href="#">
          <picture class="p-card__photo">
            <img src="./img/catalog/vases/v3.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>

      <figure class="p-card products__p-card">
        <a href="#">
          <picture class="p-card__photo">
            <img src="./img/catalog/vases/v4.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>

      <figure class="p-card products__p-card">
        <a href="#">
          <picture class="p-card__photo">
            <img src="./img/catalog/vases/v5.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>

      <figure class="p-card products__p-card">
        <a href="#">
          <picture class="p-card__photo">
            <img src="./img/catalog/vases/v6.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>

      <figure class="p-card products__p-card">
        <a href="#">
          <picture class="p-card__photo">
            <img src="./img/catalog/vases/v7.jpg" alt="product" />
          </picture>
        </a>
        <figcaption class="p-card__name">Diamonds</figcaption>
        <figcaption class="p-card__price">3 500 grn</figcaption>
      </figure>
    </div>
    <!-- END: vases -->

    <!-- BEGIN: trees -->
    <div class="products__wrapper" data-category="trees">
        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/trees/tr1.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/trees/tr2.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>
    </div>
    <!-- END: trees -->

    <!-- BEGIN: candlestick -->
    <div class="products__wrapper p-card--thin" data-category="candlestick">
        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/candlestick/cs1.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/candlestick/cs2.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/candlestick/cs3.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/candlestick/cs4.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/candlestick/cs5.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/candlestick/cs6.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/candlestick/cs7.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>
    </div>
    <!-- END: candlestick -->

    <!-- BEGIN: curbstone -->
    <div class="products__wrapper p-card--thin" data-category="curbstone">
        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/curbstone/cb1.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/curbstone/cb2.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/curbstone/cb3.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/curbstone/cb4.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/curbstone/cb5.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/curbstone/cb6.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>

    </div>
    <!-- END: curbstone -->

    <!-- BEGIN: photozone -->
    <div class="products__wrapper" data-category="photozone">
        <figure class="p-card products__p-card">
          <a href="#">
            <picture class="p-card__photo">
              <img src="./img/catalog/photozone/pz1.jpg" alt="product" />
            </picture>
          </a>
          <figcaption class="p-card__name">Diamonds</figcaption>
          <figcaption class="p-card__price">3 500 grn</figcaption>
        </figure>
    </div>
    <!-- END: photozone -->
  </div>

  <div class="subscribe rent__subscribe">
    <div class="subscribe__wrapper">
      <p class="subscribe__text">Подпишитесь на новостную рассылку,
          чтобы первыми узнавать о наших новинках!</p>

      <div class="pro-decor-input subscribe__pro-decor-input">
        <input id="proDecorEmail" class="pro-decor-input__field" type="email" placeholder="email" />
        <label for="proDecorEmail" class="pro-decor-input__label"></label>
      </div>
    </div>
  </div>
</section>
<!-- END: catalog -->

<!-- BEGIN: footer -->
<footer class="footer">
  <div class="phone footer__phone">
    <a href="tel:+3 8096 796 77 07" class="phone__number">+38 096 796 77 07</a>
  </div>
  <ul class="f-socials footer__f-socials">
    <li class="f-socials__item"><a href="#" class="f-socials__link">Подпишитесь на нас в соц сетях</a></li>
    <li class="f-socials__item"></li>
    <li class="f-socials__item"><a href="https://www.facebook.com/prodecroclub.com.ua/" class="f-socials__link">facebook</a></li>
    <li class="f-socials__item"><a href="https://www.instagram.com/prodecorclub/" class="f-socials__link">instagram</a></li>
  </ul>
</footer>
<!-- END: footer -->
<script src="./js/plugins/jquery-3.3.1.min.js"></script>
<script src="./js/plugins/select2.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>