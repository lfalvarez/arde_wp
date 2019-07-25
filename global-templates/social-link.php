<?php

$mykey_values = get_post_custom_values( $social_network , $post->ID);
if($mykey_values){
  foreach ( $mykey_values as $key => $value ) {
    echo '<a class="social-link d-block" href="'.$value.'" target="_blank"><i class="fab fa-'.$social_network.'"></i> '.ucwords($social_network).'</a>';
  }
}

?>
