<?php get_header(); ?>
			
							
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
		<div id="content">
	
		<div id="inner-content" class="wrap clearfix">
	
			<div id="main" class="eightcol clearfix" role="main">

	
	<header>
		
		<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
		
		<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
	
	</header> <!-- end article header -->

	<section class="post-content clearfix" itemprop="articleBody">
		<?php the_content(); ?>
		

	</section> <!-- end article section -->
	
	<footer>

		<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
		
	</footer> <!-- end article footer -->
	
	<?php comments_template(); ?>

</article> <!-- end article -->
	
	<?php endwhile; ?>			
	
	<?php else : ?>
	
	<article id="post-not-found">
	    <header>
	    	<h1>Not Found</h1>
	    </header>
	    <section class="post-content">
	    	<p>Sorry, but the requested resource was not found on this site.</p>
	    </section>
	    <footer>
	    </footer>
	</article>


	</div> <!-- end #main -->
    			
</div> <!-- #inner-content -->

</div> <!-- end #content -->

<?php endif; ?>
					
					
<?php get_footer(); ?>