<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include dirname(__FILE__) . '/../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

	<title><?php echo $thisProvince[0]["state"] ; ?> Locations - Deeper Christian Life Ministry</title>


<script type='text/javascript'>
/* <![CDATA[ */
var dclm_main = {<?php echo $dclm_main_common ?>"slider_slideshow":"0","comment_name_required":"1","comment_email_required":"1","comment_name_error_required":"Required","comment_email_error_required":"Required","comment_email_error_invalid":"Invalid Email","comment_url_error_invalid":"Invalid URL","comment_message_error_required":"Comment Required"};
/* ]]> */
</script>

<script type='text/javascript' src='js/resurrect/js/main.js'></script>

<script type="text/javascript">
if ( jQuery.cookie( 'resurrect_responsive_off' ) ) {

	// Add helper class without delay
	jQuery( 'html' ).addClass( 'resurrect-responsive-off' );

	// Disable responsive.css
	jQuery( '#resurrect-responsive-css' ).remove();

} else {

	// Add helper class without delay
	jQuery( 'html' ).addClass( 'resurrect-responsive-on' );

	// Add viewport meta to head -- IMMEDIATELY, not on ready()
	jQuery( 'head' ).append(' <meta name="viewport" content="width=device-width, initial-scale=1">' );

}
</script>


</head>

<body class="page custom-background">

<div id="resurrect-container">

	<div id="resurrect-top">

	<!-- DCLM.org Banner (common tags) -->
  <?php include dirname(__FILE__) . '/../common/dclmweb-banner.php'; ?>
	<!-- /banner_inc -->

	</div>

	<div id="resurrect-middle">

		<div id="resurrect-middle-content" class="resurrect-clearfix">

			<header id="resurrect-header" class="resurrect-header-text-<?php echo $dclm_color_style ?>">
				
	<!-- DCLM.org Logo (common tags) -->
  <?php include dirname(__FILE__) . '/../common/dclmweb-logo.php'; ?>
	<!-- /logo_inc -->
										
				
	<!-- DCLM.org Main navigation (menu common tags) -->
  <?php include dirname(__FILE__) . '/../common/dclmweb-nav.php'; ?>
	<!-- /nav_inc -->
				

	<div id="resurrect-banner">

		<img width="960" height="250" src="images/banners/Map-Canada2.jpg" class="attachment-resurrect-banner" alt="Canada (Banner)" />
		
			<!-- <h1><a href="locations/" title="Africa">Locations - Africa</a>	</h1> -->

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="locations/">Locations</a> > <a href="locations/<?php echo lcfirst($thisProvince[0]["state"]); ?>/"><?php echo $thisProvince[0]["state"] ; ?></a></div>
		
	</div>
			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">


		
		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">

			
<article class="page type-page status-publish has-post-thumbnail hentry resurrect-entry-full ctfw-has-image">

		
		<div class="resurrect-entry-content resurrect-clearfix">

			<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">

<?php
 for ($loc=0; $loc <= count($thisProvince)-1; $loc++) {
       $thisLoc = $thisProvince[$loc] ;
	echo '		<article class="has-post-thumbnail resurrect-entry-short resurrect-location-short ctfw-has-image">';
	echo '			<header class="resurrect-entry-header resurrect-clearfix">';

	echo '			<div class="resurrect-entry-image">';
	//echo '			<a href="http://demos.churchthemes.com/resurrect/locations/main-campus/" title="Main Campus">
	echo '<img width="400" height="400" src="images/DCLMlogo_400x400.jpg" class="resurrect-image" alt="DCLM Logo"/>';
	//echo '		</a>';
	echo '			</div>';
	
	echo '			<div class="resurrect-entry-title-meta">';
	echo '				<h1 class="resurrect-entry-title">' . $thisLoc["name"] . '</h1>';
	
	echo '				<ul class="resurrect-entry-meta">';
	echo '					<li class="resurrect-location-address resurrect-content-icon">';
	echo '						<span class="el-icon-map-marker"></span>';
	echo 						$thisLoc["address"] . '<br />';
    if ($thisLoc["address2"] != "") {
	    echo 						$thisLoc["address2"] . '<br />';
    }
	echo 						$thisLoc["city"] . ','.$thisLoc["state"] . '. '. $thisLoc ["postal"] ;
	echo '					</li>';
			
	echo '					<li class="resurrect-location-address">';
	echo '					</li>';

	echo '					<li class="resurrect-location-times resurrect-content-icon">';
	echo '						<span class="el-icon-time"></span>';
    if ($thisLoc["swsHours"] != "") {
	    echo 						$thisLoc["swsHours"]. '<br />';
     }
    if ($thisLoc["bstHours"] != "") {
	    echo 						$thisLoc["bstHours"]. '<br />';
     }
    if ($thisLoc["revHours"] != "") {
	    echo 						$thisLoc["revHours"];
     }
	echo '					</li>';

	echo '					<li class="resurrect-location-phone resurrect-content-icon">';
	echo '						<span class="el-icon-phone-alt"></span>';
	echo 						$thisLoc["phone"]. '<br />';
	echo '						1-888-710-1517';
	echo '					</li>';
			
	echo '				</ul>';
	echo '			</div>';
	echo '		</header>';

	echo '		<footer class="resurrect-entry-footer resurrect-clearfix">';

	echo '			<ul class="resurrect-entry-footer-item resurrect-list-buttons">';
	//echo '				<li><a href="'. dirname($_SERVER['PHP_SELF']) . '/' . $thisLoc["name"].'">Location Details</a>';
	//echo '				</li>';
	echo '				<li><a href="https://www.google.com/maps/dir//'. $thisLoc["lat"].', ' . $thisLoc["lng"].'/" target="_blank"><span class="resurrect-button-icon el-icon-road"></span>Directions</a>';
	echo '				</li>';
	echo '			</ul>';
	echo '		</footer>';

	echo '	</article>';
  }
?>
		

			</section>
		</div>

	</article>

		</div>
	</div>

</div>


<div id="resurrect-sidebar-right" role="complementary">
	
	<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-highlight">
		<div class="resurrect-caption-image resurrect-highlight">

			<img width="600" height="410" src="images/highlights/man5-highlight-600x410.jpg" class="resurrect-image" alt="Man 5 (Highlight)" />						<div class="resurrect-caption-image-caption">
			    <div class="resurrect-caption-image-title">
				<h1 class="resurrect-widget-title"><a href="contact/">Contact Us</a></h1>
			    </div>
			    <div class="resurrect-caption-image-description">
				<a href="contact/">Have questions?</a>	
			    </div>
			</div>
	
		</div>
	</aside>

	<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-sermons">
	<!-- DCLM.org Recent_sermons -->
<?php
		include dirname(__FILE__) . '/../rct_sermons.php';
		echo $rct_sermons ;
?>
	<!-- /DCLM.org Recent_sermons -->
	</aside>

</div>

	</div>

	</div>

	<!-- Middle End -->

	<!-- Footer Start -->

	<footer id="resurrect-footer">

	<!-- footer_inc (DCLM.org Footer) -->
  <?php include dirname(__FILE__) . '/../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->


</body>
</html>
