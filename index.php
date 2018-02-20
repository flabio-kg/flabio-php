<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flabio
 */

get_header(); ?>

	<!-- our works start -->
    <div class="works" id="content">
      <div class="container">
        <div class="title_h2">
          <h2>Наши работы</h2>
        </div>
        <div class="works__blog">
            
            <?php
            if ( have_posts() ) :
              query_posts('cat=6'); 
              while (have_posts()) : the_post();  
            ?>

            <a class="works__item open-popup-link <?php the_field('type_port'); ?>" href="#popup<?php echo get_the_ID(); ?>">
                <img class="itemse" src="<?php the_field('alt_img'); ?>" alt="<?php the_title(); ?>">
                <div class="items">
                  <img src="<?php the_field('img_port'); ?>" alt="<?php the_title(); ?>">
                </div>
                <figcaption>
                  <div><i class="fa fa-search-plus"></i></div>
                </figcaption>
            </a>
            
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

                                      foreach ( $table['body'] as $tr ) {
                              echo '<li>';
                               ?>
                                            <a  href="<?php echo $tr[1]['c']; ?>"><?php echo $tr[0]['c']; ?></a>

                              <?php
                              echo '</li>';

                                      }
                              }
                            ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- popup<?php echo get_the_ID(); ?> -->
            

            <?php
              endwhile;
            endif;
            wp_reset_query();                
            ?>        

        </div>
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                    <script>
                    var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                    var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                    var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                    </script>
        <a class="works__href" id="true_loadmore" href="javascript:void(0);">Еще работы</a>
        <?php endif; ?>
          
          

        

      </div>
    </div>
    <!-- our works end -->

<?php
get_footer();
