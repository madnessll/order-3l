<?php
/*
Template Name: Контакты
*/
?>
<?php $page_id = get_the_ID();?>
<?php get_header(); ?>


<section class="feedback" id="feedback">
  <div class="container">
    <h2 class="feedback__title">Запишитесь на занятия!</h2>
    <?php echo do_shortcode('[contact-form-7 id="090dbd2" title="Контактная форма 1"]'); ?>
  </div>
</section>


<?php get_footer(); ?>