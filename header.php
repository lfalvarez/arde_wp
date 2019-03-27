<?php

$template = get_post_meta($post->ID, '_wp_page_template', true);
$is_minisitio = $template == 'page-templates/minisitiopage.php';
if ($is_minisitio){
		get_header('minisitio');
}
else{
	get_header('default');
}
wp_head();
 ?>
