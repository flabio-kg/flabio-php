<?php
/* Template Name: Шаблон страницы о нас */

get_header(); ?>

<!-- about start -->
    <div class="about" id="content">
      <div class="container">
        <div class="about__block">
          <div class="row">
            
            <div class="col-md-6">
              <div class="about__image">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="about__list">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </div>
            </div>

          </div>
        </div>

        <div class="about__team">
          <h3>Команда</h3>
          <div class="row">
              
              <?php
                query_posts('post_type=team&order=ASC');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <div class="col-sm-4">
                  <div class="about__item">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <h4 class="about__items"><span></span><?php the_field('job'); ?></h4>
                    <h5><?php the_field('name'); ?></h5>
                  </div>
                </div>


                <?php endwhile; endif; wp_reset_query(); ?>
           
          </div>
        </div>

      </div>
    </div>
    <!-- about end -->

<?php
get_footer();
