<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( 'post' === get_post_type() ) : ?>

		<?php elseif ( 'page' === get_post_type() && get_edit_post_link() ) : ?>
			<div class="entry-meta">
				<?php invsc_edit_link(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>

		<?php if ( is_front_page() && ! is_home() ) {

			// The excerpt is being displayed within a front page section, so it's a lower hierarchy than h2.
			the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		} else {
			the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
		} ?>
        <div class="entry-meta" style="margin-bottom: 15px">
            <?php
            echo invsc_time_link();
            invsc_edit_link();
            ?>
            <br>
        </div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-summary">
        <?php
            if (get_post_type() === 'events') {
                $eventDate = get_post_meta( $post->ID, 'date');
                echo '<p>Em: ' . date("d/m/Y", strtotime($eventDate[0])) . '</p>';
            }
        ?>
        <div class="content-page-post-thumbnail">
            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
        </div>
        <a href="<?php echo get_permalink(); ?>" class="except-text"><?php the_excerpt(); ?></a>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
