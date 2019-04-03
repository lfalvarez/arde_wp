<div class="meta-div">
  <p class="meta-titulo"><?= $title; ?></p>
  <p><?= get_post_meta($post->ID, $title, true); ?></p>
</div>
