<?php

session_start();
$_SESSION['login_dest'] = 'church/reports';
$pmt = 6;

include '../../commons.php';
include '../../../externs/dblink.php';

$link = connect_to_db();

$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

if ($locName != 'National') {

  if (isset($_SESSION['loc_attend_yr'])) {
    $theYear  = $_SESSION['loc_attend_yr'];
  }

  // Bible Study Attendance Data
  $dbtable = 'bst';

  $selectVars = 'NumLoc, MaxNum, MinNum, AvgNum';
  $bstValues = array(array());
  for ($row = 0; $row < count($months); ++$row) {
    $result = mysqli_query($link, "SELECT $selectVars FROM $dbtable WHERE Location='$locName' AND Month='$months[$row]' AND Year='$theYear'");
    if (!$result)  {
      echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
      exit();
    }
    $rowArray = mysqli_fetch_array($result);

    $bstValues[$row][0] = $months[$row];
    $bstValues[$row][1] = $rowArray[0];
    for ($col=3; $col < 6; ++$col) {
      $bstValues[$row][$col] = $rowArray[$col - 2];
    }
    if (($row > 0) && ($rowArray[0] > 0) ) {
      if ($bstValues[$row-1][1] < 1) {
        $bstValues[$row][2] = '--';
        $bstValues[$row][6] = '--';
        $bstValues[$row][7] = '--';
      }
      else { 
        $bstValues[$row][2] = $bstValues[$row][1] - $bstValues[$row-1][1];
        $bstValues[$row][6] = $bstValues[$row-1][5];
	$bstValues[$row][7] = $bstValues[$row][5] - $bstValues[$row][6];
      }
    }
    else {
      $bstValues[$row][2] = '';
      $bstValues[$row][6] = '';
      $bstValues[$row][7] = '';
    }
  }

  // Sunday Worship Service Attendance Data
  $dbtable = 'sws';

  $selectVars = 'MaxNum, MinNum, AvgNum';
  $swsValues = array(array());
  for ($row = 0; $row < count($months); ++$row) {
    $result = mysqli_query($link, "SELECT $selectVars FROM $dbtable WHERE Location='$locName' AND Month='$months[$row]' AND Year='$theYear'");
    if (!$result)  {
      echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
      exit();
    }
    $rowArray = mysqli_fetch_array($result);

    $swsValues[$row][0] = $months[$row];
    for ($col=1; $col < 4; ++$col) {
      $swsValues[$row][$col] = $rowArray[$col - 1];
    }
    if (($row > 0) && ($rowArray[0] > 0) ) {
      if ($swsValues[$row-1][1] < 1) {
        $swsValues[$row][4] = '--';
        $swsValues[$row][5] = '--';
      }
      else { 
        $swsValues[$row][4] = $swsValues[$row-1][3];
	$swsValues[$row][5] = $swsValues[$row][3] - $swsValues[$row][4];
      }
    }
    else {
      $swsValues[$row][4] = '';
      $swsValues[$row][5] = '';
    }
  }

  include 'attend.php';
}

else {
  $dbtable = 'sws';

  if (isset($_SESSION['nat_attend_mth'])) {
    $theMonth = $_SESSION['nat_attend_mth'];
    $theYear  = $_SESSION['nat_attend_yr'];
  }
  else
    $theMonth = $lastMonth;

  $selectVars = 'MaxNum, MinNum, AvgNum';

  $swsValues = array(array());
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

    $swsValues[$row][0] = $places[$row];
    if ( $rowArray[0] > 0 ) {
      for ($col=1; $col < 4; ++$col) {
        $swsValues[$row][$col] = $rowArray[$col - 1];
      }
      $totalMax += $rowArray[0]; 
      $totalMin += $rowArray[1];
      $totalAve += $rowArray[2];
      //if ($swsValues[$row-1][1] < 1) {
        $swsValues[$row][4] = '--';
        $swsValues[$row][5] = '--';
      //}
      //else { 
      //  $swsValues[$row][4] = $swsValues[$row-1][3];
      //  $swsValues[$row][5] = $swsValues[$row][3] - $swsValues[$row][4];
      //}
    }
    else {
      for ($col=1; $col < 6; ++$col) {
        $swsValues[$row][$col] = '';
      }
    }
    $swsValues[$row+1][1] = $totalMax;
    $swsValues[$row+1][2] = $totalMin;
    $swsValues[$row+1][3] = $totalAve;
    $swsValues[$row+1][4] = '';
    $swsValues[$row+1][5] = '';
  }

  if (isset($_SESSION['nat_attend_mth'])) {
    unset($_SESSION['nat_attend_mth']);
    unset($_SESSION['nat_attend_yr']);
  }
  include 'sws_national.php';
}

// Close the mysql database connection
mysqli_close($link);

?>
