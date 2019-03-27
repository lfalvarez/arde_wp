<?php

$mykey_values = get_post_custom_values( $social_network , $post->ID);
if($mykey_values){
  foreach ( $mykey_values as $key => $value ) {
    echo '<i class="fab fa-'.$social_network.'"></i> '.$value;
  }
}


?>
