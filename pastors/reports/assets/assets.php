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
	function IsNumeric(input){
	   var RE = /^-{0,1}\d*\.{0,1}\d+$/;
	   return (RE.test(input));
	}

	function validateForm(itemform) {
		des = itemform.itemField
		amt = itemform.costField
		tax = itemform.taxField
	 	day = itemform.jour.selectedIndex
		mnt = theform.month.selectedIndex
		 yr = theform.year.selectedIndex

		if (!des.value) {
			alert('Please give a complete description of the item');
			des.focus()
			return false;
		}

		if (!(IsNumeric(amt.value))) {
			alert('Please enter the cost (before tax) of the item');
			amt.focus()
			return false;
		}

		if (!(IsNumeric(tax.value))) {
			alert('Please enter the total tax paid for the item');
			tax.focus()
			return false;
		}

		if (day < 1) {
			alert('Please select the date the item was purchased');
			return false;
		}

		if (mnt < 1) {
			alert('Please select the month the item was purchased');
			return false;
		}

		if (yr < 1) {
			alert('Please select the year the item was purchased');
			return false;
		}

		return true;
		itemform.reset();
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
             <span class="item"><a href="../">Monthly Report</a></span>
             <span class="item_selected"><a href="./">Church Assets</a></span>
             <span class="item"><a href="../attendance/">Attendance Summary</a></span>
             <span class="item"><a href="../financial/">Financial Summary</a></span>
             <span class="item"><a href="../rent/">Church Rent</a></span>
              
	</div>   
	<div class="right"></div>

</div>

<div class="main2">

         <!-- Disabled, for now
        <div id="wrap">
             <div class="sbox">
                 <p style="font-size:24px;"><a class="sbutton">< ?php echo $locName . ' Church' ;?></a></p>	
             </div>
	</div>
         -->

         <!-- Start News Box -->
	<div class="bluebox">
	<div class="newsbox">
	     <div class="n1"><div class="n2"><div class="n3"><div class="n4">
                  <div class="newsbox-title">
                    <a>Church Assets</a>
                  </div>

             <div style="padding: 9px 27px 16px; min-height:300px;">
		<table class="tableizer-table" style="margin-left:10%;font-size:0.9em;" border="1" cellpadding="5" summary="Church Location Assets">
			<tr>
			   <th style="width:80px;"></th>
			   <th style="min-width:100px;">Date</th>
			   <th style="min-width:400px;">Item Description</th>
			   <th style="width:100px;">Cost (CAD)</th>
			   <th style="width:100px;">Tax (CAD)</th>
			   <th style="width:100px;">Total Cost (CAD)</th>
			</tr>
			<?php
			$rowid = 0;
			$Totcst = 0.0;
			$TotAmt = 0.0;
			$TotTax = 0.0;
			while ($row = mysqli_fetch_array($result)) {
			   $rowid = $rowid + 1;
			   echo '<tr>';
			   echo '<td>'.$rowid.'</td><td>'.$row['ADate'].'</td>';
			   echo '<td>'.$row['Item'].'</td><td>'.$row['Amt'].'</td>';
			   $cost = $row['Amt'] + $row['Tax'];
			   echo '<td>'.$row['Tax'].'</td>';
			   echo '<td>'.number_format($cost,2).'</td></tr>';
			   $TotAmt = $TotAmt + $row['Amt'];
			   $TotTax = $TotTax + $row['Tax'];
			   $Totcst = $Totcst + $cost;
			}
			if ($TotAmt > 0.0) {
			  echo '<tr style="color:#00008B;">';
			  echo '<th>Total</th><td>&nbsp;</td><td>&nbsp;</td>';
			  echo '<td>'.number_format($TotAmt,2).'</td>';
			  echo '<td>'.number_format($TotTax,2).'</td>';
			  echo '<td>'.number_format($Totcst,2).'</td></tr>';
			}
			else {
			  echo '<tr>';
			  echo '<td>&nbsp;</><td>&nbsp;</td><td>&nbsp;</td>';
			  echo '<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>';
			}
			?>

		</table>
             </div>
             </div></div></div></div>
        </div>

        <div class="b0"><div class="b1"><div class="b2">
        </div></div></div>

	</div><!---End News Box -->


	<div class="querybox" style="color: #343a49;padding: 0 5em 1em 12em; font: 14px/20px Helvetica, Arial, Geneva, sans-serif;">
	<h2 style="text-decoration:underline"> Add A New Item </h2>
	<form method="post" accept-charset="UTF-8" action="../../../externs/churchtables.php" onSubmit="return validateForm(this);">
	<input type="hidden" name="place" value="<?php echo $locName; ?>"/>
	<input type="hidden" name="dbName" value="assets"/>
	<input type="hidden" name="reportType" value="assets"/>
	<input type="hidden" name="entry" value="new"/>
		<label>
		<span class="labelText">Item Description:</span>
		<textarea rows="3" cols="40" name="itemField"></textarea>
		</label>
		<label>
		<span class="labelText">Cost of Item (Before Tax)</span>
		<input name="costField" class="text" type="text"  size="10"/>
		</label>
		<label>
		<span class="labelText">Tax Paid on Item</span>
		<input name="taxField" class="text" type="text"  size="6"/>
		</label>
		<label>
		<span class="labelText">Date Acquired (YY-MM-DD):</span>
		    <select name="year">
		        <option>----</option>
			<option>2010</option><option>2011</option>
			<option>2012</option><option>2013</option>
			<option>2014</option><option>2015</option>
		    </select>
		    <select name="month">
		    <option>---</option>
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
		    <select name="jour">
		    <option>--</option>
		    <?php 
			for ($days = 1; $days < 32; ++$days) {
			   echo '<option>'.$days.'</option>';
			}
		    ?>
		    </select>
		</label>


		<input class="submit" type="submit" value="Submit Asset" />
	</form>
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
