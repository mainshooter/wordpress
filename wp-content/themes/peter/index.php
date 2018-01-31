<?php   define( 'WP_USE_THEMES', false ); get_header(); ?>
  <div class="entry">
    <div class="row">
      <div class="col-3">
        <!-- Menu -->
        <?php wp_nav_menu( array( 'theme_location' => 'side-menu' ) ); ?>
      </div><div class="col-9">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



        <!-- extra content -->
        <div class="col-4 posts">
          <div>
          <?php
          if ( has_post_thumbnail() ) {
           the_post_thumbnail('thumbnail');
          }
          else {
            echo "<div class='fake_tumpnail'></div>";
          }
          ?>

          <h1>
            <a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a>
          </h1>
          <div><?php echo $post->post_date ?></div>
        </div>
      </div>

<?php endwhile; else : ?>
	<p>
    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
  </p>
<?php endif; ?>
</div>
</div>
</div>
