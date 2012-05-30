<?php
/*Template Name: Thank You */ 
get_header();
?>
<div id="filler" class="fix">
<div id="mainColumn">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="post">
			<header>
				<div class="postMeta">
					<p class="container">
						<time class="date" datetime="<?php the_time('Y-m-d') ?>">&nbsp;<?php edit_post_link(' (Edit)', '', ''); ?></time>
					</p>
				</div>
				<h2><?php the_title() ?></h2>
			</header>
			<section class="singleEntry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			</section>
			<section class="social">
				<h3>Thank You</h3>
								<div id="fb-like"><fb:like href="<?php the_permalink()?>" layout="box_count" show_faces="false" width="450" action="recommend" font="arial"></fb:like></div>
								<div id="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="theshho">Tweet</a></div>
							</section>
		</article>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>