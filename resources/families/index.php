<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include dirname(__FILE__) . '/../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->
   <title>Marriage Seminar For Families - Deeper Christian Life Ministry</title>



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
  <?php include dirname(__FILE__) . '/../../common/dclmweb-banner.php'; ?>
	<!-- /banner_inc -->

	</div>

	<div id="resurrect-middle">

		<div id="resurrect-middle-content" class="resurrect-clearfix">

			<header id="resurrect-header" class="resurrect-header-text-<?php echo $dclm_color_style ?>">
				
	<!-- DCLM.org Logo (common tags) -->
  <?php include dirname(__FILE__) . '/../../common/dclmweb-logo.php'; ?>
	<!-- /logo_inc -->
										
				
	<!-- DCLM.org Main navigation (menu common tags) -->
  <?php include dirname(__FILE__) . '/../../common/dclmweb-nav.php'; ?>
	<!-- /nav_inc -->
				
			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

		<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="#">Marriage &amp; Family Life</a> > <a href="resources/families">Couples &amp; Families</a>
		</div>

		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">

		<article class="resurrect-entry-full ctfw-no-image">
			<h1 class="resurrect-entry-title resurrect-main-title">
				Marriage Seminar - Couples &amp; Families
			</h1>

		</article>		
		</div>
<?php
include dirname(__FILE__) . '/family_series.php';
for ($ct = 0; $ct < count($family); $ct++) {
 echo '		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">';

 echo '		<article class="resurrect-entry-full">';
 echo '			<div class="resurrect-entry-content resurrect-clearfix">';
 echo '			<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">';
 echo '				<article class="resurrect-entry-short resurrect-sermon-short ctfw-no-image">';
 echo '				<header class="resurrect-entry-header resurrect-clearfix">';
 echo '				<div class="resurrect-entry-title-meta">';
 echo '					<h3 class="resurrect-entry-title">';
 echo '						<a>Seminar '. ($ct+1) . ': ' . $family[$ct]["Title"] .'</a>';
 echo '					</h3>';
 echo '					<ul class="resurrect-entry-meta">';
 echo '						<li class="resurrect-list-buttons">';
 echo '						<a title="Read Online"><span class="resurrect-button-icon el-icon-book"></span>Read Online</a>';
 echo '						</li>';
 echo '						<li class="resurrect-list-buttons">';
 echo '						<a href="download/?link=' . $family[$ct]["Outline"] .'" title="Download Outline"><span class="resurrect-button-icon el-icon-book"></span>Save Outline</a>';
 echo '						</li>';
 echo '					</ul>';
 echo '				</div>';
 echo '				</header>';
 echo '				</article>';
 echo '			</section>';
 echo '			</div>';
 echo '		</article>';
 echo '		</div>';
}

?>

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
  <?php include dirname(__FILE__) . '/../../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->

</body>
</html>

