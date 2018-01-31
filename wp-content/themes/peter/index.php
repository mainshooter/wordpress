 <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri()); ?>/style/grid.css" type="text/css">
<?php add_theme_support( 'post-thumbnails' );  define( 'WP_USE_THEMES', false ); get_header(); ?>
  <div class="entry">
    <div class="row">
      <div class="col-3">
        <!-- Menu -->
      </div><div class="col-9">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



        <!-- extra content -->
        <div class="col-4">

          <?php
          if ( has_post_thumbnail() ) {
           the_post_thumbnail('thumbnail');
          }
          ?>

          <h1>
            <a href="<?php get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a>
          </h1>
          <div><?php echo $post->post_date ?></div>
        </div>

<?php endwhile; else : ?>
	<p>
    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
  </p>
<?php endif; ?>
</div>
</div>
</div>
