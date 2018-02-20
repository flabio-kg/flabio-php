<?php
/* Template Name: Шаблон страницы контактов */

get_header(); ?>

<!-- our contacts start -->
    <div class="contact" id="content">
      <div class="container">
        <div class="contact__block">
          <h2><?php the_title(); ?></h2>
          <div class="row">
            
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="contact__item">
                <?php echo do_shortcode('[contact-form-7 id="202" title="Контакты"]'); ?>
              </div>
            </div>              

            <div class="col-md-6 col-md-offset-2 col-sm-6 col-xs-12">
              <div class="contact__items">
                <ul>
                  <li><div class="ico"><i class="fa fa-map-marker"></i></div><a target="_blank" href="http://go.2gis.com/e4piv"><?php the_field('addr'); ?></a></li>
                  <li><div class="ico"><i class="fa fa-mobile"></i></div><a href="tel:+<?php echo preg_replace('/[^0-9]/', '', get_field('phone_1')); ?>"><?php the_field('phone_1'); ?></a></li>
                  <li><div class="ico"><i class="fa fa-envelope-o"></i></div><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></li>
                  <li><div class="ico"><i class="fa fa-paper-plane-o"></i></div><a target="_blank" href="<?php the_field('telegram'); ?>">Flabio Telegram</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div id="map"></div>
    </div>
    <!-- our contacts end -->

<?php
get_footer();
