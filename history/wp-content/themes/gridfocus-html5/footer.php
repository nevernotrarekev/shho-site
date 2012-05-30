<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
?>
	</div>
	
<div class="footer">

			<?php include (TEMPLATEPATH . '/roman.numerals.php'); ?>
		<p >
		&copy; <?php echo decimalToRoman(date('Y')); ?>
		SHHO, Student Hip Hop Organization | Higher Learning
		</p>
		</div>	
<?php wp_footer(); ?>

<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=165603976792614";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18939246-2']);
  _gaq.push(['_setDomainName', 'theshho.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>			


<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<script src="<?php bloginfo('template_url') ?>/js/functions.js" charset="utf-8"></script>
</body>
</html>