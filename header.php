<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flabio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <div class="preloader">
      <div class="butterfly">
        <div class="wing-bf">
          <div class="bit-bf"></div>
        </div>
        <div class="wing-bf">
          <div class="bit-bf"></div>
        </div>
      </div>
      <div class="shadow"></div>
    </div>

<!-- main start -->
<div class="mmenu-nav"></div>

<div class="main <?php the_field('classes'); if( is_home() ){ ?>
   main_bg_works
<?php }?>">
    <div class="main__topline">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-xs-12">
                    <div class="main__head">
                        <?php
                        wp_nav_menu( array(
                            'theme_location'   => 'menu-1',
                            'container_calss'  => 'main__head',
                            'menu_id'          => 'top-menu',
                        ) );
                        ?>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="main__mail">
                        <a href="mailto:<?php echo of_get_option( 'head_email', 'no entry' ); ?>"><i class="fa fa-envelope-o"></i><?php echo of_get_option( 'head_email', 'no entry' ); ?></a>
                    </div>
                </div>

                <div class="navtrigger js-navtrigger">
                    <i></i><i></i><i></i>
                </div>

            </div>
        </div>
    </div><!-- topline end -->

    <div class="main__wrap">
        <div class="container">
            <div class="row">

                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="main__logo">
                        <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php bloginfo('name'); ?>"></a>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="main__head heade">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </div>
                </div>

                <div class="col-md-3 col-sm-9 col-xs-12">
                    <div class="main__mail">
                        <a href="mailto:<?php echo of_get_option( 'head_email', 'no entry' ); ?>"><i class="fa fa-envelope-o"></i><?php echo of_get_option( 'head_email', 'no entry' ); ?></a>
                    </div>
                </div>

                <div class="navtrigger js-navtrigger right">
                    <i></i><i></i><i></i>
                </div>

            </div>
        </div>
    </div><!-- wrap end -->

    <div class="container">
        <div class="main__image">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option( 'logo_top', 'no entry' ); ?>" alt="<?php bloginfo('name'); ?>"></a>
        </div>
        <div class="main__title">
            <div class="banner">
                <div class="typed_wrap">
                    <h1><?php echo of_get_option( 'text_top', 'no entry' ); ?> <span class="typed_js"></span></h1>
                </div>
            </div>
        </div>
    </div>
    <a href="#content" class="main__scroll"><span></span></a>
</div>
<!-- main end -->
