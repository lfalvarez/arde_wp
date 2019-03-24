<?php
// this function makes all posts in the default category private
require_once( ABSPATH . '/wp-admin/includes/taxonomy.php');
function crear_categoria_por_minisitio($post_id) {
    $template = get_post_meta($post_id, '_wp_page_template', true);
    $is_minisitio = $template == 'page-templates/minisitiopage.php';
    if (!$is_minisitio){
        return;
    }

    $title = get_the_title($post_id);
    $slug = sanitize_title($title);
    $existe_categoria_para_minisitio = get_category_by_slug($slug);
    if($existe_categoria_para_minisitio){
        return;
    }
    $nueva_categoria = array('cat_name' => $title,
                             'category_description' => 'Minisitio de '. $title,
                             'category_nicename' => $slug,
                             'category_parent' => '');
    wp_insert_category($nueva_categoria);

}
add_action( 'publish_page', 'crear_categoria_por_minisitio', 10);
?>
