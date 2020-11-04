<?php get_header(); ?>
<section>
  <div class="navabar__grub">
    <div class="sidebar__navbar my-sidebar active d-none d-lg-block">
      <span></span>
      <div class=" py-4 position-relative">
        <a href="#!" class="brand__sidebar"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo-progress- white.png" alt=""></a>

        <ul class="sidebar__list--menu pb-4 mt-5">
          <li><a href="#!" ><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-home.png" alt="">Dashboard</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-reports.png" alt="">Reportes</a></li>
          <li><a href="#!" class="active"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-dumbell.png" alt="">Workouts</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-calendar.png" alt="">Calendario</a></li>
        </ul>
        <ul class="sidebar__list--menu py-4">
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-video.png" alt="">Pro-videos</a></li>
          <li><a href="#!"><img src="<?php echo get_template_directory_uri();?>/assets/img/icon-library.png" alt="">Exercises List</a></li>
        </ul>
      </div>
      <div class="btn-soporte">
        <a href="#">soporte <i class="fa fa-angle-down" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="sidebar__content">
      <div class="sidebar__content--top d-none d-lg-flex">
        <div class="title-sidebar__top">
          <p>Workouts</p>
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
        <div class="subtitle-side__top">
          <p>Programas</p>
        </div>
      </div>
      <div class="sidebar__content--content ">
        <div class="dashboard-content">
          <div class="workout-content">
            <div class="subtitle-side-responsive d-block d-lg-none ">
              <p>Programas</p>
            </div>
            <div class="workout-content__video">
              <div class="workout-video__slider">
                <div class="slider-dashboard__content slider-workout__content">
                  <div class="slider-workout__content--item">
                    <div class="slider-dashboard__img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                      <a href="#" class="slider-dashboard__text">
                        <div class="slider-dashboard__cat">
                          Rehablilitación
                        </div>
                        <div class="slider-dashboard__title">
                          <span>PRO-GRESS</span>
                          <p>Planche</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content slider-workout__content">
                  <div class="slider-workout__content--item">
                    <div class="slider-dashboard__img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                      <a href="#" class="slider-dashboard__text">
                        <div class="slider-dashboard__cat">
                          Rehablilitación
                        </div>
                        <div class="slider-dashboard__title">
                          <span>PRO-GRESS</span>
                          <p>Planche</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content slider-workout__content">
                  <div class="slider-workout__content--item">
                    <div class="slider-dashboard__img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                      <a href="#" class="slider-dashboard__text">
                        <div class="slider-dashboard__cat">
                          Rehablilitación
                        </div>
                        <div class="slider-dashboard__title">
                          <span>PRO-GRESS</span>
                          <p>Planche</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content slider-workout__content">
                  <div class="slider-workout__content--item">
                    <div class="slider-dashboard__img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                      <a href="#" class="slider-dashboard__text">
                        <div class="slider-dashboard__cat">
                          Rehablilitación
                        </div>
                        <div class="slider-dashboard__title">
                          <span>PRO-GRESS</span>
                          <p>Planche</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="slider-dashboard__content slider-workout__content">
                  <div class="slider-workout__content--item">
                    <div class="slider-dashboard__img">
                      <img src="<?php echo get_template_directory_uri();?>/assets/img/img-vid-prueba1.png" alt="">
                      <a href="#" class="slider-dashboard__text">
                        <div class="slider-dashboard__cat">
                          Rehablilitación
                        </div>
                        <div class="slider-dashboard__title">
                          <span>PRO-GRESS</span>
                          <p>Planche</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="workout-content__tables">
              <div class="workout-table__search">
                <form class="form-inline">
                  <button class="" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  <input class="form-control" type="search" placeholder="Buscar rutina" aria-label="Search">
                </form>
              </div>  
              <div class="workout-table__items padding-rl">
                <table class="tableWorkout">
                  <thead>
                    <tr>
                      <th>PLAN 1 - SEMANAS 1-2</th>
                      <th>Intensidad</th>
                      <th>Created by</th>
                      <th>Date Updated</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                          <p>DÍA 1 - Push Ups</p>
                        </a>
                      </td>
                      <td>
                        <div>
                          <p>1</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>Pro-gress</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>07-09-20</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                          <p>DÍA 1 - Push Ups</p>
                        </a>
                      </td>
                      <td>
                        <div>
                          <p>1</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>Pro-gress</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>07-09-20</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                          <p>DÍA 1 - Push Ups</p>
                        </a>
                      </td>
                      <td>
                        <div>
                          <p>1</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>Pro-gress</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>07-09-20</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                          <p>DÍA 1 - Push Ups</p>
                        </a>
                      </td>
                      <td>
                        <div>
                          <p>1</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>Pro-gress</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>07-09-20</p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="workout-table__items padding-rl">
                <table class="tableWorkout">
                  <thead>
                    <tr>
                      <th>PLAN 1 - SEMANAS 1-2</th>
                      <th>Intensidad</th>
                      <th>Created by</th>
                      <th>Date Updated</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                          <p>DÍA 1 - Push Ups</p>
                        </a>
                      </td>
                      <td>
                        <div>
                          <p>1</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>Pro-gress</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>07-09-20</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                          <p>DÍA 1 - Push Ups</p>
                        </a>
                      </td>
                      <td>
                        <div>
                          <p>1</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>Pro-gress</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>07-09-20</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                          <p>DÍA 1 - Push Ups</p>
                        </a>
                      </td>
                      <td>
                        <div>
                          <p>1</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>Pro-gress</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>07-09-20</p>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <img src="<?php echo get_template_directory_uri();?>/assets/img/img-routine.png" alt="">
                          <p>DÍA 1 - Push Ups</p>
                        </a>
                      </td>
                      <td>
                        <div>
                          <p>1</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>Pro-gress</p>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>07-09-20</p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</section>

<?php get_footer(); ?>


  
