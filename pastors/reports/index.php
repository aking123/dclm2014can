<?php

session_start();
$_SESSION['login_dest'] = 'church/reports';
// Start_to_Go
$_SESSION['username'] = 'Brampton';
$_SESSION['userlev'] = 6;
$_SESSION['logged_in'] = 1;
// /End_to_Go
$pmt = 6;

include '../commons.php';

//

if ($locName != 'National') {
	$iTitles = array('Building Fund', 'CFM', 'Love Offering', 'Mid-Week', 'Mission', 'Missionary Offerings', 'Offering', 'Others', 'Pledges', 'Retreat Contributions', 'Thanksgiving', 'Tithe', 'Youth', 'Total');

	$eTitles = array('Adult Evangelism', 'Advertisement and Publicity', 'Bank Charges and Interest', 'Building Repairs', 'Charity', 'Children', 'Condominium Fee', 'Congress', 'Corp Canada', 'Dominican', 'Equipments and Furnishings', 'Gbagada', 'Insurance', 'Loan Payment', 'Mexico', 'Miscellaneous', 'Mortgage and Rent', 'National Tithes', 'Outreach', 'Postage and Shipping', 'Printing and Photocopying', 'Radio', 'Rent', 'Retreats and Conferences', 'Returned Checks', 'Software', 'Special Program', 'Stationaries', 'Telephone and Webex', 'Training and Education', 'Transfer', 'Transportation and Vehicle Expenses', 'Utilities (Hydro and Gas)', 'Women', 'Youth', 'Total');

	$mntOptions = '';
	for ($mn = 1; $mn < 13 ; $mn++):
		$dateObj = DateTime::createFromFormat('!m', $mn);
		$mnt = $dateObj->format('F');
		$mntOptions .= '<option value="'. $mnt .'">'. $mnt .'</option>';
	endfor;
	$yrOptions = '';
	for ($py=4; $py >= 0 ; $py--):
		$yrOptions .= '<option>'. (date('Y') - $py) .'</option>';
	endfor;
	
	include 'reports.php';
}
else {

  if (isset($_REQUEST['redr'])) {
    $_SESSION['nat_fin_view2']  = 'true';

    header("Location: financial/");
    exit();
  }
     
  $dbtable = 'bst';

  if (isset($_SESSION['nat_attend_mth'])) {
    $theMonth = $_SESSION['nat_attend_mth'];
    $theYear  = $_SESSION['nat_attend_yr'];
  }
  else
    $theMonth = $lastMonth;

  $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  $selectVars = 'NumLoc, MaxNum, MinNum, AvgNum';

  $bstValues = array(array());
  $totalLoc = 0;
  $totalMax = 0;
  $totalMin = 0;
  $totalAve = 0;

  for ($row = 0; $row < (count($places)-1); ++$row) {
    $result = mysqli_query($link, "SELECT $selectVars FROM $dbtable WHERE Location='$places[$row]' AND Month='$theMonth' AND Year='$theYear'");
    if (!$result)  {
      echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
      exit();
    }
    $rowArray = mysqli_fetch_array($result);

    $bstValues[$row][0] = $places[$row];
    if ( $rowArray[0] > 0 ) {
      $bstValues[$row][1] = $rowArray[0];
      for ($col=3; $col < 6; ++$col) {
        $bstValues[$row][$col] = $rowArray[$col - 2];
      }
      $totalLoc += $rowArray[0];
      $totalMax += $rowArray[1]; 
      $totalMin += $rowArray[2];
      $totalAve += $rowArray[3];
      //if ($bstValues[$row-1][1] < 1) {
        $bstValues[$row][2] = '--';
        $bstValues[$row][6] = '--';
        $bstValues[$row][7] = '--';
      //}
      //else { 
      //  $bstValues[$row][2] = $bstValues[$row][1] - $bstValues[$row-1][1];
      //  $bstValues[$row][6] = $bstValues[$row-1][5];
      //  $bstValues[$row][7] = $bstValues[$row][5] - $bstValues[$row][6];
      //}
    }
    else {
      for ($col=1; $col < 8; ++$col) {
        $bstValues[$row][$col] = '';
      }
    }
    $bstValues[$row+1][1] = $totalLoc;
    $bstValues[$row+1][3] = $totalMax;
    $bstValues[$row+1][4] = $totalMin;
    $bstValues[$row+1][5] = $totalAve;
    $bstValues[$row+1][2] = '';
    $bstValues[$row+1][6] = '';
    $bstValues[$row+1][7] = '';
  }

  if (isset($_SESSION['nat_attend_mth'])) {
    unset($_SESSION['nat_attend_mth']);
    unset($_SESSION['nat_attend_yr']);
  }
  include 'national.php';
}

?>
