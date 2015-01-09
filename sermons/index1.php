<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->

   <title>Sermon Archive - Deeper Christian Life Ministry</title>


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
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

</head>

<body class="page custom-background">

<div id="resurrect-container">

	<div id="resurrect-top">

	<!-- DCLM.org Banner (common tags) -->
  <?php include '../common/dclmweb-banner.php'; ?>
	<!-- /banner_inc -->

	</div>

	<div id="resurrect-middle">

		<div id="resurrect-middle-content" class="resurrect-clearfix">

			<header id="resurrect-header" class="resurrect-header-text-<?php echo $dclm_color_style ?>">
				
	<!-- DCLM.org Logo (common tags) -->
  <?php include '../common/dclmweb-logo.php'; ?>
	<!-- /logo_inc -->
										
				
	<!-- DCLM.org Main navigation (menu common tags) -->
  <?php include '../common/dclmweb-nav.php'; ?>
	<!-- /nav_inc -->
				

	<div id="resurrect-banner">

		<img width="960" height="250" src="images/bible2-banner-960x250.jpg" class="attachment-resurrect-banner" alt="Bible 2 (Banner)" />
		
			<h1>
				<a href="sermons/" title="Sermon Archive">Sermon Archive</a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="http://dclm.org/">Home</a> > <a href="sermons/">Sermon Archive</a></div>
		
	</div>


			</header>

<div id="resurrect-content" class="resurrect-has-sidebar">

	<div id="resurrect-content-inner">

		
	<!-- DCLM.org Sermons common data -->
<?php 
	include 'sermon_query1.php';
?>
	<!-- /sermon_main -->
<?php
//output data
 $samon->getAll();
 while($row = mysqli_fetch_assoc($samon->Result)) 
 {
	 // TODO: This foreach segment can be totally avoided if date transformation (as done below) is performed during sermon data insertion
	foreach ( $row as $key => $value ) {
		if ($key == "Sdate") {
	   		$timestamp = strtotime($value);
	   		$value = date('F dS \, Y', $timestamp);
	  		$row[$key] = $value ; 
		}

	}
	$sermons[] = $row;
 }


 $ndisplay = min(5, count($sermons)-1);
 for ($s_ct=0; $s_ct <= $ndisplay; $s_ct++):
    $sermons[$s_ct]["Title"] = utf8_decode($sermons[$s_ct]["Title"]);
    //TODO: $Thumb should be different images for different sermon categories.
    $Thumb = "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg";

    $json_enc = json_encode($sermons[$s_ct]);
    if (($s_ct == 0) || ($sermons[$s_ct]["Categ"] != $sermons[$s_ct - 1]["Categ"])):
?>
        	<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">
			<article class="page type-page has-post-thumbnail hentry resurrect-entry-full ctfw-has-image">
        		<div class="resurrect-entry-content resurrect-clearfix">
				<!-- <p> We can put notices and/alerts here.</p> -->
			<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">
    <?php endif; ?>
	
    <?php if ($Thumb != ""): ?>
	    			<article class="ctc_sermon type-ctc_sermon hentry resurrect-entry-short resurrect-sermon-short">
    <?php else: ?>
	    			<article class="ctc_sermon type-ctc_sermon hentry resurrect-entry-short resurrect-sermon-short ctfw-no-image">
    <?php endif; ?>
		
    			<header class="resurrect-entry-header resurrect-clearfix">
    <?php if (($Thumb) != ""): ?>
    			<div class="resurrect-entry-image">
			<a href="sermons/" title="<?php echo $sermons[$s_ct]["Title"]; ?>"><img width="400" height="400" src="<?php echo $Thumb; ?>" class="resurrect-image" alt="" /></a>		</div>
    <?php endif; ?>
	
    		<div class="resurrect-entry-title-meta">
    				<h3 class="resurrect-entry-title">
				<a href="sermons/player/?player=video" onclick='loadSermon(<?php echo $json_enc; ?>)' title="<?php echo $sermons[$s_ct]["Descr"] . '">' . $sermons[$s_ct]["Title"]; ?></a>
    				</h3>
		
    		<ul class="resurrect-entry-meta">

    			<li class="resurrect-entry-date resurrect-content-icon">
    				<span class="el-icon-folder-open"></span>
    				<a class="dclm-sermon-category" href="sermons/biblestudies/" rel="tag"><?php echo $sermons[$s_ct]["Descr"]; ?></a>
    			</li>

    			<li class="resurrect-entry-date resurrect-content-icon">
    				<span class="el-icon-calendar"></span>
    				<time datetime="<?php echo $sermons[$s_ct]["Sdate"] . '">' . $sermons[$s_ct]["Sdate"]; ?></time>
    			</li>
    		</ul>

    	</div>

    </header>

    <footer class="resurrect-entry-footer resurrect-clearfix">
	<ul class="resurrect-entry-footer-item resurrect-list-buttons">
    <?php if(($sermons[$s_ct]["High"] != "") && ($sermons[$s_ct]["Low"] != "")): ?>
		<li>
			<a href="download/?link=<?php echo $sermons[$s_ct]["High"]; ?>" title="Download High Quality Sermon"><span class="resurrect-button-icon el-icon-download"></span>High</a>
		</li>
		<li>
			<a href="download/?link=<?php echo $sermons[$s_ct]["Low"]; ?>" title="Download Low Quality Sermon"><span class="resurrect-button-icon el-icon-download"></span>Low</a>
		</li>
    <?php elseif ($sermons[$s_ct]["High"] != ""): ?>
		<li>
			<a href="download/?link=<?php echo $sermons[$s_ct]["High"]; ?>" title="Download Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download</a>
		</li>
    <?php elseif ($sermons[$s_ct]["Low"] != ""): ?>
		<li>
			<a href="download/?link=<?php echo $sermons[$s_ct]["Low"]; ?>" title="Download Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download</a>
		</li>
    <?php endif; ?>
    <?php  if ($sermons[$s_ct]["Outline"] != ""): ?>
        	<li>
			<a href="download/?link=<?php echo $sermons[$s_ct]["Outline"]; ?>" title="Read Sermon Outline"><span class="resurrect-button-icon el-icon-book"></span> Outline </a>
		</li>
    <?php endif; ?>
    <?php
    if (($sermons[$s_ct]["High"] != "") || ($sermons[$s_ct]["Low"] != "")):
	$video_to_show = "";
	if ($sermons[$s_ct]["High"] != "")
		$video_to_show = $sermons[$s_ct]["High"] ;
	else
		$video_to_show = $sermons[$s_ct]["Low"] ;
    ?>
		<li>
			<a href="sermons/player/?player=video" onclick='loadSermon(<?php echo $json_enc; ?>)'><span class="resurrect-button-icon el-icon-video"></span>Watch</a>
         	</li>
    <?php endif; ?>

    <?php if ($sermons[$s_ct]["Audio"] != ""): ?>
        	<li>
			<a href="sermons/player/?player=audio" onclick='loadSermon(<?php echo $json_enc; ?>)'><span class="resurrect-button-icon el-icon-headphones"></span>Listen</a>
        	</li> 
    <?php endif; ?>
	</ul>

    </footer>
 
    </article>
    <?php if (($s_ct == $ndisplay) || ($sermons[$s_ct]["Categ"] != $sermons[$s_ct + 1]["Categ"])): ?>
     </section>
     </div>
     </article>
     </div>
    <?php endif; ?>

