<?php

   while(have_posts()) {
      the_post(); ?>
      <h2>page not post</h2>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <?php }
?>