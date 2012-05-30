<?php
/**
 * NGG_Pointers Class for WordPress 3.3, Thanks to the pre-work of the YOAST (WP-Seo)
 * @example http://theme.fm/?p=2407 and http://core.trac.wordpress.org/ticket/18693
 * 
 * @package NextGEN-Gallery
 * @version 0.9.0
 * @since 1.9.0
 * @access public
 */
class NGG_Pointers {

    var $pointers = array();
    var $settings = array();

	function __construct() {
	   
        // create an array if pointers for each page
 		$this->pointers = array( 
			'nggallery-add-gallery' => array(
				'id'	   => 'image_resize_pointer',
				'content'  => __('<h3>Client side resize</h3><p>You can now resize the images before you start with the upload.</p>', 'nggallery'),
                'posititon'=> 'top'
			)
		);
        
        $page =  ( isset($_GET['page']) ) ? $_GET['page'] : '';        
        $this->settings = ( isset( $this->pointers[$page] ) ) ? $this->pointers[$page] : array();
               
        add_action( 'admin_enqueue_scripts', array( &$this, 'enqueue' ) );        	   
	}

    /**
     * Deleting settings would reset them to the defaults. 
     * This function has to be used before any output has started as it calls setcookie()
     * 
     * @return void
     */
    function delete_user_setting() {
		if ( isset( $_GET['ngg_restart_tour'] ) )
        	delete_user_setting('nextgen_tour_pointer');
    }
	
	function enqueue() {
	   
        //TODO : Reset currently all pointer tours, needs to be more specific
		if ( isset( $_GET['ngg_restart_tour'] ) )
            delete_user_meta(get_current_user_id(), 'dismissed_wp_pointers' );

        $dismissed = explode( ',', (string) get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) );
        
        // if we are not on the correct page we will notenqueue the pointer scripts         
		if ( !empty( $this->settings ) ) {
		  
            // exit if the user already closed it
            if ( in_array( 'ngg-' . $this->settings['id'], $dismissed ) )
                return;
                
			wp_enqueue_style( 'wp-pointer' ); 
			wp_enqueue_script( 'wp-pointer' ); 
			add_action( 'admin_print_footer_scripts', array( &$this, 'print_scripts' ), 99 );
		}
	}

	function print_scripts() {
        // show up the pointer dialog with the correct settings
    	$this->show_pointer( $this->settings );
	}
	
	/**
	 * Show up the pointer
	 * 
	 * @param array $settings
	 * @return void
	 */
	function show_pointer( $settings ) {
	?>
	<script type="text/javascript"> 
	//<![CDATA[ 
	jQuery(document).ready( function() { 
		jQuery('#<?php echo $settings['id']; ?>').pointer({ 
			content: '<?php echo addslashes( $settings['content'] ); ?>', 
			position: '<?php echo $settings['posititon']; ?>',
			close: function() {
    			jQuery.post( ajaxurl, {
    					pointer: 'ngg-<?php echo $settings['id']; ?>',
    					action: 'dismiss-wp-pointer'
                });
            }
		}).pointer('open'); 
	}); 
	//]]> 
	</script>
	<?php
	}
}

$ngg_pointers = new NGG_Pointers;