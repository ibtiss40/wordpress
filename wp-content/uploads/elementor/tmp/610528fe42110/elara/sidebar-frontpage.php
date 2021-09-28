<?php
/**
* The template for displaying frontpage full width widgets
*
* @package elara
*/
if ( is_active_sidebar( 'frontpage-full-2' ) ) : ?>

	<div class="widget-area widget-area-frontpage widget-area-frontpage-full" role="complementary">
		<div class="widget-area-frontpage-2">
			<div class="wrapper">
				<?php dynamic_sidebar( 'frontpage-full-2' ); ?>
			</div>
		</div>
	</div>

<?php endif;