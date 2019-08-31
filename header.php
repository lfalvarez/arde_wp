<?php

$template = get_post_meta($post->ID, '_wp_page_template', true);
$is_minisitio = $template == 'page-templates/minisitiopage.php';
$is_editorial = $template == 'page-templates/editorial.php';
$is_sobre_archivos = $template == 'page-templates/sobre-archivos.php';
$is_sobre_nosotros = $template == 'page-templates/sobre-nosotros.php';
$is_home = is_front_page() && is_home();
if ($is_minisitio){
		get_header('minisitio');
}
elseif ($is_editorial){
	get_header('pagina-informacion');
}
elseif ($is_home){
	get_header('default');
}
elseif ($is_sobre_archivos){
	get_header('pagina-informacion');
}
elseif ($is_sobre_nosotros){
	get_header('minisitio');
}
else {
	get_header('documento');
}
wp_head();
 ?>
