<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Language" content="en-us" />
	<link href="../../../css/global.css" rel="stylesheet" type="text/css" />

        
	<title>Deeper Christian Life Ministry, Canada</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="Shortcut Icon" href="../../../img/favicon.ico" />
	<script type="text/javascript" language="javascript">

	function validateForm(theform) {
		mnt = theform.month.selectedIndex
		 yr = theform.year.selectedIndex

		if (mnt < 1) {
			alert('Please select a month');
			return false;
		}

		if (yr < 1) {
			alert('Please select a year');
			return false;
		}

		return true;
	}

  </script>

</head>

<body id="mainpg">

<div id="supercontainer2"> <!-- Start SuperContainer 2 -->

<div class="global-coverall"></div>
<div class="news-container1">
<!-- <div class="news-container-2"> -->
<div id="container">

<!-- Primary navigation -->
<div id="nav" class="nav">
	<div class="left"></div><span class="nav_break"></span>
	<span class="item"><a href="http://www.deeperlife.ca">Home</a></span><span class="nav_break"></span>
	<div class="navinfo"><span class="nav_break"></span><span class="right">
	</span></div>
	<span class="navmenus"><span class="right">
	<span class="item"><a href="../../../contactus.html">Contact Us</a></span><span class="nav_break"></span>
	<span class="item"><a href="../../../aboutus.html">About Us</a></span><span class="nav_break"></span>
	<span class="item"><a href="../../../events.html">Events</a></span><span class="nav_break"></span>
	<span class="item"><a href="../../../resources/">Resources</a></span><span class="nav_break"></span>
	<span class="item"><a href="../../../ministries/">Ministries</a></span><span class="nav_break"></span>
	</span></span>
</div>


<div class="header">
	<div class="head-in1">
	<div class="head-in">
		<h1><a href="http://www.deeperlife.ca" class="logotype"><img src="../../../img/DCLMlogo.png" style="border:0;" alt="Deeper Life" title="Deeper Life Canada" /></a></h1>

	</div>
	</div>
</div>   <!-- end header -->

<!-- Sub navigation -->
<div id="subnav" class="subnav">
	<div class="sub1">
	<div id="subarrow"></div>
	<div id="subnav_explainer"></div>
	<span id="subnavitems">
	<span class="item_selected"><a href="../">Reports</a></span><span class="subnav_break_blank"></span>
	<span class="item"><a href="../../publications/">Publications</a></span><span class="subnav_break"></span>
	<span class="item"><a href="../../leadership/">Leadership Training</a></span><span class="subnav_break"></span>
	</span>
	<span class="subnavit">
	<span class="item_selected"><a href="../../../externs/authorize.php?logout=yes">Logout</a></span>
	</span>
	<div class="subinfo" id="subinfo"></div>
	</div>
</div>

<!-- Section Header and Page Navigation Controls -->
<div class="sx_header">

	<div class="left"></div> 
	<div class="sortby"><?php echo $locName.' Church' ;?></div>	  
	<div id="sort_type">
             <span class="item"><a href="../">Bible Study Attendance</a></span>
             <span class="item_selected"><a href="./">Sunday Service Attendance</a></span>
             <span class="item"><a href="../financial/">Financial Summary</a></span>
             <span class="item"><a href="../assets/">Church Assets</a></span>                <span class="item"><a href="../rent/">Church Rent</a></span>
           
	</div>   
	<div class="right"></div>

</div>

<div class="main2">

 <div style="float:right; width:60%; margin-right:10%; margin-top:10px; margin-bottom:10px;text-decoration: none; word-spacing: 0; font: 22px 'Trebuchet MS', 'Lucida Grande', Helvetica, sans-serif; ">
	<span style="float:right;">
	<form method="post" accept-charset="UTF-8" action="../../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<input type="hidden" name="reportType" value="Nat_attendance"/>
	<input type="hidden" name="dbName" value="sws"/>
		    <select name="month">
		    <option>Select Month</option>
		    <option>January</option><option>February</option>
		    <option>March</option><option>April</option>
		    <option>May</option><option>June</option>
		    <option>July</option><option>August</option>
		    <option>September</option><option>October</option>
		    <option>November</option><option>December</option>
		    </select>

		    <select name="year">
		        <option>Select Year</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
		    </select>
		    &nbsp;
		    <button type="submit" value="Submit">Change View</button>
	</form>
	</span>
 </div>

 <div style="float:left; min-width:90%; margin-right:0.5em;">
         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Sunday Worship Service Attendance - <?php echo $theMonth .', '.$theYear; ?></a>
                  </div>

             <div style="padding: 9px 7px 6px; min-height:300px;">
		<table class="tableizer-table" style="margin-left:10%;font-size:0.9em;" border="1" cellpadding="5" summary="Church Location Assets">
			<tr>
			   <th rowspan="2" style="min-width:200px;">Location</th>
			   <th colspan="3" style="min-width:60px;">ATTENDANCE</th>
			   <th rowspan="2" style="width:90px;">AVERAGE (Last Month)</th>
			   <th rowspan="2" style="width:100px;">DEVIATION (from Last Month) +/-</th>
			</tr>
			<tr>
			   <th style="min-width:90px;">MAXIMUM</th>
			   <th style="min-width:90px;">MINIMUM</th>
			   <th style="width:90px;">AVERAGE (This Month)</th>
			</tr>
			<?php
			for ($mt = 0; $mt < count($places); ++$mt) {
			  echo '<tr>';
			  echo '<th>'.$places[$mt].'</th>';
			  for ($col=1; $col < 6; ++$col) {
			    echo '<td>'.$swsValues[$mt][$col].'</td>';
			  }
			  echo '</tr>';
			}
			?>

		</table>
             </div>
             </div></div></div></div>
        </div>

        <div class="b0"><div class="b1"><div class="b2">
        </div></div></div>

	</div><!---End News Box -->
 </div><!---End Side 1 -->
 <div id="clearit"></div>

</div>

<div id="footer">

	<!---page navigation grey bar -->
	<div class="footer-greybar">
		<span class="left"></span>
		<div class="content">
			<div id="subinfobottom" class="content-s"></div>
		</div>
		
		<span class="right"></span>
		
		<div id="pg" class="pg">
			
		</div>	<!-- end pg -->
		 
	</div> <!-- end footer-greybar -->
	
</div> <!-- end footer -->

</div> <!-- end container -->

<!--</div> -end news-container-2 div -->

</div> <!---end news-container div -->

	<div class="absolute-footer abfoot-grad">
		<div class="ab-foot-menu">
			<span class="copyright">&copy; 2014 Deeper Christian Life Ministry</span>
			<ul class="foot-menu-list"><li></li>
				<li><a href="http://www.deeperlife.ca/contactus.html">contact</a></li>
			</ul>
		</div>

	</div>
	
	
</div> <!-- End SuperContainer 2 -->

</body>
</html>
