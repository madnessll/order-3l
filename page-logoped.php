<?php
/*
Template Name: Логопед
*/
?>
<?php $page_id = get_the_ID();?>
<?php get_header(); ?>

  <main>
    <section class="log-hero">
      <div class="log-hero__container">
        <div class="log-hero__wrapper">
          <div class="log-hero__content">
            <h1 class="log-hero__title"><?php echo carbon_get_post_meta($page_id, 'logo-title'); ?></h1>
            <h2 class="log-hero__subtitle"><?php echo carbon_get_post_meta($page_id, 'logo-descr'); ?>
            </h2>
            <div class="log-hero__methods"><?php echo carbon_get_post_meta($page_id, 'logo-title2'); ?></div>
            <div class="log-hero__descr log-hero__descr--1"><?php echo carbon_get_post_meta($page_id, 'logo-descr2'); ?></div>
            <div class="log-hero__descr log-hero__descr--2"><?php echo carbon_get_post_meta($page_id, 'logo-descr3'); ?>
            </div>
          </div>
          <div class="log-hero__right">
            <div class="log-hero__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoped/children.png" alt="children" class="log-hero__children">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoped/rectangle.png" alt="rectangle" class="log-hero__reactangle">
            </div>
            <a href="<?php echo get_page_link( 40 ); ?>" class="log-hero__btn">Записаться на занятие</a>
          </div>
        </div>
      </div>
    </section>
    <section class="classes">
      <div class="classes__container">
        <h2 class="classes__title"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-title'); ?></h2>
        <div class="classes__group">
          <div class="classes__group-title"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-title-card-blue'); ?></div>
          <div class="classes__group-subtitle"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-subtitle-card-blue'); ?></div>
          <div class="classes__group-descr"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-descr-card-blue'); ?></div>
        </div>
        <div class="classes__stages">
          <div class="classes__stages-title"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-title-card-pink'); ?></div>
          <div class="classes__stages-subtitle"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-subtitle-card-pink'); ?></div>
          <div class="classes__stages-descr"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-descr-card-pink'); ?></div>
          <div class="classes__stages-subtitle"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-subtitle2-card-pink'); ?></div>
          <div class="classes__stages-descr"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-descr2-card-pink'); ?></div>
          <div class="classes__stages-subtitle"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-subtitle3-card-pink'); ?></div>
          <div class="classes__stages-descr"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-descr3-card-pink'); ?></div>
          <div class="classes__stages-descr"><span class="fw-700"><?php echo carbon_get_post_meta($page_id, 'logo-sec2-descr'); ?></div>
        </div>
        <div class="classes__group-2">
          <div class="classes__group-2-title"><?php echo carbon_get_post_meta($page_id, 'logo-sec3-title'); ?></div>
          <div class="classes__group-2-descr"><?php echo carbon_get_post_meta($page_id, 'logo-sec3-descr'); ?></div>
        </div>

        


<div class="classes__individual-wrapper">
  <div class="classes__individual">
    <div class="classes__individual-title"><?php echo carbon_get_post_meta($page_id, 'logo-sec4-title'); ?></div>
    <div class="classes__individual-descr"><?php echo carbon_get_post_meta($page_id, 'logo-sec4-descr'); ?></div>
    <?php
    $individual_classes = carbon_get_the_post_meta('individual_classes');
    if ($individual_classes) {
        foreach ($individual_classes as $class) {
            echo '<div class="classes__individual-item">' . esc_html($class['logo-class-item-title']) . '</div>';
        }
    }
    ?>
    <div class="classes__individual-last"><?php echo carbon_get_post_meta($page_id, 'logo-sec4-descr-last'); ?></div>
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