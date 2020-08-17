<?php get_header(); ?>

<h2>Blog Post: <?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
<p>
    scratched on:
    <time datetime="<?php echo get_the_date( DATE_ATOM ); // The blog post publish date from WP. ?>">
      <?php echo get_the_date(); // The blog post publish date from WP. ?>
    </time>
  </p>


<?php get_footer();