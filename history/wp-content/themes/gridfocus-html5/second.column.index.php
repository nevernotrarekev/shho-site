<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
<aside class="secondaryColumn">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Primary - Index') ) : else : ?>
	<?php endif; ?>
</aside>