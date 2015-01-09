<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->
   <title>Find A Church Location - Deeper Christian Life Ministry</title>


<!--jquery locator: http://www.bjornblog.com/web/jquery-store-locator-plugin -->
<script type='text/javascript' src='js/jquery.easydropdown.min.js'></script>	
<!-- locator css -->				
<link href="css/easydropdown.css" rel="stylesheet" type="text/css" />
<link href="css/locator.css" rel="stylesheet" type="text/css" />


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
  <?php include '../../common/dclmweb-banner.php'; ?>
	<!-- /banner_inc -->

	</div>

	<div id="resurrect-middle">

		<div id="resurrect-middle-content" class="resurrect-clearfix">

			<header id="resurrect-header" class="resurrect-header-text-<?php echo $dclm_color_style ?>">
				
	<!-- DCLM.org Logo (common tags) -->
  <?php include '../../common/dclmweb-logo.php'; ?>
	<!-- /logo_inc -->
										
				
	<!-- DCLM.org Main navigation (menu common tags) -->
  <?php include '../../common/dclmweb-nav.php'; ?>
	<!-- /nav_inc -->
				
	<div id="resurrect-banner">

		<img width="960" height="250" src="images/banners/Map-Canada2.jpg" class="attachment-resurrect-banner" alt="Canada (Banner)" />
		
			<!-- <h1><a href="locations/" title="Africa">Locations - Africa</a>	</h1> -->

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="locations/">Locations</a> > <a href="locations/find-a-church-location/">Find A Church Location</a></div>
		
	</div>

			</header>


<div id="resurrect-content" class="resurrect-no-sidebar">

	<div id="resurrect-content-inner">

		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">

		<article class="page type-page hentry resurrect-entry-full ctfw-no-image">
			<h1 class="resurrect-entry-title resurrect-main-title">FIND A CHURCH LOCATION</h1>

	<div class="resurrect-entry-content resurrect-clearfix">

    <div id="locator-container">

	<div id="form-container" class="locator-search clearfix">
	<div id="user-location" class="controls">
		<div id="form-input" class="locator-input">
			<label for="address">Your location:</label>
			<input class="autocomplete" id="address" name="address"
				type="text" placeholder="Enter a City or Province"
			/><!-- data-radius in meters -->
		</div>
		<div class="locator-selectors">
			<div class="locator-radius">
				<label>Search radius:</label>
				<select id="maxdistance" class="dropdown" name="maxdistance">
					<option value="10">10 Km</option>
					<option value="30">30 Km</option>
					<option value="50" selected="selected">50 Km</option>
					<option value="100">100 Km</option>
					<option value="200">200 Km</option>
				</select>
			</div>
			<div class="locator-btn">
				<input id="submit" type="submit" value=Search>
			</div>
		</div>
	</div> <!-- /user-location -->
	</div> <!-- end of locator-search -->


	<div id="map-container">
        	<div id="loc-list">
			<ul id="list"></ul>
		</div>
		<div id="map"></div>
	</div>
    </div>

    <div id="distances"></div>

<!-- locator is based on handlebars plugin -->
<script type='text/javascript' src='js/handlebars-1.0.0.min.js'></script>	
<!-- jlocator -->		
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&libraries=places,geometry'></script>
<script type='text/javascript' src='js/jquery.churchlocator.min.js'></script>

      <script>
        $(function() {
          $('#map-container').storeLocator({'slideMap':false,'defaultLoc':true,'defaultLat':'43.699','defaultLng':'-79.4759247','dataType':'json','dataLocation':'locations/find-location/locations_json.php','infowindowTemplatePath':'locations/find-location/templates/infowindow-description.html','listTemplatePath':'locations/find-location/templates/location-list-description.html','maxDistance':true,'noForm':true,'lengthUnit':'km','autoGeocode':true,'zoomLevel':10});
        });
      </script>

	</div>

		</article>		
		</div>

	</div>
</div>



		</div>

	</div>

	<!-- Middle End -->

	<!-- Footer Start -->

	<footer id="resurrect-footer">

	<!-- footer_inc (DCLM.org Footer) -->
  <?php include '../../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->

</body>
</html>

