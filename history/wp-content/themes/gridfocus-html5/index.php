<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
get_header();
?>
	<div id="mainColumn">				
	 

<?php
/** if (have_posts()) : ?>
        <?php
		$temp = $wp_query;
		$wp_query= null;
		$wp_query = new WP_Query();
		$wp_query->query('showposts=10'.'&paged='.$paged);
	?>
	<?php while ($wp_query->have_posts()) : $wp_query->the_post();  **/ ?>


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="post">
			
			<section class="entry">
				
				<!--<time class="date" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('M j, Y') ?></time>-->
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
				
				<?php the_excerpt(); ?>


				<a href="<?php the_permalink()?>" class="read-more">Read More</a>

			</section>
		</article>
		<?php endwhile; ?>
		<?php else : ?>
		<article class="post">
			<header>
				<div class="postMeta">
					<p class="container">
						<time class="date">No Matches</time>
					</p>
				</div>
				<h2>No matching results</h2>
			</header>
			<section class="entry">
				<p>You seem to have found a mis-linked page or search query with no matching results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
			</section>
		</article>
		<?php endif; ?>
	<div id="paginateIndex" class="fix">
			<p><span class="left"><?php previous_posts_link('&laquo; Previous') ?></span> <span class="right"><?php next_posts_link('Next &raquo;') ?></span></p>
		</div>

	</div>
	<?php// include (TEMPLATEPATH . '/second.column.index.php'); ?>
	<?php //include (TEMPLATEPATH . '/third.column.shared.php'); ?>
</div>
<?php get_footer(); ?>