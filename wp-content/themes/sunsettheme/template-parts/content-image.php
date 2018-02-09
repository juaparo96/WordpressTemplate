<?php

/*

@package
-- formato de content-image
*/
?>

<article id="post-<?php  the_ID(); ?>" <?php post_class('sunset-format-image'); ?> >

  <?php if ( has_post_thumbnail() ) :
    $featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
    ?>

    <header class="entry-header text-center background-image" style="background-image: url(<?php echo $featured_image; ?>)">

      <?php the_title('<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h1>'); ?>

      <div class="entry-meta">
        <?php echo sunset_posted_meta(); ?>
      </div>

      <div class="entry-excerpt image-caption">
        <?php the_excerpt(); ?>
      </div>

    </header>
  <?php endif; ?>


  <footer class="entry-footer">
    <?php echo sunset_posted_footer(); ?>
  </footer>

</article>
