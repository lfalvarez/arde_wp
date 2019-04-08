<?php
    $args = array(
        'post_type' => 'page',//it is a Page right?
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'page-templates/'.$link_slug.'.php', // template name as stored in the dB
            )
        )
    );
$query = new WP_Query($args);
if ( $query->have_posts() ):
?>
<li class="nav-item">
  <a class="nav-link navbar-arde" href="<?php echo get_post_permalink($query->posts[0]->ID); ?>"><?php echo $query->posts[0]->post_title;?></a>
</li>
<?php endif; ?>
