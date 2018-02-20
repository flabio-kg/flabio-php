<?php
/* Template Name: Шаблон главной страницы */

get_header(); ?>

	<!-- advantages start -->
    <div class="advantages" id="content">
      <div class="container">
        <h2><?php the_field('title_adv'); ?></h2>
        <div class="advantages__block">
          <div class="row">

            <div class="col-md-5 col-sm-12">
              <div class="advantages__blog">
                <div class="advantages__item">
                  <img src="<?php the_field('img_1'); ?>" alt="">
                </div>
                <div class="advantages__items">
                  <p><?php the_field('text_1'); ?></p>
                </div>
              </div>
              <div class="advantages__blog">
                <div class="advantages__item">
                  <img src="<?php the_field('img_2'); ?>" alt="">
                </div>
                <div class="advantages__items">
                  <p><?php the_field('text_2'); ?></p>
                </div>
              </div>
              <div class="advantages__blog">
                <div class="advantages__item">
                  <img src="<?php the_field('img_3'); ?>" alt="">
                </div>
                <div class="advantages__items">
                  <p><?php the_field('text_3'); ?> </p>
                </div>
              </div>
            </div>

            <div class="col-md-5 col-sm-12">
              <div class="advantages__blog">
                <div class="advantages__item">
                  <img src="<?php the_field('img_4'); ?>" alt="">
                </div>
                <div class="advantages__items">
                  <p><?php the_field('text_4'); ?></p>
                </div>
              </div>
              <div class="advantages__blog">
                <div class="advantages__item">
                  <img src="<?php the_field('img_5'); ?>" alt="">
                </div>
                <div class="advantages__items">
                  <p><?php the_field('text_5'); ?></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- advantages end -->
    
    <!-- why start -->
    <div class="why">
      <div class="container">
        <h2><?php the_field('title_why'); ?></h2>
        <div class="why__block">
          <div class="row">

            <div class="col-md-4 col-sm-4">
              <div class="why__blog right_wh bottom_wh">
                <div class="why__item">
                  <i class="icon-1"></i>
                </div>
                <div class="why__items">
                  <p><?php the_field('text_why_1'); ?></p>
                </div>
              </div>
              <div class="why__blog right_wh">
                <div class="why__item">
                  <i class="icon-4"></i>
                </div>
                <div class="why__items">
                  <p><?php the_field('text_why_4'); ?></p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4">
              <div class="why__blog right_wh bottom_wh">
                <div class="why__item">
                  <i class="icon-2"></i>
                </div>
                <div class="why__items">
                  <p><?php the_field('text_why_2'); ?></p>
                </div>
              </div>
              <div class="why__blog right_wh">
                <div class="why__item">
                  <i class="icon-5"></i>
                </div>
                <div class="why__items">
                  <p><?php the_field('text_why_5'); ?></p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4">
              <div class="why__blog bottom_wh">
                <div class="why__item">
                  <i class="icon-3"></i>
                </div>
                <div class="why__items">
                  <p><?php the_field('text_why_3'); ?></p>
                </div>
              </div>
              <div class="why__blog">
                <div class="why__item">
                  <i class="icon-6"></i>
                </div>
                <div class="why__items">
                  <p><?php the_field('text_why_6'); ?></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- why end -->
    
    <!-- port start -->
    <div class="port">
      <div class="container">
        <h2><?php the_field('port_title'); ?></h2>
        <div class="port__block">
          <div class="row">
              
              <?php $catquery = new WP_Query( 'cat=6&posts_per_page=3' ); ?> 
              <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
 
                <div class="col-md-4 col-sm-4">
                  <a class="works__item works__item--width open-popup-link port_hg" href="#popup<?php echo get_the_ID(); ?>">
                    <img class="itemse" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <div class="items">
                      <img src="<?php the_field('img_port'); ?>" alt="">
                    </div>
                    <figcaption>
                      <div><i class="fa fa-search-plus"></i></div>
                    </figcaption>
                  </a>
                </div>              
              
              
              <div id="popup<?php echo get_the_ID(); ?>" class="white-popup mfp-hide">
                <div class="outer"></div>
                <div class="popup__block">
                  <div class="row">
                    <div class="col-md-9 col-sm-8 no-padding">
                      <div class="popup__iframe" style="background-image: url('<?php the_field('bg_port'); ?>');">
                        <div id="browser" class="clear">
                          <div class="page">
                              <iframe class="frame_reset" width="100%" height="100%" src="" frameborder="0"></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-4 no-padding">
                      <div class="popup__items">
                        <div class="popup__full">
                          <a title="Перейти в полноэкранный режим" target="_blank" href="<?php the_field('link_to_work'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/+.png" alt="Full size"></a>
                        </div>
                        <img src="<?php the_field('img_port'); ?>" alt="">
                        <ul class="tabs">                            
                            <?php 
                            $table = get_field( 'link_port' );
                            if ( $table ) {
                            foreach ( $table['body'] as $tr ) { ?>
                              <li><a  href="<?php echo $tr[1]['c']; ?>"><?php echo $tr[0]['c']; ?></a></li>
                            <?php } } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- popup<?php echo get_the_ID(); ?> -->


              <?php endwhile;
                  wp_reset_postdata();
              ?>

          </div>

          <a href="<?php the_field('link_port'); ?>" class="btn">Остальные проекты</a>

        </div>
      </div>
    </div>
    <!-- port end -->
    <!-- prices start -->

    <!-- <div class="prices">
      <div class="container">
        <h2>Цены</h2>
        <div class="prices__block">
          <div class="row">
            
            <div class="col-sm-4">
              <div class="prices__item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/6.png" alt="">
                <h3>Лендинг пейдж</h3>
                <div class="section_title">
                  <h4>от <span><?php the_field('lp_price'); ?></span> с</h4>
                  <div class="shadow_text">
                    <h4><?php the_field('lp_price'); ?></h4>
                  </div>
                </div>
                <a href="#popup_prices" class="btn open-popup-link">ЗАКАЗАТЬ</a>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="prices__item prices__item--border">
                <img src="<?php echo get_template_directory_uri(); ?>/images/7.png" alt="">
                <h3>Индивидуальный проект</h3>
                <div class="section_title">
                  <h4>от <span><?php the_field('ip_price'); ?></span> с</h4>
                  <div class="shadow_text">
                    <h4><?php the_field('ip_price'); ?></h4>
                  </div>
                </div>
                <a href="#popup_prices" class="btn open-popup-link">ЗАКАЗАТЬ</a>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="prices__item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/8.png" alt="">
                <h3>Крупные внедрения</h3>
                <div class="section_title">
                  <h4>от <span><?php the_field('kp_price'); ?></span> с</h4>
                  <div class="shadow_text">
                    <h4><?php the_field('kp_price'); ?></h4>
                  </div>
                </div>
                <a href="#popup_prices" class="btn open-popup-link">ЗАКАЗАТЬ</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> -->
    <?php // Потом доделать ?>
<?php
get_footer();
