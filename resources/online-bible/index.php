<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->
   <title>Online Bible - Deeper Christian Life Ministry</title>


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
				
			</header>


<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">
<!-- Start_onlineBible --> 
		<div class="ctfw-breadcrumbs"><a href="http://dclm.org/">Home</a> > <a href="resources/">Resources</a> > <a href="resources/online-bible/">Online Bible</a>
		</div>
		

		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">

		<article class="page type-page hentry resurrect-entry-full ctfw-no-image">
			<h1 class="resurrect-entry-title resurrect-main-title">Online Bible</h1>

		<div class="resurrect-entry-content resurrect-clearfix">

			<p>
		<script id="bw-widget-src" type="text/javascript" src="//bibles.org/widget/client"></script>
		<script type="text/javascript">
/* <![CDATA[ */
		BIBLESEARCH.widget({
			"background": "7F0E0E",
			"placeholder": "Search for Bible passages and keywords ",
			"selected": "eng-KJV",
			"versions": "eng-KJV"
		});
		/* ]]> */
		</script></p>
		<p><strong>Listen to the Bible Online</strong><br />
		<iframe src="http://www.faithcomesbyhearing.com/projects/streaming_player/widget-iframe.php?bible_id=ENGKJVC2DA&amp;size=600X150&amp;c_head_bg=820127&amp;c_head_border_bg=f6b149&amp;c_main_bg=e6e0c7&amp;c_head_txt=ffffff&amp;c_dl_txt=8b8265&amp;c_dl_bg=f6b149" height="150" width="600" frameborder="0" scrolling="no"></iframe></p>

		</div>

		</article>		
		</div>
<!-- End /onlineBible -->
	</div>
</div>


	<div id="resurrect-sidebar-right" role="complementary">
		
		<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-sermons">
	<!-- DCLM.org Recent_sermons -->
<?php
	include dirname(__FILE__) . '/../../rct_sermons.php';

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
  <?php include '../../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->

</body>
</html>

