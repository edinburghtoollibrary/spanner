<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="s"><span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ); ?></span></label>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  <input type="submit" class="lnr search-submit" value="<?php echo esc_attr_x( '&#xe86f;', 'submit button' ); ?>" />
</form>
