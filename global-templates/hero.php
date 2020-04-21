<?php
/**
 * Hero setup.
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="container-fluid bg-arde">
      <div class="row landing-arde">

          <div class="col-8 hero_img text-center">
            <img class="d-none d-md-inline-block center" src="<?php bloginfo('template_url'); ?>/img/arde-logo.png" alt="">
            <div class="text text-landing">
              Somos una comunidad digital que apoya el desarrollo de archivos de procesos creativos en un marco abierto, libre y de dominio público. 
            </div>
            <div class="text text-landing ir-archivo-alpha gt-america">
              <a href="http://archivo.proyectoarde.org/" target="_blank">- Ir a archivo completo > </a>
            </div>
          </div>

      </div>
</div>

<?php if (( is_front_page() && is_home() )) : ?>
   </div>
<?php endif; ?>




<script type="text/javascript">
    
    jQuery(function(){
    
    let fondos = ["fondo-1.jpg","fondo-2.jpg","fondo-3.jpg","fondo-4.jpg", "fondo-5.jpg"];

    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }

    let cambioFondo = getRandomInt(fondos.length);
    let elFondo = fondos[cambioFondo];


    $( document ).ready(function() {
    ('.hero-container').css(`url("https://proyectoarde.org/wp-content/themes/arde_wp/img/${elFondo}")`);
  }

    });

</script>