<?php
 endfor;
 mysqli_close($samon->sto_rec);

?>
	</div>

</div>


	<div id="resurrect-sidebar-right" role="complementary">
		
<?php 
	include 'sidebar-common.php';
?>
	    <aside id="tag_cloud-1" class="resurrect-widget resurrect-sidebar-widget widget_tag_cloud"><h1 class="resurrect-widget-title">Tags</h1><div class="tagcloud"><a href='http://demos.churchthemes.com/resurrect/sermon-tag/creation/' class='tag-link-20' title='1 topic' style='font-size: 8pt;'>creation</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/death/' class='tag-link-22' title='1 topic' style='font-size: 8pt;'>death</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/evangelism/' class='tag-link-7' title='1 topic' style='font-size: 8pt;'>evangelism</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/evil/' class='tag-link-24' title='1 topic' style='font-size: 8pt;'>evil</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/faith/' class='tag-link-9' title='5 topics' style='font-size: 22pt;'>faith</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/forgiveness/' class='tag-link-26' title='2 topics' style='font-size: 13.25pt;'>forgiveness</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/glory/' class='tag-link-29' title='4 topics' style='font-size: 19.6666666667pt;'>glory</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/grace/' class='tag-link-30' title='5 topics' style='font-size: 22pt;'>grace</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/heart/' class='tag-link-31' title='1 topic' style='font-size: 8pt;'>heart</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/jonah-2/' class='tag-link-36' title='1 topic' style='font-size: 8pt;'>jonah</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/justification/' class='tag-link-38' title='2 topics' style='font-size: 13.25pt;'>justification</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/love/' class='tag-link-40' title='1 topic' style='font-size: 8pt;'>love</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/mind/' class='tag-link-42' title='1 topic' style='font-size: 8pt;'>mind</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/missions-2/' class='tag-link-43' title='1 topic' style='font-size: 8pt;'>missions</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/praise/' class='tag-link-13' title='1 topic' style='font-size: 8pt;'>praise</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/purpose/' class='tag-link-45' title='1 topic' style='font-size: 8pt;'>purpose</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/salvation-2/' class='tag-link-49' title='2 topics' style='font-size: 13.25pt;'>salvation</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/serve/' class='tag-link-50' title='1 topic' style='font-size: 8pt;'>serve</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/sin/' class='tag-link-51' title='1 topic' style='font-size: 8pt;'>sin</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/soul/' class='tag-link-52' title='1 topic' style='font-size: 8pt;'>soul</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/temptation/' class='tag-link-54' title='1 topic' style='font-size: 8pt;'>temptation</a>
<a href='http://demos.churchthemes.com/resurrect/sermon-tag/worship/' class='tag-link-17' title='1 topic' style='font-size: 8pt;'>worship</a></div>
	    </aside>		


	</div>

		</div>

	</div>

	<!-- Middle End -->

	<!-- Footer Start -->

	<footer id="resurrect-footer">

	<!-- footer_inc (DCLM.org Footer) -->
  <?php include '../common/dclmweb-footer.php'; ?>
	<!-- /footer_inc -->

	</footer>

	<!-- Footer End -->

</div>

<!-- Container End -->



</body>
</html>

