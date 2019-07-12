<div class="meta-div">
  <p class="meta-titulo"><?= $title; ?></p>
  <p class="text-capitalize"><?= get_post_meta($post->ID, $title, true); ?></p>
</div>
