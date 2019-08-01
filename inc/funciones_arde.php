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

function crear_categoria_para_editorial($post_id) {
    $template = get_post_meta($post_id, '_wp_page_template', true);
    $is_editorial = $template == 'page-templates/editorial.php';
    if (!$is_editorial){
        return;
    }

    $title = 'Editorial';
    $slug = 'editorial';
    $existe_categoria_para_editorial = get_category_by_slug($slug);
    if($existe_categoria_para_editorial){
        return;
    }
    $nueva_categoria = array('cat_name' => $title,
                             'category_description' => $title,
                             'category_nicename' => $slug,
                             'category_parent' => '');
    wp_insert_category($nueva_categoria);

}
add_action( 'publish_page', 'crear_categoria_para_editorial', 11);

function crear_categoria_para_sobre_archivos($post_id) {
    $template = get_post_meta($post_id, '_wp_page_template', true);
    $is_editorial = $template == 'page-templates/sobre-archivos.php';
    if (!$is_editorial){
        return;
    }

    $title = 'Sobre archivos';
    $slug = 'sobre-archivos';
    $existe_categoria_para_sobre_editorial = get_category_by_slug($slug);
    if($existe_categoria_para_sobre_editorial){
        return;
    }
    $nueva_categoria = array('cat_name' => $title,
                             'category_description' => $title,
                             'category_nicename' => $slug,
                             'category_parent' => '');
    wp_insert_category($nueva_categoria);

}
add_action( 'publish_page', 'crear_categoria_para_sobre_archivos', 11);
?>
<?php function revconcept_get_images($post_id) {
    global $post;
 
     $thumbnail_ID = get_post_thumbnail_id();
 
     $images = get_children( array('post_parent' => $post_id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
 
     if ($images) :
 
         foreach ($images as $attachment_id => $image) :
 
         if ( $image->ID != $thumbnail_ID ) :
 
             $img_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); //alt
             if ($img_alt == '') : $img_alt = $image->post_title; endif;
 
             $big_array = image_downsize( $image->ID, 'large' );
             $img_url = $big_array[0];
             
             echo '<ul class="popup-gallery">';
             echo '<li>';
             echo '<a href="';
             echo $img_url;
             echo '">';
             echo '<div class="overlay"></div>';
             echo '<img src="';
             echo $img_url;
             echo '" alt="';
             echo $img_alt;
             echo '" title="';
             echo $img_title;
             echo '" />';
             echo '</a>';
             echo '</li>';
             echo '</ul>';
 
 endif; endforeach; endif; } ?>