<footer class="footer">
    <div class="container">
      <div class="footer__title-wrapper">
        <h2 class="footer__title">Контакты</h2>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/ellipse.svg" alt="ellipse" class="footer__ellipse">
      </div>
      <div class="footer__wrapper">
        <div class="footer__card">
          <div class="footer__card-title">Адрес</div>
          <div class="footer__card-subtitle"><?php echo nl2br(carbon_get_theme_option('adress-1'));?></div>
          <div class="footer__card-title">Телефон</div>
          <a href="tel:<?php echo carbon_get_theme_option('site_phone1_digits');?>" class="footer__card-subtitle mb-81"><?php echo carbon_get_theme_option('site_phone1');?></a>
          <div class="footer__card-title">Адрес</div>
          <div class="footer__card-subtitle"><?php echo nl2br(carbon_get_theme_option('adress-2'));?></div>
          <div class="footer__card-title">Телефон</div>
          <a href="tel:<?php echo carbon_get_theme_option('site_phone2_digits');?>" class="footer__card-subtitle mb-0"><?php echo carbon_get_theme_option('site_phone2');?></a>
        </div>
        <div class="footer__map">
          <iframe
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A0f7160c6464373e9dc1cc0eeaa785e8515ecd36899108128c6f3a15ad3b07b15&amp;source=constructor"
            width="799" height="288" frameborder="0" class="responsive-iframe"></iframe>
        </div>
      </div>
      <div class="footer__soc-wrapper">
        <div class="footer__socials-name">Социальные сети</div>
        <div class="footer__socials">
          <a href="<?php echo carbon_get_theme_option('vk');?>" class="footer__soc">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/vk.png" alt="vk">
          </a>
          <a href="<?php echo carbon_get_theme_option('tg');?>" class="footer__soc">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/footer/tg.png" alt="tg">
          </a>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>