<?php
/*
Template Name: Главная
*/
?>
<?php $page_id = get_the_ID();?>
<?php get_header(); ?>
<!-- <?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, ''), 'full'); ?> -->
<!-- <?php echo carbon_get_post_meta($page_id, ''); ?> -->
<!-- <?php echo nl2br(carbon_get_post_meta($page_id, '')); ?> перенос строки -->
  <main>
    <section class="hero">
      <div class="hero__container">
        <h1 class="hero__title"><?php echo carbon_get_post_meta($page_id, 'hero-title'); ?></h1>
        <h2 class="hero__subtitle"><?php echo carbon_get_post_meta($page_id, 'hero-subtitle1'); ?><br class="w687-none"> <?php echo nl2br(carbon_get_post_meta($page_id, 'hero-subtitle2')); ?><br class="w687-none"> <?php echo carbon_get_post_meta($page_id, 'hero-subtitle3'); ?></h2>
        <div class="hero__btn1-wrapper">
          <button class="hero__btn btn">Записaться на занятия</button>
        </div>
        <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero-img'), 'full'); ?>" alt="child" class="hero__child">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/book.png" alt="book" class="hero__book">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/line-left.svg" alt="line" class="hero__line-left">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/line-right.svg" alt="line" class="hero__line-right">
        <div class="hero__cards">
          <div class="hero__card hero__card--1">
            <div class="hero__card-title"><?php echo carbon_get_post_meta($page_id, 'hero-card1-title'); ?></div>
            <div class="hero__card-program"><?php echo carbon_get_post_meta($page_id, 'hero-card1-subtitle'); ?></div>
            <div class="hero__card-about"><?php echo carbon_get_post_meta($page_id, 'hero-card1-subtitle2'); ?></div>
            <div class="hero__card-services"><?php echo carbon_get_post_meta($page_id, 'hero-card1-descr'); ?>
            </div>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/card1.png" alt="card" class="hero__card-img--1">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/arrow.svg" alt="arrow" class="hero__card-arrow--1">
            <a href="<?php echo get_page_link( 23 ); ?>" class="hero__card-link--1"></a>
          </div>
          <div class="hero__card hero__card--2">
            <div class="hero__card-title hero__card-title--2"><?php echo carbon_get_post_meta($page_id, 'hero-card2-title'); ?></div>
            <div class="hero__card-speech"><?php echo carbon_get_post_meta($page_id, 'hero-card2-title'); ?></div>
            <div class="hero__card-descr"><?php echo carbon_get_post_meta($page_id, 'hero-card2-descr'); ?>
            </div>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/card2.png" alt="card" class="hero__card-img--2">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/arrow.svg" alt="arrow" class="hero__card-arrow--2">
            <a href="<?php echo get_page_link( 20 ); ?>" class="hero__card-link--2"></a>
          </div>
          <div class="hero__card hero__card--3">
            <div class="hero__card-title--3"><?php echo carbon_get_post_meta($page_id, 'hero-card3-title'); ?></div>
            <div class="hero__card-subtitle"><?php echo carbon_get_post_meta($page_id, 'hero-card3-subtitle'); ?></div>
            <div class="hero__card-descr--3"><?php echo nl2br(carbon_get_post_meta($page_id, 'hero-card3-descr')); ?>
            </div>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/card3.png" alt="card" class="hero__card-img--3">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/arrow.svg" alt="arrow" class="hero__card-arrow--3">
            <a href="<?php echo get_page_link( 36 ); ?>" class="hero__card-link--3"></a>
          </div>
        </div>
        <div class="hero__btn-wrapper">
          <button class="hero__btn-2 btn">Записаться к специалисту</button>
        </div>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/hero/line-mid.svg" alt="line" class="hero__line-mid">
      </div>
    </section>
    <div class="line-1"></div>
    <section class="hours">
      <div class="hours__container">
        <div class="hours__wrapper">
          <h2 class="hours__title"><?php echo carbon_get_post_meta($page_id, 'hero-sec2'); ?></h2>
        </div>
      </div>
    </section>
    <div class="line-2"></div>
    <section class="unique">
      <div class="container">
        <h2 class="unique__title"><?php echo carbon_get_post_meta($page_id, 'hero-sec3-title'); ?></span>
        </h2>
        <div class="unique__cards">
          <div class="unique__card unique__card--1">
            <div class="unique__card-title"><?php echo carbon_get_post_meta($page_id, 'hero-sec3-card1-text'); ?></div>
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero-sec3-card1-image'), 'full'); ?>" alt="book" class="unique__card-img">
          </div>
          <div class="unique__card unique__card--2">
            <div class="unique__card-title"><?php echo carbon_get_post_meta($page_id, 'hero-sec3-card2-text'); ?></div>
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero-sec3-card2-image'), 'full'); ?>" alt="hand" class="unique__card-img">
          </div>
          <div class="unique__card unique__card--3">
            <div class="unique__card-title"><?php echo carbon_get_post_meta($page_id, 'hero-sec3-card3-text'); ?></div>
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero-sec3-card3-image'), 'full'); ?>" alt="board" class="unique__card-img">
          </div>
          <div class="unique__card unique__card--4">
            <div class="unique__card-title"><?php echo carbon_get_post_meta($page_id, 'hero-sec3-card4-text'); ?></div>
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero-sec3-card4-image'), 'full'); ?>" alt="logics" class="unique__card-img">
          </div>
          <div class="unique__card unique__card--5">
            <div class="unique__card-title"><?php echo carbon_get_post_meta($page_id, 'hero-sec3-card5-text'); ?></div>
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero-sec3-card5-image'), 'full'); ?>" alt="britannia" class="unique__card-img">
          </div>
          <div class="unique__card unique__card--6">
            <div class="unique__card-title"><?php echo carbon_get_post_meta($page_id, 'hero-sec3-card6-text'); ?></div>
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero-sec3-card6-image'), 'full'); ?>" alt="micro" class="unique__card-img">
          </div>
        </div>
        <div class="unique__all-inclusive"><?php echo carbon_get_post_meta($page_id, 'hero-sec3-descr'); ?></div>
      </div>
    </section>
    <section class="license">
      <div class="container">
        <h2 class="license__title">Лицензия</h2>
        <div class="license__img-wrapper">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/license/license.png" alt="license" class="license__img">
        </div>
        <div class="unique__btn-wrapper">
          <button class="unique__btn btn">Записаться к специалисту</button>
        </div>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/license/star.png" alt="star" class="license__star">
      </div>
    </section>
    <section class="reviews">
      <h2 class="reviews__title"><span class="fw-700 uppercase">Отзывы</span> о нас</h2>
      <div class="container">
