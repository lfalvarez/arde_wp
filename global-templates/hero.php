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

          <div class="col-md-12 hero_img pt-4 pb-5 text-center text-white">
            <img class="d-none d-md-inline-block center" src="<?php bloginfo('template_url'); ?>/img/icono-comilla-arde-130.png" alt="">
            <h1 class="text text-landing pt-md-5">
        		   <p style="letter-spacing: .05em; font-weighr:700;">ARCHIVOS DE ARTE</p>
        		   <p style="font-size: .8em;">Memoria de prácticas y procesos</p>
            </h1>
            <div class="text text-landing ir-archivo-alpha gt-america mt-3 mt-md-5">
              <a href="http://archivo.proyectoarde.org/" target="_blank">- Descubre nuestras colecciones acá -</a>
            </div>
          </div>

      </div>
</div>

<?php if (( is_front_page() && is_home() )) : ?>
   </div>
<?php endif; ?>

<!-- <script type="text/javascript">
    
    (function(){

    
    var fondos = ["fondo1.jpg","fondo2.jpg","fondo3.jpg","fondo4.jpg", "fondo5.jpg"];

    function getRandomInt(max) {
      return Math.floor(Math.random() * Math.floor(max));
    }

    var cambioFondo = getRandomInt(fondos.length);
    var elFondo = fondos[cambioFondo];
    jQuery('.hero-container').css("background-image",`url("https://proyectoarde.org/wp-content/themes/arde_wp/img/${elFondo}")`);

    });

</script> -->
