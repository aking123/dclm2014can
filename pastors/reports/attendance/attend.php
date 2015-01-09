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
             <span class="item"><a href="../">Monthly Report</a></span>
             <span class="item"><a href="../assets/">Church Assets</a></span>
             <span class="item_selected"><a href="../">Attendance Summary</a></span>
             <span class="item"><a href="../financial/">Financial Summary</a></span>
             <span class="item"><a href="../rent/">Church Rent</a></span>
              
	</div>   
	<div class="right"></div>

</div>

<div class="main2">

         <!-- 
        <div id="wrap">
             <div class="sbox">
                 <p style="font-size:24px;"><a class="sbutton">Bible Study Attendance Report</a></p>	
             </div>
	</div>
         -->

 <div style="float:right; width:60%; margin-right:10%; margin-top:10px; margin-bottom:10px;text-decoration: none; word-spacing: 0; font: 22px 'Trebuchet MS', 'Lucida Grande', Helvetica, sans-serif; ">
	<span style="float:right;">
	<form method="post" accept-charset="UTF-8" action="../../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<input type="hidden" name="reportType" value="Loc_attendance"/>
		    <select name="year">
		        <option>Change Year</option>
			<option>2012</option>
			<option>2013</option>
			<option>2014</option>
		    </select>
		    &nbsp;
		    <button type="submit" value="Submit">Go</button>
	</form>
	</span>
 </div>

 <div style="float:left; min-width:90%; margin-right:0.5em;">
         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Bible Study Attendance (<?php echo $theYear; ?>)</a>
                  </div>

             <div style="padding: 9px 27px 16px; min-height:300px;">
		<table class="tableizer-table" style="margin-left:10%;font-size:0.9em;" border="1" cellpadding="5" summary="Bible Study Attendance">
			<tr>
			   <th rowspan="2" style="min-width:100px;">Month</th>
			   <th colspan="2" style="min-width:50px;">Number of Bible Study Locations</th>
			   <th colspan="3" style="min-width:60px;">ATTENDANCE</th>
			   <th rowspan="2" style="width:90px;">AVERAGE (Last Month)</th>
			   <th rowspan="2" style="width:100px;">DEVIATION (from Last Month) +/-</th>
			</tr>
			<tr>
			   <th style="min-width:50px;">TOTAL NO OF LOCATIONS (This Month)</th>
			   <th style="min-width:60px;">DEVIATION (from Last Month) +/-</th>
			   <th style="min-width:90px;">MAXIMUM</th>
			   <th style="min-width:90px;">MINIMUM</th>
			   <th style="width:90px;">AVERAGE (This Month)</th>
			</tr>
			<?php
			for ($mt = 0; $mt < count($months); ++$mt) {
			  echo '<tr>';
			  echo '<th>'.$months[$mt].'</th>';
			  for ($col=1; $col < 8; ++$col) {
			    echo '<td>'.$bstValues[$mt][$col].'</td>';
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


         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Sunday Worship Service Attendance (<?php echo $theYear; ?>)</a>
                  </div>

             <div style="padding: 9px 27px 16px; min-height:300px;">
		<table class="tableizer-table" style="margin-left:10%;font-size:0.9em;" border="1" cellpadding="5" summary="Sunday Service Attendance">
			<tr>
			   <th rowspan="2" style="min-width:100px;">Month</th>
			   <th colspan="3" style="min-width:60px;">ATTENDANCE</th>
			   <th rowspan="2" style="width:90px;">AVERAGE (Last Month)</th>
			   <th rowspan="2" style="width:100px;">DEVIATION (from Last Month) +/-</th>
			</tr>
			<tr>
			   <th style="width:90px;">MAXIMUM</th>
			   <th style="width:90px;">MINIMUM</th>
			   <th style="width:90px;">AVERAGE (This Month)</th>
			</tr>
			<?php
			for ($mt = 0; $mt < count($months); ++$mt) {
			  echo '<tr>';
			  echo '<th>'.$months[$mt].'</th>';
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
<!-- -Disabled and put on it own page (for now)
	<div class="querybox" style="color: #343a49;padding: 9px 27px 16px;font: 14px/20px Helvetica, Arial, Geneva, sans-serif;margin-left:5em;">
	<h2 style="margin-left:6em; text-decoration:underline"> Submit New Monthly Attendance </h2>
	<form name="itemform" method="post" action="../../externs/update-assets.php" onsubmit="return validateForm(this)">
	<input type="hidden" name="place" value="<?php echo $locName; ?>"/>
	<input type="hidden" name="entry" value="new"/>
		<span><strong>Select Month/Year:</strong></span><br/>
		<span>Month</span>
		    <select name="month">
		    <option>  </option>
		    <option value="01">January</option>
		    <option value="02">February</option>
		    <option value="03">March</option>
		    <option value="04">April</option>
		    <option value="05">May</option>
		    <option value="06">June</option>
		    <option value="07">July</option>
		    <option value="08">August</option>
		    <option value="09">September</option>
		    <option value="10">October</option>
		    <option value="11">November</option>
		    <option value="12">December</option>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>  </option>
			<option>2007</option><option>2008</option>
			<option>2009</option><option>2010</option>
			<option>2011</option><option>2012</option>
		    </select>
		<br/><br/>
		<span><strong>Total Number of Locations:</strong></span>
		<input name="locNum" class="text" type="text"  size="4"/>
		<br/><br/>
		<span><strong>Attendances:</strong></span><br/>
		<span>Maximun attendance</span>
		<input name="maxNum" class="text" type="text"  size="3"/>
		<span>Minimun attendance</span>
		<input name="minNum" class="text" type="text"  size="3"/>
		<span>Average attendance</span>
		<input name="aveNum" class="text" type="text"  size="3"/>
		<br/><br/>
		<input class="submit" type="submit" value="Submit Attendance" />
	</form>
	</div>
 -->

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
