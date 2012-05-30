<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
get_header();
?>
<div id="filler" class="fix">
	<div id="mainColumn" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" class="post">
			<header>
				<div class="postMeta fix">
					<p class="container">
						<time class="date" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('M j, Y') ?><?php edit_post_link(' (Edit)', '', ''); ?></time>
					</p>
				</div>
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
				
			</header>
			<section class="singleEntry">
				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			</section>
				<section class="social">
				<h3>Thank You</h3>
								
				<div id="fb-root"></div>
							<?php $url = substr(get_permalink(), 15);?>
	
							<div class="fb-like" data-href="<? echo 'http://'.$url?>" data-send="true" data-layout="box_count" data-width="450" data-show-faces="true"></div>
				
								<div id="tumblr"><a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; height:20px; background:url('http://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;">Share on Tumblr</a></div>
								<div id="tumblr"><g:plusone size="medium"></g:plusone>	</div>
								<div id="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="theshho">Tweet</a></div>
							</section>
		</article>
		<?php endwhile; else: ?>
		<article class="post">
			<header>
				<h2>No matching results</h2>
			</header>
			<section class="entry">
				<p>You seem to have found a mis-linked page or search query with no associated results. Please trying your search again. If you feel that you should be staring at something a little more concrete, feel free to email the author of this site or browse the archives.</p>
			</section>
		</article>
		<?php endif; ?>
	</div>
	<?php include (TEMPLATEPATH . '/second.column.post.php'); ?>
	<?php include (TEMPLATEPATH . '/third.column.shared.php'); ?>
</div>
<?php get_footer(); ?>