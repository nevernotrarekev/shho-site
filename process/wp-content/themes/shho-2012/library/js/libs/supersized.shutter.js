/*

	Supersized - Fullscreen Slideshow jQuery Plugin
	Version : 3.2.7
	Theme 	: Shutter 1.1
	
	Site	: www.buildinternet.com/project/supersized
	Author	: Sam Dunn
	Company : One Mighty Roar (www.onemightyroar.com)
	License : MIT License / GPL License

*/

(function($){
	
	theme = {
	 	
	 	
	 	/* Initial Placement
		----------------------------*/
	 	_init : function(){
		
	
		
			(api.getField('title')) ? $(vars.slide_caption).html(api.getField('title')) : $(vars.slide_caption).html('');
			(api.getField('desc')) ? $('#slidecaption > p').html(api.getField('desc')) : $('#slidecaption > p').html('');
			
			$('#supersized li.activeslide img').css({opacity:0}).animate({opacity:1},400);
			
			$('#slidecaption').stop().animate({bottom:'0px'},400, 'easeInOutExpo');
		
			$('#supersized li.activeslide a[href*="http://vimeo.com/"]').each(function() {
				$(this).attr('href',this.href.replace('vimeo.com/', 'player.vimeo.com/video/')).addClass('lightboxvideo');
			});
			
			$('#supersized li.activeslide a[href*="http://www.youtube.com/watch?"]').each(function() {
				$(this).attr('href',this.href.replace('watch?v=', 'embed/')).addClass('lightboxvideo');
			});

			$("a.lightboxvideo").colorbox({

				fixed:true,
				opacity :0,
				iframe:true,			
				innerWidth:"70%", innerHeight:"72%"

			});
			
			/* Navigation Items
			----------------------------*/
			$('#left_arrow').click(function(e) {
						
				api.prevSlide();
				
		    });
			
			
		    $('#right_arrow').click(function(e) {
				
				api.nextSlide();
						
		    });
		    
		
		    
		    
			
	
			

			
			
			/* Window Resize
			----------------------------*/
			$(window).resize(function(){
				
				

			});	
			
								
	 	},
	 	
	 	
	 	/* Go To Slide
		----------------------------*/
	 	goTo : function(){
		

		},
	 	
	 	/* Play & Pause Toggle
		----------------------------*/
	 	playToggle : function(state){
		
	 
	 		
	 	},
	 	
	 	
	 	/* Before Slide Transition
		----------------------------*/
	 	beforeAnimation : function(direction){
		

		
			
			

		  	/* Update Fields
		  	----------------------------*/
		  	// Update slide caption

			//$('#slidecaption').fadeOut(400, function(){
			
				//if ($(vars.slide_caption).length)
					//(api.getField('title')) ? $(vars.slide_caption).html(api.getField('title')) : $(vars.slide_caption).html('');
		   
		//	});
			
			//$('#slidecaption').stop().animate({opacity:0,marginBottom:'-30px'},600);
		   
		    
	 	},
	 	
	 	
	 	/* After Slide Transition
		----------------------------*/
	 	afterAnimation : function(){
		
			$('#supersized li.activeslide a[href*="http://vimeo.com/"]').each(function() {
				$(this).attr('href',this.href.replace('vimeo.com/', 'player.vimeo.com/video/')).addClass('lightboxvideo');
			});
			
			$('#supersized li.activeslide a[href*="http://www.youtube.com/watch?"]').each(function() {
				$(this).attr('href',this.href.replace('watch?v=', 'embed/')).addClass('lightboxvideo');
			});


			$("a.lightboxvideo").colorbox({

				fixed:true,
				opacity :0,
				iframe:true,			
				innerWidth:"70%", innerHeight:"72%"

			});


			
			$('#slidecaption').stop().animate({bottom:-$('#slidecaption').outerHeight()},400, 'easeInOutExpo', function(){
			
				(api.getField('title')) ? $(vars.slide_caption).html(api.getField('title')) : $(vars.slide_caption).html('');
				(api.getField('desc')) ? $('#slidecaption > p').html(api.getField('desc')) : $('#slidecaption > p').html('');
				$(this).stop().animate({bottom:'0px'},400, 'easeInOutExpo');
			
			
			});
	 	},
	 	
	 	
	 	/* Progress Bar
		----------------------------*/
		progressBar : function(){

    	}
	 	
	 
	 };
	 
	 
	 /* Theme Specific Variables
	 ----------------------------*/
	 $.supersized.themeVars = {
	 	
	 	// Internal Variables
		progress_delay		:	false,				// Delay after resize before resuming slideshow
		thumb_page 			: 	false,				// Thumbnail page
		thumb_interval 		: 	false,				// Thumbnail interval
		image_path			:	'img/',				// Default image path
													
		// General Elements							
		play_button			:	'#pauseplay',		// Play/Pause button
		next_slide			:	'#nextslide',		// Next slide button
		prev_slide			:	'#prevslide',		// Prev slide button
		next_thumb			:	'#nextthumb',		// Next slide thumb button
		prev_thumb			:	'#prevthumb',		// Prev slide thumb button
		
		slide_caption		:	'#slidecaption h3',	// Slide caption
		slide_current		:	'.slidenumber',		// Current slide number
		slide_total			:	'.totalslides',		// Total Slides
		slide_list			:	'#slide-list',		// Slide jump list							
		
		thumb_tray			:	'#thumb-tray',		// Thumbnail tray
		thumb_list			:	'#thumb-list',		// Thumbnail list
		thumb_forward		:	'#thumb-forward',	// Cycles forward through thumbnail list
		thumb_back			:	'#thumb-back',		// Cycles backwards through thumbnail list
		tray_arrow			:	'#tray-arrow',		// Thumbnail tray button arrow
		tray_button			:	'#tray-button',		// Thumbnail tray button
		
		progress_bar		:	'#progress-bar'		// Progress bar
	 												
	 };												
	
	 /* Theme Specific Options
	 ----------------------------*/												
	 $.supersized.themeOptions = {					
	 						   
		progress_bar		:	0,		// Timer for each slide											
		mouse_scrub			:	0		// Thumbnails move with mouse
		
	 };
	
	
})(jQuery);