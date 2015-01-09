<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include dirname(__FILE__) . '/../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->
   <title>Reports - Deeper Christian Life Ministry</title>


   <link href="css/reports.css" rel="stylesheet" type="text/css" />

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


<div id="resurrect-content" class="resurrect-no-sidebar">

	<div id="resurrect-content-inner">
<!-- Start_onlineBible --> 
		

		<div class="ctfw-breadcrumbs">
			<ul class="leaders-header-list">
				<li id="active"><a href="#">Report Submission</a></li>
				<li><a href="#">Assets Management</a></li>
				<li><a href="#">Attendance Summary</a></li>
				<li><a href="#">Financial Summary</a></li>
			</ul>
		</div>

		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">

		<article class="resurrect-entry-full ctfw-no-image">
			<h1 class="resurrect-entry-title resurrect-main-title">Reports</h1>
		</article>		
		</div>

		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">
		<div class="resurrect-entry-content resurrect-clearfix">

	<div class="sbox">
	   <h3 class="resurrect-entry-title">Monthly Attendance Reports</h3>	
	</div>

 <div class="wrap">
 <div class="half-side">
         <!-- Start News Box -->
	<div class="querybox yellowish">
                  <div class="querybox-title">
                    <h4>Bible Study Attendance </h4>
                  </div>

	<form method="post" accept-charset="UTF-8" action="../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<input type="hidden" name="place" value="<?php echo $locName; ?>"/>
	<input type="hidden" name="dbName" value="bst"/>
	<input type="hidden" name="reportType" value="attendance"/>
	<input type="hidden" name="entry" value="new"/>
		<span><strong>Select Month/Year:</strong></span><br/>
		<span>Month</span>
		    <select name="month">
			<option> </option>
			<?php echo $mntOptions ; ?>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>----</option>
			<?php echo $yrOptions ; ?>
		    </select>
		<br/><br/>
		<label><span class="labelText">Total Number of Locations:</span>
		<input name="locNum" class="text" type="text"  size="4"/></label>
		<br/><br/>
		<span><strong>Attendances:</strong></span><br/>
		<label><span class="labelText">Maximum attendance:</span>
		<input name="maxNum" class="text" type="text"/></label>
		<label><span class="labelText">Minimum attendance:</span>
		<input name="minNum" class="text" type="text"/></label>
		<label><span class="labelText">Average attendance:</span>
		<input name="aveNum" class="text" type="text"/></label>

		<br/><br style="clear:both;"/>
		<br/><br/>
		<span><strong>Weekly Bible Study Topics:</strong></span><br/>
		<label><span class="wLabel">Week 1:</span>
		<input name="week1" class="wtext" type="text"/></label>
		<label><span class="wLabel">Week 2:</span>
		<input name="week2" class="wtext" type="text"/></label>
		<label><span class="wLabel">Week 3:</span>
		<input name="week3" class="wtext" type="text"/></label>
		<label><span class="wLabel">Week 4:</span>
		<input name="week4" class="wtext" type="text"/></label>
		<label><span class="wLabel">Week 5:</span>
		<input name="week5" class="wtext" type="text"/></label>

		<br/><br style="clear:both;"/>
		<br/><br/>
		<span><strong>Comment(s):</strong></span><br/>
		<textarea rows="3" cols="10" name="comm"></textarea>
		<input class="submit" type="submit" value="Submit Attendance" />
	</form>


	</div><!---End queryBox -->
 </div><!---End Side 1 -->

 <div class="half-side">
         <!-- Start News Box -->
	<div class="querybox blueish">
                  <div class="querybox-title">
                    <h4>Sunday Service Attendance </h4>
                  </div>

	<form method="post" accept-charset="UTF-8" action="../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<input type="hidden" name="place" value="<?php echo $locName; ?>"/>
	<input type="hidden" name="dbName" value="sws"/>
	<input type="hidden" name="reportType" value="attendance"/>
	<input type="hidden" name="entry" value="new"/>
		<span><strong>Select Month/Year:</strong></span><br/>
		<span>Month</span>
		    <select name="month">
			<option> </option>
			<?php echo $mntOptions ; ?>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>----</option>
			<?php echo $yrOptions ; ?>
		    </select>
		<br/><br/>
		<br/><br/>

		<span><strong>Attendances:</strong></span><br/>
		<label><span class="labelText">Maximum attendance:</span>
		<input name="maxNum" class="text" type="text"/></label>
		<label><span class="labelText">Minimum attendance:</span>
		<input name="minNum" class="text" type="text"/></label>
		<label><span class="labelText">Average attendance:</span>
		<input name="aveNum" class="text" type="text"/></label>

		<br/><br style="clear:both;"/>
		<br/><br/>
		<span><strong>Weekly Sunday Service Sermon Titles:</strong></span><br/>
		<label><span class="wLabel">Week 1:</span>
		<input name="week1" class="wtext" type="text"/></label>
		<label><span class="wLabel">Week 2:</span>
		<input name="week2" class="wtext" type="text"/></label>
		<label><span class="wLabel">Week 3:</span>
		<input name="week3" class="wtext" type="text"/></label>
		<label><span class="wLabel">Week 4:</span>
		<input name="week4" class="wtext" type="text"/></label>
		<label><span class="wLabel">Week 5:</span>
		<input name="week5" class="wtext" type="text"/></label>

		<br/><br style="clear:both;"/>
		<br/><br/>
		<span><strong>Comment(s):</strong></span><br/>
		<textarea name="comm"></textarea>
		<input class="submit" type="submit" value="Submit Attendance" />
	</form>

	</div><!---End queryBox -->
 </div><!---End Side 2 -->

 </div><!---End wrap -->
		</div>
		</div>

		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">
		<div class="resurrect-entry-content resurrect-clearfix">
	<div class="sbox">
	   <h3 class="resurrect-entry-title">Monthly Financial Reports</h3>
	</div>

 <div class="wrap">
 <div class="half-side">
         <!-- Start News Box -->
	<div class="querybox blueish">
                  <div class="querybox-title">
                    <h4>Income Statement Report </h4>
                  </div>

	<form method="post" accept-charset="UTF-8" action="../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<?php
	  $theTitles = implode("_", $iTitles);
	  echo '<input type=hidden name="theTitles" value="'.htmlspecialchars($theTitles).'">';
	?>
	<input type="hidden" name="place" value="<?php echo $locName; ?>"/>
	<input type="hidden" name="dbName" value="income"/>
	<input type="hidden" name="reportType" value="financial"/>
		<span><strong>Select Month/Year:</strong></span><br/>
		<span>Month</span>
		    <select name="month">
			<option> </option>
			<?php echo $mntOptions ; ?>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>----</option>
			<?php echo $yrOptions ; ?>
		    </select>
		<br/><br/>
		<?php
		   for ($row = 0; $row < count($iTitles)-1; ++$row) {
		      $theLabel = str_replace(" ", "_", $iTitles[$row]);
		      echo '<label>';
		      echo '<span class="labelText">'.$iTitles[$row].':</span>';
		      echo '<input name="'.$theLabel.'" class="text" type="text"  size="3"/>';
		      echo '</label>';
		   }
		?>
		<br/><br style="clear:both;"/>
		<br/><br/>
		<span><strong>Comment(s):</strong></span><br/>
		<textarea name="comm"></textarea>
		<input class="submit" type="submit" value="Submit" />
	</form>

	</div><!---End queryBox -->
 </div><!---End Side 1 -->

 <div class="half-side">
         <!-- Start News Box -->
	<div class="querybox yellowish">
                  <div class="querybox-title">
                    <h4>Expenditure Statement Report </h4>
                  </div>

	<form method="post" accept-charset="UTF-8" action="../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<?php
	  $theTitles = implode("_", $eTitles);
	  echo '<input type=hidden name="theTitles" value="'.htmlspecialchars($theTitles).'">';
	?>
	<input type="hidden" name="place" value="<?php echo $locName; ?>"/>
	<input type="hidden" name="dbName" value="expenditure"/>
	<input type="hidden" name="reportType" value="financial"/>
		<span><strong>Select Month/Year:</strong></span><br/>
		<span>Month</span>
		    <select name="month">
			<option> </option>
			<?php echo $mntOptions ; ?>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>----</option>
			<?php echo $yrOptions ; ?>
		    </select>
		<br/><br/>
		<?php
		   for ($row = 0; $row < count($eTitles)-1; ++$row) {
		      $theLabel = str_replace(" ", "_", $eTitles[$row]);
		      echo '<label>';
		      echo '<span class="labelText">'.$eTitles[$row].':</span>';
		      echo '<input name="'.$theLabel.'" class="text" type="text"  size="3"/>';
		      echo '</label>';
		   }
		?>
		<br/><br style="clear:both;"/>
		<br/><br/>
		<span><strong>Comment(s):</strong></span><br/>
		<textarea name="comm"></textarea>
		<input class="submit" type="submit" value="Submit" />
	</form>

	</div><!---End queryBox -->
 </div><!---End Side 2 -->

 </div><!---End wrap -->



		</div>		
		</div>
<!-- End /onlineBible -->
	</div>
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

