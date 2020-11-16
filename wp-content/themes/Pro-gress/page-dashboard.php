<?php login(''); get_header(); ?>
<section>
    <?php get_template_part('partials/menu/sidebar__navbar'); ?>

    <div class="sidebar__content">
      <?php get_template_part('partials/menu/sidebar__content_top'); ?>
      <div class="sidebar__content--content ">
        <div class="dashboard-content padding-rl">
          <div class="dashboard-content__content">
            <div class="dashboard-content__video">
              <a href="#" class="dashboard-content__video--video">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
              </a>
              <div class="etiqueta-workputs">
                <p>Workouts de hoy <?php echo wp_get_current_user()->ID; ?></p>
              </div>
              <div class="pro-videos__description">
                <div class="slider-dashboard__text">
                  <div class="slider-dashboard__up">
                    <p>Hace 20min</p>
                  </div>
                  <div class="slider-dashboard__title">
                    <p>Como descargar estos 3 músculos</p>
                  </div>
                  <a href="#" class="slider-dashboard__cat">
                    Rehablilitación
                  </a>
                </div>
              </div>
              <div class="dashboard-videos__btn">
                <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="dashboard-content__progra">
              <div class="dashboard-progra__title">
                <p>Programación</p>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </div>
              <div class="dashboard-progra__tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">7 Días</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">14 Días</a>
                  </li>
                </ul>
              </div>
              <div class="dashboard-progra__content">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <div class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </div>
                    </div>
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                    <div class="progra-content__item">
                      <div class="progra-item__number">
                        <p>15</p>
                        <span>sep</span>
                      </div>
                      <a href="#" class="progra-item__content">
                        <div class="progra-item__content--img">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                        </div>
                        <div class="progra-item__content--text">
                          <p>Planche</p>
                          <span>Principiantes - M1</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="video-dashboard__content">
          <div class="video-dashboard__title">
            <div class="video-dashboard__title--text">
              <p>Videos recientes</p>
            </div>
            <div class="video-dashboard__title--btn">
              <a href="#">Ver todo</a>
            </div>
          </div>
          <div class="video-dashboard__video">
            <div class="video-dashboard__slider">
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <a href="#" class="slider-dashboard__cat">
                      Rehablilitación
                    </a>
                    <div class="slider-dashboard__title">
                      <p>Como descargar estos 3 músculos</p>
                    </div>
                    <div class="slider-dashboard__up">
                      <p>Hace 20min</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <a href="#" class="slider-dashboard__cat">
                      Rehablilitación
                    </a>
                    <div class="slider-dashboard__title">
                      <p>Como descargar estos 3 músculos</p>
                    </div>
                    <div class="slider-dashboard__up">
                      <p>Hace 20min</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <a href="#" class="slider-dashboard__cat">
                      Rehablilitación
                    </a>
                    <div class="slider-dashboard__title">
                      <p>Como descargar estos 3 músculos</p>
                    </div>
                    <div class="slider-dashboard__up">
                      <p>Hace 20min</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <a href="#" class="slider-dashboard__cat">
                      Rehablilitación
                    </a>
                    <div class="slider-dashboard__title">
                      <p>Como descargar estos 3 músculos</p>
                    </div>
                    <div class="slider-dashboard__up">
                      <p>Hace 20min</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <a href="#" class="slider-dashboard__cat">
                      Rehablilitación
                    </a>
                    <div class="slider-dashboard__title">
                      <p>Como descargar estos 3 músculos</p>
                    </div>
                    <div class="slider-dashboard__up">
                      <p>Hace 20min</p>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content">
                  <div class="slider-dashboard__img">
                    <a href="#">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                    </a>
                  </div>
                  <div class="slider-dashboard__text">
                    <a href="#" class="slider-dashboard__cat">
                      Rehablilitación
                    </a>
                    <div class="slider-dashboard__title">
                      <p>Como descargar estos 3 músculos</p>
                    </div>
                    <div class="slider-dashboard__up">
                      <p>Hace 20min</p>
                    </div>
                  </div>
                </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</section>




  
<?php get_footer(); ?>