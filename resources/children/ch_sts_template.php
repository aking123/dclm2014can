<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include dirname(__FILE__) . '/../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->
   <title>Children Sunday School - Deeper Christian Life Ministry</title>


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
				
	<div id="resurrect-banner">
		<img width="960" height="250" src="images/bible2-banner-960x250.jpg" class="attachment-resurrect-banner" alt="Bible 2 (Banner)" />
		
			<h1>
				<a title="Sermon Archive">CHILDREN Sunday Bible Study</a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="resources/children">Children Sunday School</a></div>
		
	</div>
			</header>


<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

<?php
$tpl = 'ch_sts_template.php';
include dirname(__FILE__) . '/ch_list.php';
$kidsTotal = count($kids_sunday);
if (fmod($kidsTotal,5) == 0)
   $page_total = (int)($kidsTotal/5) ;
else
   $page_total = (int)($kidsTotal/5) + 1 ;

$startCt = (($thisPage - 1) * 5);
$stopCt = min((5*$thisPage), $kidsTotal) - 1 ;
for ($ct = $startCt; $ct <= $stopCt; $ct++) {
 echo '		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">';

 echo '		<article class="resurrect-entry-full">';
 echo '			<div class="resurrect-entry-content resurrect-clearfix">';
 echo '			<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">';
for ($kd = 0; $kd < 2; $kd++) {
 $tagName = array("Senior Kids&rsquo;", "Junior Kids&rsquo; ");
 $topics = array($kids_sunday[$ct]["srTopic"], $kids_sunday[$ct]["jrTopic"]);
 $outlines = array($kids_sunday[$ct]["srOutline"], $kids_sunday[$ct]["jrOutline"]);
 $imgs = array($kids_sunday[$ct]["srImage"], $kids_sunday[$ct]["jrImage"]);
 if ($ct == 0) {
	 echo '				<article class="resurrect-entry-short resurrect-sermon-short">';
 }
 else {
	 echo '				<article class="resurrect-entry-short resurrect-sermon-short ctfw-no-image">';
 }
 echo '				<header class="resurrect-entry-header resurrect-clearfix">';
 if ($ct == 0) {
 echo '				<div class="resurrect-entry-image">';		 echo '					<img width="300" height="300" src="images/children/' . $imgs[$kd] . '" class="resurrect-image" alt="" />';
 echo '				</div>';
 }
 echo '				<div class="resurrect-entry-title-meta">';
 echo '					<h3 class="resurrect-entry-title">';
 echo '						<a>' . $topics[$kd] .'</a>';
 echo '					</h3>';
 echo '					<ul class="resurrect-entry-meta">';
 echo '						<li class="resurrect-entry-date resurrect-content-icon">';
 echo '						<span class="el-icon-folder-open"></span> <a class="dclm-sermon-category" rel="tag">' . $tagName[$kd] .' Search The Scriptures</a>';
 echo '						</li>';
 echo '						<li class="resurrect-entry-date resurrect-content-icon">';
 echo '						<span class="el-icon-calendar"></span> <time datetime="2014-07-21T00:00:00">'.$kids_sunday[$ct]["theDate"].'</time>';
 echo '						</li>';
 echo '						<li class="resurrect-list-buttons">';
 echo '						<a href="download/?link=' . $outlines[$kd] .'" title="Download Outline"><span class="resurrect-button-icon el-icon-book"></span>	Outline	</a>';
 echo '						</li>';
 echo '					</ul>';
 echo '				</div>';
 echo '				</header>';
 echo '				</article>';
}

 echo '			</section>';
 echo '			</div>';
 echo '		</article>';
 echo '		</div>';
}

 include dirname(__FILE__) . '/../../sermons/pages_nav.php';
?>

	</div>
</div>


	<div id="resurrect-sidebar-right" role="complementary">
		
		<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories"><h1 class="resurrect-widget-title">Archives</h1>
		<ul>
			<li class="cat-item"><a href="resources/children/2014/" title="View Chidren Sunday Teachings">2014 Teachings</a>
			</li>
		</ul>
		</aside>

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

