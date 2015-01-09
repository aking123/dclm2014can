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
             <span class="item"><a href="../attendance/">Attendance Summary</a></span>
             <span class="item_selected"><a href="./">Financial Summary</a></span>
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
	<input type="hidden" name="reportType" value="Loc_financial"/>
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

 <!--<div style="width:100%; margin:0 1em 0 1em; background:#eff2f3;">-->
 <div style="float:left; width:98%; margin-right:0.5em;">

         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Income Statement (<?php echo $theYear ;?>)</a>
                  </div>

             <div style="padding: 5px 5px 5px; min-height:300px;">
		<table class="tableizer-table" style="font-size:0.8em;" border="1" cellpadding="5" summary="Church Location Financials">
			<?php
			  echo '<tr>';
			  $hdr = array('Income','Jan','Feb','Mar','Apr','May',
			    'Jun','Jul','Aug','Sep','Oct','Nov','Dec','Total');
			  for ($hd = 0; $hd <= 13; ++$hd) {
			    echo '<th style="min-width:50px;">'.$hdr[$hd].'</th>';
			  }
			  echo '</tr>';
			  for ($row = 0; $row < count($iTitles)-1; ++$row) {
			   echo '<tr>';
			   echo '<th>'.$iTitles[$row].'</th>';
			   for ($col = 0; $col < 12; ++$col) {
			     echo '<td>'.$incomeValue[$row][$col].'</td>';
			   }
			   echo '<td><b>'.$incomeValue[$row][12].'</b></td>';
			   echo '</tr>';
			  }
			  // For the last (the Total) row
			  $rw = count($iTitles) - 1;
			  echo '<tr style="color:#00008B;">';
			  echo '<th>'.$iTitles[$rw].'</th>';
			  for ($col = 0; $col < 13; ++$col) {
			    echo '<td><b>'.$incomeValue[$rw][$col].'</b></td>';
			  }
			  echo '</tr>';
			?>

		</table>
             </div>
             </div></div></div></div>
        </div>

        <div class="b0"><div class="b1"><div class="b2">
        </div></div></div>

	</div><!---End News Box -->
 </div><!---End Side 1 -->

 <div style="float:left; width:98%; margin-right:0.5em;">
         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Expenditure Statement (<?php echo $theYear ;?>)</a>
                  </div>

             <div style="padding: 5px 5px 5px; min-height:300px;">
		<table class="tableizer-table" style="font-size:0.8em;" border="1" cellpadding="5" summary="Church Location Financials">
			<?php
			  echo '<tr>';
			  $hdr = array('Expense','Jan','Feb','Mar','Apr','May',
			    'Jun','Jul','Aug','Sep','Oct','Nov','Dec','Total');
			  for ($hd = 0; $hd <= 13; ++$hd) {
			    echo '<th style="min-width:50px;">'.$hdr[$hd].'</th>';
			  }
			  echo '</tr>';
			  for ($row = 0; $row < count($eTitles)-1; ++$row) {
			    echo '<tr>';
			    echo '<th>'.$eTitles[$row].'</th>';
			    for ($col = 0; $col < 12; ++$col) {
			      echo '<td>'.$expenditureValue[$row][$col].'</td>';
			    }
			    echo '<td><b>'.$expenditureValue[$row][12].'</b></td>';
			    echo '</tr>';
			  } 
			  // For the last (the Total) row
			  $rw = count($eTitles) - 1;
			  echo '<tr style="color:#00008B;">';
			  echo '<th>'.$eTitles[$rw].'</th>';
			  for ($col = 0; $col < 13; ++$col) {
			    echo '<td><b>'.$expenditureValue[$rw][$col].'</b></td>';
			  }
			  echo '</tr>';
			?>

		</table>
             </div>
             </div></div></div></div>
        </div>

        <div class="b0"><div class="b1"><div class="b2">
        </div></div></div>

	</div><!---End News Box -->
 </div><!---End Side 2 -->

 <div id="clearit">
 </div>


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
