<div class="main-header">
  <div class="main-header-top">
    <div class="container">
      <div class="main-header-top__inner">
        <div class="logo"><a class="logo__link" href="/"><span class="logo__title">Ремонт окон</span><span class="logo__tagline">Ремонт деревянных, пластиковых <br>и алюминиевых окон в Москве и области</span></a></div>
        <div class="search">
          <form class="search-form">
            <input class="search-form__input" type="text" placeholder="Поиск" required>
            <button class="search-form__submit" type="submit"></button>
          </form>
        </div>
        <div class="phones">
          <div class="phones__stage"><a class="phones__link" href="tel:+74950000000">+7 (495) 000-00-00</a><span class="phones__text">ежедневно с 9:00 до 21:00</span></div>
          <div class="phones__stage"><a class="phones__link" href="tel:+79269223472">+7 (926) 922-34-72</a><span class="phones__text"><span class="phones__messenger phones__messenger_whatsapp">WhatsApp</span><span class="phones__messenger phones__messenger_viber">Viber</span></span></div>
        </div><a class="callback btn a-btn-v" href="#callback"><span>Заказать звонок</span></a>
      </div>
    </div>
  </div>
  <!-- main-header-top-->
  <div class="main-header-bottom">
    <div class="container">
      <div class="main-menu">
        <div class="menu-toggle"><i class="icon-toggle"><span></span><span></span><span></span></i></div>
        <jdoc:include type="modules" name="top-menu" />
      </div>
    </div>
  </div>
  <!-- main-header-bottom-->
  <?php if ($_SERVER['REQUEST_URI'] == '/'): ?>
    <div class="intro">
    <div class="container">
      <h1 class="intro__header">Ремонт окон в Москве за 1–3 дня</h1>
      <p class="intro__subheader">Гарантия на все виды работ до 3 лет</p>
      <div class="intro-items"><a class="intro__item" href="#"><span class="intro__item-image-part"><img class="intro__item-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro-01.png" alt=""></span><span class="intro__item-text-part"><span class="intro__item-text" href="#">Ремонт <br>пластиковых окон</span><span class="intro__item-price price">от 1100 Р</span></span></a><a class="intro__item" href="#"><span class="intro__item-image-part"><img class="intro__item-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro-02.png" alt=""></span><span class="intro__item-text-part"><span class="intro__item-text" href="#">Ремонт <br>деревянных окон</span><span class="intro__item-price price">от 1300 Р</span></span></a><a class="intro__item" href="#"><span class="intro__item-image-part"><img class="intro__item-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro-03.png" alt=""></span><span class="intro__item-text-part"><span class="intro__item-text" href="#">Ремонт <br>алюминиевых окон</span><span class="intro__item-price price">от 1800 Р</span></span></a><a class="intro__item" href="#"><span class="intro__item-image-part"><img class="intro__item-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro-04.png" alt=""></span><span class="intro__item-text-part"><span class="intro__item-text" href="#">Замена <br>стеклопакета</span><span class="intro__item-price price">от 5000 Р</span></span></a><a class="intro__item" href="#"><span class="intro__item-image-part"><img class="intro__item-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro-05.png" alt=""></span><span class="intro__item-text-part"><span class="intro__item-text" href="#">Москитные <br>сетки</span><span class="intro__item-price price">от 1000 Р</span></span></a><a class="intro__item" href="#"><span class="intro__item-image-part"><img class="intro__item-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro-06.png" alt=""></span><span class="intro__item-text-part"><span class="intro__item-text" href="#">Тонировка <br>окон</span><span class="intro__item-price price">от 1200 Р</span></span></a><a class="intro__item" href="#"><span class="intro__item-image-part"><img class="intro__item-image" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro-07.png" alt=""></span><span class="intro__item-text-part"><span class="intro__item-text" href="#">Аксессуары</span><span class="intro__item-price price">от 300 Р</span></span></a>
      </div>
    </div>
  </div>
  <!-- intro-->
  <?php endif; ?>
</div>
