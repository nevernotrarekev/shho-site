<?php
/* Template Name: SHHO and Prove */
?>

<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
get_header();
?>
	<div id="mainColumn">				
	 
<?php if (have_posts()) : ?>
        <?php
		$temp = $wp_query;
		$wp_query= null;
		$wp_query = new WP_Query();
		$wp_query->query('showposts=10'.'&paged='.$paged);
	?>

	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="post">
			<header>
				<div class="postMeta">
				&nbsp;
				</div>
			</header>
			<section class="entry">

	<?php $cti = catch_that_image(); if(isset($cti)){ ?> 	
		
		<div class="postthumb"> 
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
									<img src="<?php bloginfo('template_url'); ?>/scripts/timthumb.php?src=/blogs.dir/11/<?php echo $cti; ?>&w=880&zc=0" alt="<?php the_title(); ?>" width="880" /></a> 
								</div><?php } else {} ?>
						
								<div>				
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
	<?php include (TEMPLATEPATH . '/second.column.index.php'); ?>
	<?php include (TEMPLATEPATH . '/third.column.shared.php'); ?>
</div>
<?php get_footer(); ?>