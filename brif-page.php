<?php
/* Template Name: Шаблон страницы брифа */

get_header(); ?>


<!-- brif start -->
<div class="brif">
    <div class="container">
        <h2 class="_title"><?php the_title(); ?></h2>

        <?php echo do_shortcode('[contact-form-7 id="212" title="Бриф"]'); ?>
        
    </div>
</div>
<!-- brif end -->

<?php
get_footer();
