<?php
/**
 * Aquí aparecen las citas.
 *
 * @package arde-tema
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="<?php echo esc_attr( $container ); ?>">
        <div class='row'>
            <div class="col-8 mx-auto my-5">
                <p>“Las artes y sus modos de producción, encierran todavía una bitácora enorme de historias no contadas. Dichos procesos merecen la presencia de investigadores y archiveros, que permitan registrar y preservar sus memorias. Eso es el archivo, la necesidad de detenerse a nombrar, a contar historias, es ese movimiento inversamente proporcional al silencio y al olvido.”</p>
                <p class="gt-america mb-0">(A. Comedi)</p>
            </div>
        </div>
</div>