<?php
        $reviews = carbon_get_the_post_meta('reviews-items');

if ($reviews) : ?>
    <div class="swiper">
        <div class="reviews__slider swiper-wrapper">
            <?php foreach ($reviews as $review) : ?>
                <div class="reviews__slide swiper-slide">
                    <div class="reviews__stars-wrapper">
                        <?php
                        // Get the attachment ID and then the URL
                        $stars_id = $review['reviews-stars'];
                        $stars_url = wp_get_attachment_image_url($stars_id, 'full');
                        ?>
                        <img src="<?php echo esc_url($stars_url); ?>" alt="stars" class="reviews__stars">
                    </div>
                    <div class="reviews__card-wrapper">
                        <div class="reviews__card">
                            <div class="reviews__card--name">
                                <span class="uppercase"><?php echo $review['reviews-name']; ?></span>
                            </div>
                            <div class="reviews__card-descr">
                                <?php echo $review['reviews-descr']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="reviews__btn-left reviews__btn">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews/btn-left.png" alt="">
        </button>
        <button class="reviews__btn-right reviews__btn">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews/btn-right.png" alt="">
        </button>
    </div>
<?php endif; ?>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/reviews/line-left.svg" alt="line" class="reviews__line-left">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/reviews/line-right.svg" alt="line" class="reviews__line-right">
      </div>
    </section>
    <section class="feedback" id="feedback">
      <div class="container">
        <h2 class="feedback__title">Запишитесь на занятия!</h2>
        <?php echo do_shortcode('[contact-form-7 id="090dbd2" title="Контактная форма 1"]'); ?>
      </div>
    </section>
  </main>

<?php get_footer();?>