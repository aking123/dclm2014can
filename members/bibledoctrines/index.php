<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie8 no-js" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en-US"> <!--<![endif]-->
<head>

	<!-- DCLM.org Head (common tags) -->
  <?php include '../../common/dclmweb-head.php'; ?>
	<!-- /head_inc -->
   <title>Bible Doctrines - Deeper Christian Life Ministry</title>


<!--Select dropdown -->
   <script type='text/javascript' src='js/jquery.easydropdown.min.js'></script>	
   <link href="css/easydropdown.css" rel="stylesheet" type="text/css" />

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

		<img width="960" height="250" src="images/bible2-banner-960x250.jpg" class="attachment-resurrect-banner" alt="Bible 2 (Banner)" />
		
			<h1>
				<a title="Sermon Archive">Bible Doctrines</a>
			</h1>

			<div class="ctfw-breadcrumbs"><a href="./">Home</a> > <a>Members</a> > <a href="members/bibledoctrines/">Bible Doctrines</a>
			</div>
		
	</div>
			</header>


<div id="resurrect-content" class="resurrect-no-sidebar">

	<div id="resurrect-content-inner">

		<div class="ctfw-breadcrumbs">
				<label>Select Bible Doctrine </label>
				<select id="doctrine_select" class="dropdown" name="doctrine_select">
	   <option value="0" selected="selected">Introduction To Bible Doctrines</option>
	   <option value="1">The Holy Bible</option>
	   <option value="2">The Godhead</option>
	   <option value="3">The Virgin Birth of Jesus</option>
	   <option value="4">Total Depravity and Guilt of All Men </option>
	   <option value="5">Repentance</option>
	   <option value="6">Restitution</option>
	   <option value="7">Justification</option>
	   <option value="8">Water Baptism </option>
	   <option value="9">The Lord&rsquo;s Supper</option>
	   <option value="10">Entire Sanctification</option>
	   <option value="11">Holy Ghost Baptism</option>
	   <option value="12">Redemption, Healing and Health</option>
	   <option value="13">Personal Evangelism</option>
	   <option value="14">Marriage</option>
	   <option value="15">The Rapture </option>
	   <option value="16">The Resurrection of The Dead</option>
	   <option value="17">The Great Tribulation</option>
	   <option value="18">The Second Coming of Christ</option>
	   <option value="19">Christ's Millennial Reign</option>
	   <option value="20">The Great White Throne Judgement</option>
	   <option value="21">The New Heaven and The New Earth</option>
	   <option value="22">Hell</option>
				</select>

		</div>

                <div id="dclm-bibledoctrines">		
<?php
		include 'doctrines_array.php';
?>
		</div> <!-- end /dclm-bibledoctrines-->
<!-- End Bible Doctrines text -->
      <script>
$("#doctrine_select").change(function() {
    //get the selected value
    var selectedValue = this.value;

    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4) {// request is done
            if (httpRequest.status === 200) {// successfully
//		document.getElementById("dclm-bibledoctrines").innerHTML=httpRequest.responseText;
	        $("#dclm-bibledoctrines").html(httpRequest.responseText);
            }
        }
    };
    httpRequest.open("GET", "members/bibledoctrines/doctrines_array.php?option="+selectedValue, true);
    httpRequest.send();
});
      </script>

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

