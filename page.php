<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package flabio
 */

get_header(); ?>

<!-- services start -->
    <div class="services" id="content">
      <div class="container">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php if (is_page('services') ):?>
<div class="services__block">
          <table>
            <thead>
              <tr>
               <th></th>
               <th><img src="<?php echo get_template_directory_uri(); ?>/images/6.png" alt="">Лендинг пейдж</th>
               <th><img src="<?php echo get_template_directory_uri(); ?>/images/7.png" alt="">Индивидуальный проект</th>
               <th><img src="<?php echo get_template_directory_uri(); ?>/images/8.png" alt="">Крупные внедрения</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td><i class="icon-11"></i> Проектирование</td>
               <td data-header-title="Готовое решение"><?php if( get_field('a_1') ){ ?>от <span><?php the_field('a_1'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Индивидуальный проект"><?php if( get_field('b_1') ){ ?>от <span><?php the_field('b_1'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Крупные внедрения"><?php if( get_field('c_1') ){ ?>от <span><?php the_field('c_1'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
             </tr>
             <tr>
               <td><i class="icon-22"></i> Дизайн сайта</td>
               <td data-header-title="Готовое решение"><?php if( get_field('a_2') ){ ?>от <span><?php the_field('a_2'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Индивидуальный проект"><?php if( get_field('b_2') ){ ?>от <span><?php the_field('b_2'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Крупные внедрения"><?php if( get_field('c_2') ){ ?>от <span><?php the_field('c_2'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
             </tr>
             <tr>
               <td><i class="icon-33"></i> Верстка сайта</td>
               <td data-header-title="Готовое решение"><?php if( get_field('a_3') ){ ?>от <span><?php the_field('a_3'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Индивидуальный проект"><?php if( get_field('b_3') ){ ?>от <span><?php the_field('b_3'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Крупные внедрения"><?php if( get_field('c_3') ){ ?>от <span><?php the_field('c_3'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
             </tr>
             <tr>
               <td><i class="icon-44"></i> Адаптивная верстка</td>
               <td data-header-title="Готовое решение"><?php if( get_field('a_4') ){ ?>от <span><?php the_field('a_4'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Индивидуальный проект"><?php if( get_field('b_4') ){ ?>от <span><?php the_field('b_4'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Крупные внедрения"><?php if( get_field('c_4') ){ ?>от <span><?php the_field('c_4'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
             </tr>
             <tr>
               <td><i class="icon-55"></i> Программирование</td>
               <td data-header-title="Готовое решение"><?php if( get_field('a_5') ){ ?>от <span><?php the_field('a_5'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Индивидуальный проект"><?php if( get_field('b_5') ){ ?>от <span><?php the_field('b_5'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Крупные внедрения"><?php if( get_field('c_5') ){ ?>от <span><?php the_field('c_5'); ?></span> с<?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
             </tr>
             <tr>
               <td><i class="icon-66"></i> Почасовая работа</td>
               <td data-header-title="Готовое решение"><?php if( get_field('a_6') ){ ?><p>Junior Front-end <br>Developer</p><span><?php the_field('a_6'); ?> с/час.</span><?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Индивидуальный проект"><?php if( get_field('b_6') ){ ?><p>Middle Front-end <br>Developer</p><span><?php the_field('b_6'); ?> с/час.</span><?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
               <td data-header-title="Крупные внедрения"><?php if( get_field('c_6') ){ ?><p>Senior Front-end <br>Developer</p><span><?php the_field('c_6'); ?> с/час.</span><?php } else{  ?> <i class="icon-exit"></i><?php  } ?></td>
             </tr>
           </tbody>
         </table>
         <?php the_field('descr'); ?>
        </div>
        <?php endif; ?>        
      </div>
    </div>
    <!-- services end -->

<?php
get_footer();
