<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include dirname(__FILE__) . '/../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->
   <title>Campus Koinonia - Deeper Christian Life Ministry</title>



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
				<a title="Sermon Archive">CAMPUS FELLOWSHIP (KOINONIA) STUDY SERIES</a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="resources/campus">Campus Fellowship Studies</a></div>
		
	</div>
			</header>


<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

<?php
$tpl = 'koinonia_template.php';
include dirname(__FILE__) . '/koinonia.php';
$campusTotal = count($koinonia);
if (fmod($campusTotal,5) == 0)
   $page_total = (int)($campusTotal/5) ;
else
   $page_total = (int)($campusTotal/5) + 1 ;

$startCt = (($thisPage - 1) * 5);
$stopCt = min((5*$thisPage), $campusTotal) - 1 ;
for ($ct = $startCt; $ct <= $stopCt; $ct++) {
 echo '		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">';

 echo '		<article class="resurrect-entry-full">';
 echo '					<h3 class="resurrect-entry-title">';
 echo '						<a>' . $koinonia[$ct]["month"] .'</a>';
 echo '					</h3>';
 echo '			<div class="resurrect-entry-content resurrect-clearfix">';
 echo '			<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">';
 for ($cp = 0; $cp < 5; $cp++) {
 $thisWeek = "Week". ($cp + 1);
 $theOutline = "Wk". ($cp+1) . "Outline" ;
 $topics = $koinonia[$ct][$thisWeek] ;
 $outlines = $koinonia[$ct][$theOutline] ;
 if ($topics == "") continue ;
 echo '				<article class="resurrect-entry-short resurrect-sermon-short ctfw-no-image">';
 echo '				<header class="resurrect-entry-header resurrect-clearfix">';
 echo '				<div class="resurrect-entry-title-meta">';
 echo '					<h3 class="resurrect-entry-title">';
 echo '						<a>' . $topics .'</a>';
 echo '					</h3>';
 echo '					<ul class="resurrect-entry-meta">';
// echo '						<li class="resurrect-entry-date resurrect-content-icon">';
 //echo '						</li>';
 //echo '						<li class="resurrect-entry-date resurrect-content-icon">';
// echo '						<span class="el-icon-calendar"></span> <time datetime="2014-07-21T00:00:00">'.$koinonia[$ct]["month"].'</time>';
 //echo '						</li>';
 echo '						<li class="resurrect-list-buttons">';
 echo '						<a href="download/?link=' . $outlines .'" title="Download Outline"><span class="resurrect-button-icon el-icon-book"></span>	Outline	</a>';
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
			<li class="cat-item"><a href="resources/campus/2014/" title="View Campus koininia Studies">2014 Teachings</a>
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

