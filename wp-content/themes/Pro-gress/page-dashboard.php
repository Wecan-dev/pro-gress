<?php get_header(); ?>
<section>
  <div class="navabar__grub">
    <div class="sidebar__navbar my-sidebar active d-none d-lg-block">
      <span></span>
      <div class=" py-4 position-relative">
        <a href="#!" class="brand__sidebar"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-progress- white.png" alt=""></a>

        <ul class="sidebar__list--menu pb-4 mt-5">
          <li><a href="<?php bloginfo('url'); ?>" class="active"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-home.png" alt="">Dashboard</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-reports.png" alt="">Reportes</a></li>
          <li><a href="<?php bloginfo('url'); ?>/workout"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-dumbell.png" alt="">Workouts</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-calendar.png" alt="">Calendario</a></li>
        </ul>
        <ul class="sidebar__list--menu py-4">
          <li><a href="<?php bloginfo('url'); ?>/pro-videos"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-video.png" alt="">Pro-videos</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-library.png" alt="">Exercises List</a></li>
        </ul>
      </div>
      <div class="btn-soporte">
        <a href="#">Soporte <i class="fa fa-angle-down" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="sidebar__content">
      <div class="sidebar__content--top d-none d-lg-flex">
        <div class="title-sidebar__top">
          <p>Dashboard</p>
        </div>
        <div class="sidebar-top__content">
          <div class="user-sidebar__top">
            <div class="user-sidebar__top--img">
              <img src="#" alt="">
            </div>
            <div class="user-sidebar__top--text">
              <div class="dropdown">
                <button class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Samuel95 <i class="fa fa-angle-down" aria-hidden="true"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Mi cuenta</a>
                  <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
              </div>
            </div>  
          </div>
          <div class="notifi-sidebar__top">
            <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="sidebar__content--content ">
        <div class="dashboard-content padding-rl">
          <div class="dashboard-content__content">
            <div class="dashboard-content__video">
              <a href="#" class="dashboard-content__video--video">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
              </a>
              <div class="etiqueta-workputs">
                <p>Workouts de hoy</p>
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
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
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
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
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