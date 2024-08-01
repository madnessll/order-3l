<?php
/*
Template Name: Советы логопеда
*/
?>
<?php $page_id = get_the_ID();?>
<?php get_header(); ?>
<!-- <?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'hero-img'), 'full'); ?> -->
<!-- <?php echo carbon_get_post_meta($page_id, ''); ?> -->
<!-- <?php echo nl2br(carbon_get_post_meta($page_id, '')); ?> перенос строки -->


  <main>
    <section class="advices">
      <div class="advices__container">
        <h1 class="advices__title">Советы логопеда</h1>
        <div class="advices__cards">
          <div class="advices__cards-1">
            <div class="advices__img-wrapper">
              <a href="<?php echo get_page_link( 44 ); ?>" class="advices__img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advices/1.png" alt="1" class="advices__img advices__img--horizont">
              </a>
            </div>
            <div class="advices__img-wrapper">
              <a href="<?php echo get_page_link( 51 ); ?>" class="advices__img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advices/2.png" alt="2" class="advices__img">
              </a>
            </div>
            <div class="advices__img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advices/3.png" alt="3" class="advices__img">
            </div>
          </div>
          <div class="advices__cards-2">
            <div class="advices__img-wrapper">
              <a href="<?php echo get_page_link( 54 ); ?>" class="advices__img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advices/4.png" alt="4" class="advices__img">
              </a>
            </div>
            <div class="advices__img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advices/5.png" alt="5" class="advices__img">
            </div>
            <div class="advices__img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advices/6.png" alt="6" class="advices__img advices__img--horizont">
            </div>
          </div>
          <div class="advices__cards-3">
            <div class="advices__img-wrapper">
              <a href="<?php echo get_page_link( 57 ); ?>" class="advices__img-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advices/7.png" alt="7" class="advices__img advices__img--horizont">
              </a>
            </div>
            <div class="advices__img-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/advices/8.png" alt="8" class="advices__img advices__img--horizont">
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="want-to-start want-to-start--pre">
      <div class="container">
        <div class="want-to-start__wrapper">
          <div class="want-to-start__title">Хотите начать занятия?</div>
          <a href="<?php echo get_page_link( 40 ); ?>" class="want-to-start__btn want-to-start__btn--pre">Записаться к логопеду</a>
        </div>
      </div>
    </div>
  </main>


<?php get_footer(); ?>