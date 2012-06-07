			<footer role="contentinfo" class="footer">
			
				<div id="inner-footer" class="wrap clearfix">
					
					<nav>
						<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
					</nav>
							
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script src="<?php bloginfo('template_url')?>/library/js/libs/jquery.preloader.js" type="text/javascript" charset="utf-8"></script> 
	
		<script src="<?php bloginfo('template_url')?>/library/js/libs/jquery.scrollTo.js" type="text/javascript" charset="utf-8"></script> 

		<script src="<?php bloginfo('template_directory'); ?>/library/js/libs/jquery.tweet.js"></script>

<script type='text/javascript'>

      jQuery(function($){
        $(".tweet").tweet({
            username: "theshho",
            join_text: "auto",
            avatar_size: 32,
            count: 1,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
        });
    });
</script>

	</body>

</html>
