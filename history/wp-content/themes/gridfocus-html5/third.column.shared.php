<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
<aside class="secondaryColumn">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Secondary - Shared') ) : else : ?>
	<?php endif; ?>
</aside>