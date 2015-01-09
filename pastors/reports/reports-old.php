<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Language" content="en-us" />
	<link href="../../css/global.css" rel="stylesheet" type="text/css" />

        
	<title>Deeper Christian Life Ministry, Canada</title>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="Shortcut Icon" href="../../img/favicon.ico" />

	<script type="text/javascript" language="javascript">
	function IsNumeric(input){
	   var RE = /^-{0,1}\d*\.{0,1}\d+$/;
	   return (RE.test(input));
	}

	function validateForm(theform) {
		loc = theform.locNum
		max = theform.maxNum
		min = theform.minNum
		ave = theform.aveNum
		mnt = theform.month.selectedIndex
		 yr = theform.year.selectedIndex

		if (mnt < 1) {
			alert('Please select the month for this report');
			return false;
		}

		if (yr < 1) {
			alert('Please select the year for this report ');
			return false;
		}

		if (!loc.value) {
			alert('Please enter the total number of locations');
			loc.focus()
			return false;
		}

		if (!max.value) {
			alert('Please enter the maximum number of attendance');
			max.focus()
			return false;
		}

		if (!min.value) {
			alert('Please enter the minimum number of attendance');
			min.focus()
			return false;
		}

		if (!ave.value) {
			alert('Please enter the average number of attendance');
			ave.focus()
			return false;
		}


		return true;
		theform.reset();
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
	<span class="item"><a href="../../contactus.html">Contact Us</a></span><span class="nav_break"></span>
	<span class="item"><a href="../../aboutus.html">About Us</a></span><span class="nav_break"></span>
	<span class="item"><a href="../../events.html">Events</a></span><span class="nav_break"></span>
	<span class="item"><a href="../../resources/">Resources</a></span><span class="nav_break"></span>
	<span class="item"><a href="../../ministries/">Ministries</a></span><span class="nav_break"></span>
	</span></span>
</div>


<div class="header">
	<div class="head-in1">
	<div class="head-in">
		<h1><a href="http://www.deeperlife.ca" class="logotype"><img src="../../img/DCLMlogo.png" style="border:0;" alt="Deeper Life" title="Deeper Life Canada" /></a></h1>

	</div>
	</div>
</div>   <!-- end header -->

<!-- Sub navigation -->
<div id="subnav" class="subnav">
	<div class="sub1">
	<div id="subarrow"></div>
	<div id="subnav_explainer"></div>
	<span id="subnavitems">
	<span class="item_selected"><a href="./">Reports</a></span><span class="subnav_break_blank"></span>
	<span class="item"><a href="../publications/">Publications</a></span><span class="subnav_break"></span>
	<span class="item"><a href="../leadership/">Leadership Training</a></span><span class="subnav_break"></span>
	</span>
	<span class="subnavit">
	<span class="item_selected"><a href="../../externs/authorize.php?logout=yes">Logout</a></span>
	</span>
	<div class="subinfo" id="subinfo"></div>
	</div>
</div>

<!-- Section Header and Page Navigation Controls -->
<div class="sx_header">

	<div class="left"></div> 
	<div class="sortby"><?php echo $locName.' Church' ;?></div>	  
	<div id="sort_type">
             <span class="item_selected"><a href="./">Monthly Report</a></span>
             <span class="item"><a href="assets/">Church Assets</a></span>
             <span class="item"><a href="attendance/">Attendance Summary</a></span>
	     <span class="item"><a href="financial/">Financial Summary</a></span>
             <span class="item"><a href="rent/">Church Rent</a></span>
              
	</div>   
	<div class="right"></div>

</div>

<div class="main2">

 <div id="wrap">
             <div class="sbox">
                 <p style="font-size:24px;"><a class="sbutton">Monthly Attendance Reports</a></p>	
             </div>

 <div id="side1">
         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Bible Study Attendance </a>
                  </div>

	<div class="querybox" style="color: #343a49;padding: 5px 15px 5px;font: 14px/20px Helvetica, Arial, Geneva, sans-serif; margin-left:2em;">
	<form method="post" accept-charset="UTF-8" action="../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<input type="hidden" name="place" value="<?php echo $locName; ?>"/>
	<input type="hidden" name="dbName" value="bst"/>
	<input type="hidden" name="reportType" value="attendance"/>
	<input type="hidden" name="entry" value="new"/>
		<span><strong>Select Month/Year:</strong></span><br/>
		<span>Month</span>
		    <select name="month">
		    <option> </option>
		    <option>January</option><option>February</option>
		    <option>March</option><option>April</option>
		    <option>May</option><option>June</option>
		    <option>July</option><option>August</option>
		    <option>September</option><option>October</option>
		    <option>November</option><option>December</option>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>----</option>
			<option>2010</option><option>2011</option>
			<option>2012</option><option>2013</option>
			<option>2014</option><option>2015</option>
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
	</div>

             </div></div></div></div>
        </div>

        <div class="b0"><div class="b1"><div class="b2">
        </div></div></div>

	</div><!---End News Box -->
 </div><!---End Side 1 -->

 <div id="side2">
         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Sunday Service Attendance </a>
                  </div>

	<div class="querybox" style="color: #343a49;padding: 5px 15px 5px;font: 14px/20px Helvetica, Arial, Geneva, sans-serif; margin-left:2em;">
	<form method="post" accept-charset="UTF-8" action="../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<input type="hidden" name="place" value="<?php echo $locName; ?>"/>
	<input type="hidden" name="dbName" value="sws"/>
	<input type="hidden" name="reportType" value="attendance"/>
	<input type="hidden" name="entry" value="new"/>
		<span><strong>Select Month/Year:</strong></span><br/>
		<span>Month</span>
		    <select name="month">
		    <option> </option>
		    <option>January</option><option>February</option>
		    <option>March</option><option>April</option>
		    <option>May</option><option>June</option>
		    <option>July</option><option>August</option>
		    <option>September</option><option>October</option>
		    <option>November</option><option>December</option>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>----</option>
			<option>2010</option><option>2011</option>
			<option>2012</option><option>2013</option>
			<option>2014</option><option>2015</option>
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
	</div>

             </div></div></div></div>
        </div>

        <div class="b0"><div class="b1"><div class="b2">
        </div></div></div>

	</div><!---End News Box -->
 </div><!---End Side 2 -->

 </div><!---End wrap -->

 <div id="clearit"></div>

 <div id="wrap">
             <div class="sbox">
                 <p style="font-size:24px;"><a class="sbutton"> Monthly Financial Reports</a></p>	
             </div>

 <div id="side1">
         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Income Statement Report </a>
                  </div>

	<div class="querybox" style="color: #343a49;padding: 5px 15px 5px;font: 14px/20px Helvetica, Arial, Geneva, sans-serif; margin-left:2em;">
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
		    <option>January</option><option>February</option>
		    <option>March</option><option>April</option>
		    <option>May</option><option>June</option>
		    <option>July</option><option>August</option>
		    <option>September</option><option>October</option>
		    <option>November</option><option>December</option>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>----</option>
			<option>2010</option><option>2011</option>
			<option>2012</option><option>2013</option>
			<option>2014</option><option>2015</option>
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
	</div><!---End form div -->

             </div></div></div></div>
        </div>

        <div class="b0"><div class="b1"><div class="b2">
        </div></div></div>

	</div><!---End News Box -->
 </div><!---End Side 1 -->

 <div id="side2">
         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Expenditure Statement Report </a>
                  </div>
	<div  class="querybox" style="color: #343a49;padding: 5px 15px 5px;font: 14px/20px Helvetica, Arial, Geneva, sans-serif; margin-left:2em;">
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
		    <option value="January">January</option>
		    <option value="February">February</option>
		    <option value="March">March</option>
		    <option value="April">April</option>
		    <option value="May">May</option>
		    <option value="June">June</option>
		    <option value="July">July</option>
		    <option value="August">August</option>
		    <option value="September">September</option>
		    <option value="October">October</option>
		    <option value="November">November</option>
		    <option value="December">December</option>
		    </select>
		<span>Year</span>
		    <select name="year">
		        <option>----</option>
			<option>2010</option><option>2011</option>
			<option>2012</option><option>2013</option>
			<option>2014</option><option>2015</option>
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
	</div><!---End form div -->

             </div></div></div></div>
        </div>

        <div class="b0"><div class="b1"><div class="b2">
        </div></div></div>

	</div><!---End News Box -->
 </div><!---End Side 2 -->

 </div><!---End wrap -->

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
