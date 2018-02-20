<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flabio
 */

?>

    <!-- footer start -->
    <div class="footer">
      <div class="container">
        <div class="footer__block">
          <div class="row">
            
            <div class="col-sm-4 col-xs-12">
              <div class="footer__flab">
                <p>&copy; <?php echo of_get_option( 'copy_text', 'no entry' ); ?></p>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="footer__logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option( 'footer_logo', 'no entry' ); ?>" alt="<?php bloginfo('name'); ?>"></a>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="footer__social">                  
                  <?php 
                  if(of_get_option( 'soc_text' )) {
                  ?>
                    <h3><?php echo of_get_option( 'soc_text', 'no entry' ); ?></h3>
                  <?php } ?>
                <ul>
                  <?php 
                  if(of_get_option( 'soc_fb' )) {
                  ?>
                    <li><a target="_blank" href="<?php echo of_get_option( 'soc_fb', 'no entry' ); ?>"><i class="fa fa-facebook"></i></a></li>
                  <?php } 
                  if(of_get_option( 'soc_vk' )) {
                  ?>
                    <li><a target="_blank" href="<?php echo of_get_option( 'soc_vk', 'no entry' ); ?>"><i class="fa fa-vk"></i></a></li>
                  <?php } 
                  if(of_get_option( 'soc_ins' )) {
                  ?>
                    <li><a target="_blank" href="<?php echo of_get_option( 'soc_ins', 'no entry' ); ?>"><i class="fa fa-instagram"></i></a></li>
                  <?php } 
                  if(of_get_option( 'soc_gl' )) {
                  ?>
                    <li><a target="_blank" href="<?php echo of_get_option( 'soc_gl', 'no entry' ); ?>"><i class="fa fa-google"></i></a></li>
                  <?php } 
                  if(of_get_option( 'soc_tg' )) {
                  ?>
                    <li><a target="_blank" href="<?php echo of_get_option( 'soc_tg', 'no entry' ); ?>"><i class="fa fa-paper-plane"></i></a></li>
                  <?php } ?>

                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- footer end -->
    <!-- popup_prices start-->
    <div id="popup_prices" class="popup-default mfp-hide mfp-with-anim">
      <div class="popup__block">
        <form action="#">
          <h4>Мы ответим в течении <br>24-часов</h4>
          <!-- Hidden Required Fields -->
          <input type="hidden" name="project_name" value="Site Name">
          <input type="hidden" name="admin_email" value="info@flabio.kg">
          <input type="hidden" name="form_subject" value="Form Subject">
          <!-- END Hidden Required Fields -->
          <div class="inputBox">
            <div class="inputText">Ваше имя</div>
            <input type="text" name="Ваше имя" class="input">
          </div>
          <div class="inputBox">
            <div class="inputText">Ваш телефон</div>
            <input type="phone" name="Ваш телефон" class="input">
          </div>
          <button type="submit" class="_button-sub">ОТПРАВИТЬ</button>
        </form>
      </div>
    </div>
    <!-- popup_prices end-->

  <?php if (is_page('brif') || is_page('contacts') ):?>
    <div id="popup_pric" class="popup-default mfp-hide mfp-with-anim">
        <div class="thanks">
          <h3>Спасибо</h3>
          <i class="fa fa-check-square-o"></i>
          <h4>Ваша заявка принята</h4>
        </div>
    </div>
  <?php endif;  wp_footer(); ?>
    
    <script type="text/javascript">
    <?php 
        if(of_get_option( 'script_text' )) {
    ?>
    new Typed(".typed_js", {
        strings: [<?php echo of_get_option( 'script_text', 'no entry' ); ?>],
        stringsElement: null,
        typeSpeed: 50,
        startDelay: 200,
        backSpeed: 50,
        backDelay: 1e3,
        loop: !0,
        showCursor: !1,
        attr: null
    });
    <?php }  if (is_page('brif') ):?>

    var wpcf7Elm = document.querySelector( '.wpcf7' );
    wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
        $('.wpcf7-mail-sent-ok').remove();
        $.magnificPopup.open({
          items: {
            src: '#popup_pric'
          },
          type: 'inline',
          midClick: true,
          removalDelay: 800,
          mainClass: 'mfp-move-horizontal',
          callbacks: {
              open: function() {
                  $('.scrolled').css({'overflow-y': 'scroll'});
              },
              close: function() {
                  $('.scrolled').css({'overflow-y': 'visible'});
              }
          }
        });
        setTimeout(function () {
          $.magnificPopup.close();
        }, 3000);
    }, false );

    <?php endif; if (is_page('contacts') ):?>
        
    var map;
    DG.then(function () {
      map = DG.map('map', {
        center: [42.485300, 78.402300],
        scrollWheelZoom: false,
        zoom: 17
      });

      var myIcon = L.icon({
        iconUrl: '<?php echo get_template_directory_uri(); ?>//images/mark.png',
        iconSize: [25, 40]
      });

      DG.marker([42.485390, 78.402055], { icon: myIcon }).addTo(map).bindPopup('Flabio <br />г.Каракол  ул.Королькова 55').bindLabel('Flabio <br />г.Каракол  ул.Королькова 55');
    });

    var wpcf7Elm = document.querySelector( '.wpcf7' );

    wpcf7Elm.addEventListener( 'wpcf7mailsent', function( event ) {
        $('.wpcf7-mail-sent-ok').remove();
        $.magnificPopup.open({
          items: {
            src: '#popup_pric'
          },
          type: 'inline',
          midClick: true,
          removalDelay: 800,
          mainClass: 'mfp-move-horizontal',
          callbacks: {
              open: function() {
                  $('.scrolled').css({'overflow-y': 'scroll'});
              },
              close: function() {
                  $('.scrolled').css({'overflow-y': 'visible'});
              }
          }
        });
        setTimeout(function () {
          $.magnificPopup.close();
        }, 3000);
    }, false );

    <?php endif; ?>  
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter47735179 = new Ya.Metrika({
                        id:47735179,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/47735179" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>
