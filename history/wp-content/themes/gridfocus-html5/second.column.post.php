<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
<aside class="secondaryColumn">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Primary - Post') ) : else : ?>
	<?php endif; ?>
</aside>