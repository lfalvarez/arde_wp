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
        <div class="col-8 offset-2 text-center" >
          <div class="hero_img">
            <img src="<?php bloginfo('template_url'); ?>/img/arde-logo.png" alt="">
          </div>
        </div>
          
  </div>
</div>
<script type="text/javascript">
    jQuery(function(){
        // console.log('url("<?php bloginfo('template_url'); ?>/img/fondo-arde.png")');
        jQuery('.landing-arde').css('background-image', 'url("<?php bloginfo('template_url'); ?>/img/fondo-arde.jpg")');

    });
</script>