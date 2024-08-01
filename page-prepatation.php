<?php 
/*
Template Name: Подготовка к школе
*/
?>
<?php $page_id = get_the_ID();?>
<?php get_header(); ?>

  <main>
    <section class="hero-pre">
      <div class="preparation-container">
        <div class="hero-pre__wrapper">
          <div class="hero-pre__content">
            <h1 class="hero-pre__title"><?php echo carbon_get_post_meta($page_id, 'prep-title'); ?></h1>
            <div class="hero-pre__program"><?php echo carbon_get_post_meta($page_id, 'prep-subtitle'); ?></div>
            <h2 class="hero-pre__subtitle"><?php echo carbon_get_post_meta($page_id, 'prep-descr'); ?></h2>
          </div>
          <div class="hero-pre__img">
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'prep-img'), 'full'); ?>" alt="children" class="hero-pre__children">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/psychologe/child/petal.png" alt="petal" class="hero-pre__petal">
          </div>
        </div>
        <div class="hero-pre__descr-wrapper">
          <div class="hero-pre__descr"><?php echo carbon_get_post_meta($page_id, 'prep-descr2'); ?></div>
        </div>
        <div class="hero-pre__btn-wrapper">
          <a href="<?php echo get_page_link( 40 ); ?>" class="hero-pre__btn">Записаться на занятие</a>
        </div>
      </div>
    </section>
    <section class="subjects">



      <div class="preparation-container">
        <h2 class="subjects__title"><?php echo carbon_get_post_meta($page_id, 'prep2-title'); ?></h2>
        <div class="subjects__wrapper subjects__wrapper-1">
          <div class="subjects__left-1">
            <div class="unique__card subjects__card subjects__card--2 unique__card--2">
              <div class="unique__card-title subjects__card-title"><?php echo carbon_get_post_meta($page_id, 'prep2-text-img1'); ?></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/preparation/subjects/hand.png" alt="hand"
                class="unique__card-img subjects__card-img subjects__card-img--hand">
            </div>
            <div class="unique__card subjects__card subjects__card--1 unique__card--1">
              <div class="unique__card-title subjects__card-title"><?php echo carbon_get_post_meta($page_id, 'prep2-text-img2'); ?></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/preparation/subjects/book.png" alt="book" class="unique__card-img subjects__card-img">
            </div>
          </div>
          <div class="subjects__right-1">
            <div class="subject__name"><?php echo carbon_get_post_meta($page_id, 'prep2-subtitle1'); ?></div>
            <div class="subject__descr-1"><?php echo carbon_get_post_meta($page_id, 'prep2-descr1'); ?>
            </div>
          </div>
        </div>
        <div class="subjects__wrapper subjects__wrapper--2">
          <div class="subjects__left-1">
            <div class="unique__card subjects__card subjects__card--3 unique__card--3">
              <div class="unique__card-title subjects__card-title"><?php echo carbon_get_post_meta($page_id, 'prep2-text-img3'); ?></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/preparation/subjects/board.png" alt="board"
                class="unique__card-img subjects__card-img subjects__card-img--board">
            </div>
            <div class="unique__card subjects__card subjects__card--4 unique__card--4">
              <div class="unique__card-title subjects__card-title"><?php echo carbon_get_post_meta($page_id, 'prep2-text-img4'); ?></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/preparation/subjects/logics.png" alt="logics"
                class="unique__card-img subjects__card-img subjects__card-img--logics">
            </div>
          </div>
          <div class="subjects__right-1">
            <div class="subject__name"><?php echo carbon_get_post_meta($page_id, 'prep2-subtitle2'); ?></div>
            <div class="subject__descr-1"><?php echo carbon_get_post_meta($page_id, 'prep2-descr2'); ?>
            </div>
          </div>
        </div>
        <div class="subjects__wrapper">
          <div class="subjects__left-1">
            <div class="unique__card subjects__card subjects__card--5 unique__card--5">
              <div class="unique__card-title subjects__card-title"><?php echo carbon_get_post_meta($page_id, 'prep2-text-img5'); ?></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/preparation/subjects/britannia.png" alt="britannia"
                class="unique__card-img subjects__card-img subjects__card-img--britannia">
            </div>
          </div>
          <div class="subjects__right-1">
            <div class="subject__name"><?php echo carbon_get_post_meta($page_id, 'prep2-subtitle3'); ?></div>
            <div class="subject__descr-1"><?php echo carbon_get_post_meta($page_id, 'prep2-descr3'); ?>
            </div>
          </div>
        </div>
        <div class="subjects__wrapper subjects__wrapper--2">
          <div class="subjects__left-1">
            <div class="unique__card subjects__card subjects__card--6 unique__card--6">
              <div class="unique__card-title subjects__card-title"><?php echo carbon_get_post_meta($page_id, 'prep2-text-img6'); ?></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/preparation/subjects/micro.png" alt="micro"
                class="unique__card-img subjects__card-img subjects__card-img--micro">
            </div>
          </div>
          <div class="subjects__right-1">
            <div class="subject__name"><?php echo carbon_get_post_meta($page_id, 'prep2-subtitle4'); ?></div>
            <div class="subject__descr-1"><?php echo carbon_get_post_meta($page_id, 'prep2-descr4'); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="text-pre">
      <div class="preparation-container">
        <div class="text-pre__wrapper">
          <div class="text-pre__text text-pre__text--1"><?php echo carbon_get_post_meta($page_id, 'prep3-descr1'); ?></div>
          <div class="text-pre__block">
            <div class="text-pre__block-title"><?php echo carbon_get_post_meta($page_id, 'prep3-title'); ?></div>
            <?php
            $prep3_items = carbon_get_the_post_meta('prep3-items');
            if ($prep3_items) {
              foreach ($prep3_items as $class) {
                  echo '<div class="text-pre__block-item">' . esc_html($class['prep3-item-title']) . '</div>';
              }
            }
            ?>
          </div>
          <div class="text-pre__text text-pre__text--2"><?php echo carbon_get_post_meta($page_id, 'prep3-descr2'); ?></div>
        </div>
      </div>
    </div>

    <!-- <?php echo carbon_get_post_meta($page_id, ''); ?> -->

    <div class="last-pre">
      <div class="preparation-container">
        <div class="last-pre__wrapper">
          <div class="last-pre__img">
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'prep-last-image'), 'full'); ?>" alt="work" class="last-pre__work">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/psychologe/child/petal.png" alt="petal" class="last-pre__petal">
          </div>
          <div class="last-pre__descr"><?php echo carbon_get_post_meta($page_id, 'prep-last-descr'); ?></div>
        </div>
      </div>
    </div>
    <div class="want-to-start want-to-start--pre">
      <div class="container">
        <div class="want-to-start__wrapper">
          <div class="want-to-start__title">Хотите начать занятия?</div>
          <a href="<?php echo get_page_link( 40 ); ?>" class="want-to-start__btn want-to-start__btn--pre">Подготовка к школе</a>
        </div>
      </div>
    </div>
  </main>


<?php get_footer(); ?>