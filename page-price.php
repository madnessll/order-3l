<?php
/*
Template Name: Наши цены
*/
?>
<?php $page_id = get_the_ID();?>
<?php get_header(); ?>


  <main>
    <section class="price">
      <div class="price__title-container">
        <h1 class="price__title"><?php echo carbon_get_post_meta($page_id, 'price-title'); ?></h1>
      </div>
      <h2 class="price__subtitle"><?php echo carbon_get_post_meta($page_id, 'price-subtitle'); ?></h2>
      <div class="price__group-container">
        <div class="price__group-title"><?php echo carbon_get_post_meta($page_id, 'price-block-title'); ?></div>
      </div>
      <div class="price__group">
        <div class="price__group-container">
          <div class="price__group-cards">
            <div class="price__group-card">
              <div class="price__group-card-descr">
<?php echo carbon_get_post_meta($page_id, 'price-item-title1'); ?>
              </div>
              <div class="price__group-card-bottom">
                <div class="price__group-card-bottom-left">
                  <div class="price__group-card-bottom-left-name"><?php echo carbon_get_post_meta($page_id, 'price-item-subtitle1-left'); ?></div>
                  <div class="price__group-card-bottom-left-price"><?php echo carbon_get_post_meta($page_id, 'price-item-price1-left'); ?></div>
                </div>
                <div class="price__group-card-bottom-right">
                  <div class="price__group-card-bottom-right-name"><?php echo carbon_get_post_meta($page_id, 'price-item-subtitle1-right'); ?></div>
                  <div class="price__group-card-bottom-right-price"><?php echo carbon_get_post_meta($page_id, 'price-item-price1-right'); ?></div>
                  <div class="price__group-card-bottom-right-small"><?php echo carbon_get_post_meta($page_id, 'price-item-descr1'); ?></div>
                </div>
              </div>
            </div>
            <div class="price__group-card">
              <div class="price__group-card-descr">
                <?php echo carbon_get_post_meta($page_id, 'price-item-title2'); ?>
              </div>
              <div class="price__group-card-bottom">
                <div class="price__group-card-bottom-left">
                  <div class="price__group-card-bottom-left-name"><?php echo carbon_get_post_meta($page_id, 'price-item-subtitle2-left'); ?></div>
                  <div class="price__group-card-bottom-left-price"><?php echo carbon_get_post_meta($page_id, 'price-item-price2-left'); ?></div>
                </div>
                <div class="price__group-card-bottom-right">
                  <div class="price__group-card-bottom-right-name"><?php echo carbon_get_post_meta($page_id, 'price-item-subtitle2-right'); ?></div>
                  <div class="price__group-card-bottom-right-price"><?php echo carbon_get_post_meta($page_id, 'price-item-price2-right'); ?></div>
                  <div class="price__group-card-bottom-right-small"><?php echo carbon_get_post_meta($page_id, 'price-item-descr2'); ?></div>
                </div>
              </div>
            </div>
            <div class="price__group-card">
              <div class="price__group-card-descr">
                <?php echo carbon_get_post_meta($page_id, 'price-item-title3'); ?>
              </div>
              <div class="price__group-card-bottom-right">
                <div class="price__group-card-bottom-right-name"><?php echo carbon_get_post_meta($page_id, 'price-item-subtitle3-right'); ?></div>
                <div class="price__group-card-bottom-right-price"><?php echo carbon_get_post_meta($page_id, 'price-item-price3-right'); ?></div>
                <div class="price__group-card-bottom-right-small"><?php echo carbon_get_post_meta($page_id, 'price-item-descr3'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="price__group-container">
        <h2 class="price___individual"><?php echo carbon_get_post_meta($page_id, 'price2-title'); ?></h2>
      </div>
      <div class="price__individual">
        <div class="price__group-container">
          <div class="price__individual-cards">
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price2-subtitle1'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price2-price1'); ?></div>
            </div>
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price2-subtitle2'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price2-price2'); ?></div>
              <div class="price__individual-card-descr"><?php echo carbon_get_post_meta($page_id, 'price2-descr2'); ?></div>
            </div>
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price2-subtitle3'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price2-price3'); ?></div>
              <div class="price__individual-card-descr"><?php echo carbon_get_post_meta($page_id, 'price2-descr3'); ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="price__group-container">
        <h2 class="price___cons"><?php echo carbon_get_post_meta($page_id, 'price3-title'); ?></h2>
      </div>
      <div class="price__individual">
        <div class="price__group-container">
          <div class="price__individual-cards">
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price3-subtitle1'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price3-price1'); ?></div>
            </div>
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price3-subtitle2'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price3-price2'); ?></div>
            </div>
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price3-subtitle3'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price3-price3'); ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="price__psy-container">
        <h2 class="price__psy"><?php echo carbon_get_post_meta($page_id, 'price4-title'); ?></h2>
      </div>
      <div class="price__group-container">
        <h3 class="price__psy-descr"><?php echo carbon_get_post_meta($page_id, 'price4-subtitle'); ?></h3>
      </div>
      <div class="price__psy-offer">
        <div class="price__group-container">
          <div class="price__psy-cards">
            <div class="price__psy-card">
              <div class="price__psy-card-name"><?php echo carbon_get_post_meta($page_id, 'price4-subtitle1'); ?></div>
              <div class="price__psy-card-price"><?php echo carbon_get_post_meta($page_id, 'price4-price1'); ?></div>
            </div>
            <div class="price__psy-card">
              <div class="price__psy-card-name"><?php echo carbon_get_post_meta($page_id, 'price4-subtitle2'); ?></div>
              <div class="price__psy-card-price"><?php echo carbon_get_post_meta($page_id, 'price4-price2'); ?></div>
              <div class="price__psy-card-descr"><?php echo carbon_get_post_meta($page_id, 'price4-descr2'); ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="price__group-container">
        <h2 class="price___individual"><?php echo carbon_get_post_meta($page_id, 'price5-title'); ?></h2>
      </div>
      <div class="price__psy-offer">
        <div class="price__group-container">
          <div class="price__psy-cards">
            <div class="price__psy-card">
              <div class="price__psy-card-name"><?php echo carbon_get_post_meta($page_id, 'price5-subtitle1'); ?></div>
              <div class="price__psy-card-price"><?php echo carbon_get_post_meta($page_id, 'price5-price1'); ?></div>
              <div class="price__psy-card-descr"><?php echo carbon_get_post_meta($page_id, 'price5-descr1'); ?></div>
            </div>
            <div class="price__psy-card">
              <div class="price__psy-card-name"><?php echo carbon_get_post_meta($page_id, 'price5-subtitle2'); ?></div>
              <div class="price__psy-card-price"><?php echo carbon_get_post_meta($page_id, 'price5-price2'); ?></div>
              <div class="price__psy-card-descr"><?php echo carbon_get_post_meta($page_id, 'price5-descr2'); ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="price__grid-container">
        <div class="price__left-background">
          <div class="price__content">
            <div class="price__content-1"><?php echo carbon_get_post_meta($page_id, 'price6-title'); ?></div>
            <div class="price__content-2"><?php echo carbon_get_post_meta($page_id, 'price6-price'); ?></div>
          </div>
        </div>
      </div>
      <div class="price__group-container">
        <h2 class="price___cons"><?php echo carbon_get_post_meta($page_id, 'price7-title'); ?></h2>
      </div>
      <div class="price__individual ">
        <div class="price__group-container">
          <div class="price__individual-cards price__individual-cards--last">
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price7-subtitle1'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price7-price1'); ?></div>
            </div>
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price7-subtitle2'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price7-price2'); ?></div>
            </div>
            <div class="price__individual-card">
              <div class="price__individual-card-name"><?php echo carbon_get_post_meta($page_id, 'price7-subtitle3'); ?></div>
              <div class="price__individual-card-price"><?php echo carbon_get_post_meta($page_id, 'price7-price3'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- <?php echo carbon_get_post_meta($page_id, ''); ?> -->


    <section class="school">
      <div class="price__group-container">
        <div class="school__title-wrapper">
          <h2 class="school__title"><?php echo carbon_get_post_meta($page_id, 'price8-title'); ?></h2>
        </div>
        <h3 class="school__subtitle"><?php echo carbon_get_post_meta($page_id, 'price8-subtitle'); ?></h3>
        <div class="school__block">
          <div class="school__top">
            <div class="school__top-left"><?php echo carbon_get_post_meta($page_id, 'price8-text-left'); ?>
            </div>
            <div class="school__top-right"><?php echo carbon_get_post_meta($page_id, 'price8-text-right'); ?>
            </div>
          </div>
          <div class="school__items">
            <div class="school__item"><?php echo carbon_get_post_meta($page_id, 'price8-item1'); ?></div>
            <div class="school__item"><?php echo carbon_get_post_meta($page_id, 'price8-item2'); ?></div>
            <div class="school__item"><?php echo carbon_get_post_meta($page_id, 'price8-item3'); ?></div>
            <div class="school__item"><?php echo carbon_get_post_meta($page_id, 'price8-item4'); ?></div>
          </div>
          <div class="school__bottom">
            <div class="school__bottom-left"><?php echo carbon_get_post_meta($page_id, 'price8-text-bottom'); ?></div>
            <div class="school__bottom-right"><?php echo carbon_get_post_meta($page_id, 'price8-price'); ?></div>
          </div>
        </div>
      </div>
    </section>
    <div class="want-to-start want-to-start--pre">
      <div class="container">
        <div class="want-to-start__wrapper">
          <div class="want-to-start__title">Хотите начать занятия?</div>
          <a href="<?php echo get_page_link( 40 ); ?>" class="want-to-start__btn want-to-start__btn--pre">Записаться на занятия</a>
        </div>
      </div>
    </div>
  </main>



<?php get_footer(); ?>