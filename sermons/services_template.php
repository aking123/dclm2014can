<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include dirname(__FILE__) . '/../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

   <title><?php echo $thisCateg; ?> Archive - Deeper Christian Life Ministry</title>


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

		<img width="960" height="250" src="images/bible2-banner-960x250.jpg" class="attachment-resurrect-banner" alt="Bible 2 (Banner)" />
		
			<h1>
				<a href="sermons/" title="Sermon Archive">Sermons - <?php echo $thisCateg; ?></a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="sermons/">Sermon Archive</a> > <a href="sermons/<?php echo $baseLink; ?>/"><?php echo $thisCateg; ?></a></div>
		
	</div>

			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

		
	<!-- DCLM.org Services' Sermons common data -->
<?php
        include dirname(__FILE__) . '/sermon_generic.php';  
	//<!-- /sermon_main -->
?>		
	</div>

</div>

	<!-- Sermon sidebar -->
	<div id="resurrect-sidebar-right" role="complementary">
		
	    <aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories">
<?php
echo '		<h1 class="resurrect-widget-title">' . $thisCateg .' Archive</h1>';
echo '		<ul>';
for ($py=1; $py < 5 ; $py++):
echo '			<li class="cat-item"><a href="sermons/' . $baseLink .'?yr='. (date('Y') - $py) .'">' . (date('Y') - $py) . ' ' . $thisCateg .'</a></li>';
endfor;
echo '		</ul>';
?>
	    </aside>

<?php
	//<!-- Common sermon pages sidebar -->
        include dirname(__FILE__) . '/sidebar-common.php';  
	//<!-- /Common sermon pages sidebar -->
?>		
	</div>
	<!-- /End Sermon sidebar -->

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

