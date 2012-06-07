/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp-head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// Modernizr.load loading the right scripts only if you need them
Modernizr.load([
	{
    // Let's see if we need to load selectivizr
    test : Modernizr.borderradius,
    // Modernizr.load loads selectivizr and Respond.js for IE6-8
    nope : ['libs/selectivizr-min.js']
	}
]);


// as the page loads, call these scripts
jQuery(document).ready(function($) {
	

	//preload images
	if(!$.browser.msie) $(window).preloader();
	
	// Global vars
	var $artHeaderInner = $('.wordmark');
	var windowScroll;
	
	// Identify if visitor has a large enough viewport for parallaxing title
	function isLargeViewport() {
	if($nav.css('position') == "relative") {
	  return false;
	} else {
	  return true;
	}

	}
	
  // Functional parallaxing calculations
  function slidingTitle() {
    //Get scroll position of window
    windowScroll = $(this).scrollTop();

    //Slow scroll of .art-header-inner scroll and fade it out
    $artHeaderInner.css({
      'margin-top' : -(windowScroll/3)+ 100 +"px",
      'opacity' : 1-(windowScroll/100)
    });

  }
  
    $(window).scroll(function() {
        slidingTitle();
    });

	
	//change margin top of main wrap
	$(window).resize(function() {
	
		$('#main-wrap').css({marginTop:$(window).height()});
		
	}).trigger('resize');

	/* Navigation Items
		----------------------------*/
		$('#left_arrow').click(function(e) {
					
			api.prevSlide();
			
	    });
		
		
	    $('#right_arrow').click(function(e) {
			
			api.nextSlide();
					
	    });
	    
	$('#supersized li.activeslide img').css({opacity:0}).animate({opacity:1},400);
	
	jQuery('#toc-toggle').click(function(e) {
		$('#toc').fadeToggle(500);
	
	 });
	 
	 jQuery('#toc img').click(function(e){
		event.preventDefault();
	 	$('#toc').fadeOut(500);
	 });
	 
	 var my_div = $("#main-wrap");
   	 var div_top = my_div.offset().top;
	var el = '#supersized',
	base = this;
	$(window).scroll(function(){
		fromTop = $(window).scrollTop();
		        $(document).scroll(function() {
        		event.preventDefault();
        		
        		           	 	$('#toc').fadeOut(500);


            if (div_top < $(window).scrollTop()) {
				clearInterval(vars.slideshow_interval);	// Stop slideshow, prevent buildup
				$.supersized.playToggle();
            }
            else {
				$.supersized.playToggle();
			}

        });
    });
    

}); /* end of as page load scripts */



// HTML5 Fallbacks for older browsers
jQuery(function($) {
    // check placeholder browser support
    if (!Modernizr.input.placeholder) {
        // set placeholder values
        $(this).find('[placeholder]').each(function() {
            $(this).val( $(this).attr('placeholder') );
        });
 
        // focus and blur of placeholders
        $('[placeholder]').focus(function() {
            if ($(this).val() === $(this).attr('placeholder')) {
                $(this).val('');
                $(this).removeClass('placeholder');
            }
        }).blur(function() {
            if ($(this).val() === '' || $(this).val() === $(this).attr('placeholder')) {
                $(this).val($(this).attr('placeholder'));
                $(this).addClass('placeholder');
            }
        });
 
        // remove placeholders on submit
        $('[placeholder]').closest('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                if ($(this).val() === $(this).attr('placeholder')) {
                    $(this).val('');
                }
            });
        });
    }
});


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){
		return;
	}
	
    var doc = w.document;

    if( !doc.querySelector ){ return; }

    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;

    if( !meta ){ return; }

    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true;
    }

    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false;
    }
	
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
				
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){
				disableZoom();
			}
        }
		else if( !enabled ){
			restoreZoom();
        }
    }
	
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );

})( this );
