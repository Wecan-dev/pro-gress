<?php get_header(); ?>
<section>
  <div class="login">
    <div class="main-login">
      <div class="main-login__content">
        <div class="content-login__img">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
          <p>Academy</p>
        </div>
      </div>
      <div class="main-login__content">
        <div class="content-login__form">
          <div class="form-login__img">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo-progress- white.png" alt="">
          </div>
          <div class="form-login__form">
            <?php echo do_shortcode('[user_registration_form id="17"]'); ?>
          </div>
          <div class="form-login__btn">
            <a href="#">Soporte</a>
            <a href="#">Términos de Uso</a>
            <a href="#">Política de Privacidad</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>