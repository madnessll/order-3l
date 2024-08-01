<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header__container">
      <div class="header__wrapper">
        <div class="header__logo">
          <div class="header__logo-title">Болтунишка</div>
          <div class="header__logo-subtitle">логопедический центр</div>
          <a href="<?php echo get_page_link( 9 ); ?>" class="header__logo-link"></a>
        </div>
        <div class="header__nav">
          <ul class="header__ul">
            <li class="header__li"><a href="<?php echo get_page_link( 9 ); ?>" class="header__li-link">Главная</a></li>
            <li class="header__li"><a href="#" class="header__li-link">Услуги</a></li>
            <li class="header__li"><a href="<?php echo get_page_link( 34 ); ?>" class="header__li-link">Наши цены</a></li>
            <li class="header__li"><a href="<?php echo get_page_link( 18 ); ?>" class="header__li-link">Советы логопеда</a></li>
            <li class="header__li"><a href="https://xn--80afddwhdpdcbck.xn--p1acf/" class="header__li-link">Онлайн - занятия</a></li>
            <li class="header__li"><a href="<?php echo get_page_link( 40 ); ?>" class="header__li-link">Контакты</a></li>
          </ul>
        </div>
      </div>
      <div class="burger">
        <span></span>
      </div>
      <div class="mobile-menu">
        <nav class="mobile-menu__nav">
          <ul class="mobile-menu__list">
            <li class="mobile-menu__item">
              <a href="#" class="mobile-menu__item-link">Услуги</a>
            </li>
            <li class="nav__item">
              <a href="<?php echo get_page_link( 34 ); ?>" class="mobile-menu__item-link">Наши цены</a>
            </li>
            <li class="mobile-menu__item">
              <a href="<?php echo get_page_link( 18 ); ?>" class="mobile-menu__item-link">Советы логопеда</a>
            </li>
            <li class="mobile-menu__item">
              <a href="https://xn--80afddwhdpdcbck.xn--p1acf/" class="mobile-menu__item-link">Онлайн - занятия</a>
            </li>
            <li class="mobile-menu__item">
              <a href="<?php echo get_page_link( 40 ); ?>" class="mobile-menu__item-link">Контакты</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>