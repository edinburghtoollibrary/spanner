<header class="entry-header">
	<?php if ( is_singular() || is_archive() ) : ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_header_image_tag(); ?>
		<?php get_search_form(); ?>
	<?php else : ?>
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	<?php endif; ?>

	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php spanner_posted_on(); ?>
		</div><!-- .entry-meta -->
	<?php endif; ?>
</header><!-- .entry-header -->
