<?php
/* Template Name: About */
get_header();
?>
	<div id="mainColumn">				
	 
		<article id="about" class="post">
			<header>
				<div class="postMeta">
				&nbsp;
				</div>
			</header>
			<section class="entry">
				
			<!--<ProductVersion>1.5.8</ProductVersion>-->
				<script language="JavaScript" type="text/javascript">
				
				function getURLParam(strParamName){
			    var strReturn = "";
			    var strHref = window.location.href;
			    if ( strHref.indexOf("?") > -1 ){
			      var strQueryString = strHref.substr(strHref.indexOf("?")).toLowerCase();
			      var aQueryString = strQueryString.split("&");
			      for ( var iParam = 0; iParam < aQueryString.length; iParam++ ){
			        if ( 
			  aQueryString[iParam].indexOf(strParamName.toLowerCase() + "=") > -1 ){
			          var aParam = aQueryString[iParam].split("=");
			          strReturn = aParam[1];
			          break;
			        }
			      }
			    }
			    return unescape(strReturn);
			  }
			
			 document.write(
			    '<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"\n'+
			    '  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0"\n'+   
			    '  WIDTH="100%" HEIGHT="100%" id="flashMovie" align="middle">\n'+
			    '  <PARAM NAME="allowScriptAccess" value="http://theshho.com/shho-and-prove/wp-content/themes/gridfocus-html5/" />\n'+
			  	'  <PARAM NAME="allowFullScreen" value="true" />\n'+
			    '  <PARAM NAME=movie '+
			    '    VALUE="http://theshho.com/shho-and-prove/wp-content/themes/gridfocus-html5/movie.swf?pageNumber='+getURLParam('pageNumber')+'" />\n'+
			    '  <PARAM NAME=quality VALUE=high />\n'+
			    '  <PARAM NAME=bgcolor VALUE=#ffffff />\n'+
			    '  <PARAM NAME=scale VALUE=noscale />\n'+
			    '  <EMBED src="http://theshho.com/shho-and-prove/wp-content/themes/gridfocus-html5/movie.swf?pageNumber=' + getURLParam('pageNumber') + '"' +
			    '    bgcolor=#ffffff WIDTH="100%" HEIGHT="100% '+
			    '    quality="high"' +
			    '    scale="noscale"' +
			    '    name="flashMovie"' +
			    '    allowFullScreen="true"' +
			    '    TYPE="application/x-shockwave-flash"'+
			    '  />\n'+
			    '</OBJECT>\n');
				</script>


			</section>
		</article>
	</div>
	<?php include (TEMPLATEPATH . '/second.column.index.php'); ?>
	<?php include (TEMPLATEPATH . '/third.column.shared.php'); ?>
</div>
<?php get_footer(); ?>