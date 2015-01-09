<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include dirname(__FILE__) .'/../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

   <title><?php echo $thisCateg; ?> Sermons - Deeper Christian Life Ministry</title>


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
  <?php include dirname(__FILE__) .'/../common/dclmweb-banner.php'; ?>
	<!-- /banner_inc -->

	</div>

	<div id="resurrect-middle">

		<div id="resurrect-middle-content" class="resurrect-clearfix">

			<header id="resurrect-header" class="resurrect-header-text-<?php echo $dclm_color_style ?>">
				
	<!-- DCLM.org Logo (common tags) -->
  <?php include dirname(__FILE__) .'/../common/dclmweb-logo.php'; ?>
	<!-- /logo_inc -->
										
				
	<!-- DCLM.org Main navigation (menu common tags) -->
  <?php include dirname(__FILE__) .'/../common/dclmweb-nav.php'; ?>
	<!-- /nav_inc -->
				
	<div id="resurrect-banner">

		<img width="960" height="250" src="images/bible2-banner-960x250.jpg" class="attachment-resurrect-banner" alt="Bible 2 (Banner)" />
		
			<h1>
				<a href="sermons/" title="Sermon Archive">Sermons - <?php echo $thisCateg; ?></a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a href="sermons/">Sermon Archive</a> > <a href="sermons/<?php echo lcfirst($thisCateg); ?>/"><?php echo $thisCateg; ?></a></div>

		
	</div>

			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

        	<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">
			<article class="page type-page has-post-thumbnail hentry resurrect-entry-full ctfw-has-image">
				<h1 class="resurrect-entry-title resurrect-main-title"><?php echo $categTitle; ?></h1>
		
				<div class="resurrect-entry-content resurrect-clearfix">
					<div class="resurrect-galleries-list gallery gallery-columns-2">

	<!-- DCLM.org Crusade Sermons common data -->
<?php 
 require_once(dirname(__FILE__) .'/sermon_query.php');

 $tpl = "../events_template.php";
 
 //output data
 $samon->populateEvents($db_categ, $theYear);
 $events = array(array());
 while($row = $samon->result->fetch(PDO::FETCH_ASSOC))
 {
   $events[] = $row;
 }
 $nEvents = count($events) - 1;
 for ($ct=1; $ct <= $nEvents; $ct++):
	$thisEvent = $events[$ct];
	$year = $theYear;
	$monthNum = substr($thisEvent["categ_id"], 4, 2);
	$month = date('F', mktime(0, 0, 0, $monthNum, 10));

	$linkname = str_replace("'", "", $thisEvent["Theme"]);
	$linkname = str_replace(" ", "_", $linkname);
	$page_link = "sermons/" . lcfirst($thisCateg) ."/" . $linkname ;
	$json_enc = array("pageNum" => "1", "pageLink" => $page_link,
			 "ptemplate" => $tpl, "event_id" => $thisEvent["categ_id"]);
?>
<div class="resurrect-galleries-item gallery-item resurrect-caption-image">
	<a href="<?php echo $page_link; ?>" onclick='loadSermon(<?php echo json_encode($json_enc); ?>)' title="<?php echo htmlspecialchars($thisEvent["Theme"]); ?>">
		<img src="images/<?php echo lcfirst($thisCateg) ."/" . $thisEvent["webFlyer"]; ?>" class="resurrect-image" alt="<?php echo htmlspecialchars($thisEvent["Theme"]); ?>" />
		<div class="resurrect-caption-image-caption">
			<!--<div class="resurrect-caption-image-title"><?php echo htmlspecialchars($thisEvent["Theme"]); ?></div>-->
			<div class="resurrect-caption-image-description"><?php echo $month . ', ' . $year; ?></div>
		</div>
	</a>
</div>

 <?php endfor; ?>
	<!-- / End Crusade Sermons common data -->
				
					</div>
				</div>
			</article>
		</div>
	</div>
</div>


	<!-- Sermon sidebar -->
	<div id="resurrect-sidebar-right" role="complementary">
		
	    <aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories">
<?php
echo '		<h1 class="resurrect-widget-title">' . $thisCateg .' Archive</h1>';
echo '		<ul>';
for ($py=1; $py < 5 ; $py++):
echo '			<li class="cat-item"><a href="sermons/' . lcfirst($thisCateg) .'?yr='. (date('Y') - $py) .'">' . (date('Y') - $py) . ' ' . $thisCateg .'</a></li>';
endfor;
echo '		</ul>';
?>
	    </aside>

<?php 
	include dirname(__FILE__) . '/sidebar-common.php';
?>

	</div>
	<!-- /End Sermon sidebar -->


		</div>

	</div>

	<!-- Middle End -->

	<!-- Footer Start -->

	<footer id="resurrect-footer">

	<!-- footer_inc (DCLM.org Footer) -->
  <?php include dirname(__FILE__) .'/../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->

</body>
</html>

