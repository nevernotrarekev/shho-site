<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
get_header();
?>
<div id="filler" class="fix">
<div id="mainColumn">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="post">
			<header>
				<div class="postMeta">
					<p class="container">
						<!--<time class="date" datetime="<?php the_time('Y-m-d') ?>">&nbsp;<?php edit_post_link(' (Edit)', '', ''); ?></time>-->
					</p>
				</div>
				<h2><?php the_title() ?></h2>
			</header>
			<section class="singleEntry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			</section>
			
		</article>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>