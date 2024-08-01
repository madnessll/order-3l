<?php
/*
Template Name: Детский подростковый психолог
*/
?>
<?php $page_id = get_the_ID();?>
<?php get_header(); ?>

<!-- <?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, ''), 'full'); ?> -->
<!-- <?php echo carbon_get_post_meta($page_id, ''); ?> -->

  <main>
    <section class="child">
      <div class="container">
        <div class="child__wrapper">
          <div class="child__left">
            <h1 class="child__title"><?php echo carbon_get_post_meta($page_id, 'psix-title'); ?></h1>
            <div class="child__descr"><?php echo carbon_get_post_meta($page_id, 'psix-descr'); ?></div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/psychologe/child/petal.png" alt="petal" class="child__petal">
          </div>
          <div class="child__img">
            <img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'psix-image'), 'full'); ?>" alt="work">
          </div>
        </div>
        <div class="child__wrapper2">
          <a href="<?php echo get_page_link( 40 ); ?>" class="child__btn">Записаться на занятие</a>
          <div class="child__card"><?php echo carbon_get_post_meta($page_id, 'psix-descr2'); ?></div>
        </div>
      </div>
    </section>
    <section class="how-many">
      <div class="container how-many__container">
        <h2 class="how-many__title"><?php echo carbon_get_post_meta($page_id, 'psix2-title'); ?></h2>
        <?php 
        // Получаем элементы из метаполя
        $psix2_items = carbon_get_the_post_meta('psix2-items');
        if ($psix2_items) : ?>
          <div class="how-many__list">
            <?php foreach ($psix2_items as $index => $item) : ?>
              <div class="how-many__item">
                <div class="how-many__digit"><?php echo esc_html($item['psix2-item-digit']); ?>.</div>
                <div class="how-many__descr"><?php echo $item['psix2-item-title']; ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="how-many__time"><?php echo carbon_get_post_meta($page_id, 'psix2-last'); ?></div>
      </div>
    </section>


    <!-- <?php echo carbon_get_post_meta($page_id, ''); ?> -->


    <section class="troubles">
      <div class="container">
        <h2 class="troubles__title">Какие проблемы решаем?</h2>
        <?php 
        $psix3_items = carbon_get_the_post_meta('psix3-items');

        if ($psix3_items) : ?>
          <div class="troubles__cards">
            <?php foreach ($psix3_items as $item) : 
              $image_url = wp_get_attachment_image_url($item['psix3-item-image'], 'full');?>
              <div class="troubles__card">
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo $item['psix3-item-title']; ?>" class="troubles__card-img">
                <div class="troubles__card-descr"><?php echo $item['psix3-item-title']; ?></div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </section>
    <section class="methods">
      <div class="container">
        <h2 class="methods__title"><?php echo carbon_get_post_meta($page_id, 'psix4-title'); ?></h2>
        <h3 class="methods__subtitle"><?php echo carbon_get_post_meta($page_id, 'psix4-descr'); ?></h3>
        <div class="methods__descr"><?php echo carbon_get_post_meta($page_id, 'psix4-descr2'); ?></div>
      </div>
    </section>
    <div class="want-to-start">
      <div class="container">
        <div class="want-to-start__wrapper">
          <div class="want-to-start__title">Хотите начать занятия?</div>
          <a href="<?php echo get_page_link( 40 ); ?>" class="want-to-start__btn">Записаться к психологу</a>
        </div>
      </div>
    </div>
  </main>


<?php get_footer(); ?>