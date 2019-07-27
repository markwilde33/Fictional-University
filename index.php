<?php 

get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Bienvenue sur nos blog</h1>
      <div class="page-banner__intro">
        <p>Suivez nos dernières nouvelles</p>
    </div>
  </div>  
</div>

<div class="container container--narrow page-section">
Bonjour imbécile je t'aime
<?php
while(have_posts()) {
  the_post();?>
  <div class="post_item">
    <h2 class="headline headline--medium headline--post-title blog-heading-margin-top"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="metabox">
    <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n-j-y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>

    <div class="generic-content blog-excerpt-bottom-border">
    <?php the_excerpt(); ?>
    <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
    </div>
  </div>
<?php }
?>
<div class="margin-top-paginate">
  <?php echo paginate_links();?>
</div>
</div>

<?php get_footer();
?>