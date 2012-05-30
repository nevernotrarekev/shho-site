<?php
/* Template Name: Featured */
?>

	<header id="featured">
<?php
switch_to_blog(1); //main blog id
//The Query
query_posts('pagename=main-feature&posts_per_page=1');

//The Loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="featuredthumb"> 
					<?php the_advanced_excerpt() ?>
				</div>

<?php endwhile; else:
endif;

//Reset Query
wp_reset_query();
restore_current_blog();

?>
	</header>

</body>
</html>