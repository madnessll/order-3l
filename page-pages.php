<?php
/*
Template Name: Как развить речевое дыхание
*/
?>
<?php $page_id = get_the_ID();?>
<?php get_header(); ?>



<main>
	<section class="breath">
		<div class="advices__container">
			<h1 class="breath__title"><?php echo carbon_get_post_meta($page_id, 'breath-title'); ?></h1>
			<div class="breath__img-wrapper">
				<img src="<?php echo wp_get_attachment_image_url(carbon_get_post_meta($page_id, 'breath-img'), 'full'); ?>" alt="work" class="breath__img">
			</div>
			<div class="breath__texts">
				<?php
                $breath_items = carbon_get_post_meta($page_id, 'breath-items');
                if (!empty($breath_items)) {
                    foreach ($breath_items as $item) {
                        echo '<div class="breath__text">' . $item['breath-descr'] . '</div>';
                    }
                }
                ?>
			</div>
		</div>
	</section>
</main>




<?php get_footer(); ?>