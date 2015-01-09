<?php

session_start();
$_SESSION['login_dest'] = 'church/reports';
$pmt = 6;

include '../../commons.php';
include '../../../externs/dblink.php';

  $link = connect_to_db();

  $dbtable = 'attendances';

  $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  $selectVars = 'NumLoc, MaxNum, MinNum, AvgNum';

  $cellValues = array(array());
  for ($row = 0; $row < count($months); ++$row) {
    $result = mysqli_query($link, "SELECT $selectVars FROM $dbtable WHERE Location='$locName' AND Month='$months[$row]' AND Year='2012'");
    if (!$result)  {
      echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
      exit();
    }
    $rowArray = mysqli_fetch_array($result);

    $cellValues[$row][0] = $months[$row];
    $cellValues[$row][1] = $rowArray[0];
    for ($col=3; $col < 6; ++$col) {
      $cellValues[$row][$col] = $rowArray[$col - 2];
    }
    if (($row > 0) && ($rowArray[0] > 0) ) {
      if ($cellValues[$row-1][1] < 1) {
        $cellValues[$row][2] = '--';
        $cellValues[$row][6] = '--';
        $cellValues[$row][7] = '--';
      }
      else { 
        $cellValues[$row][2] = $cellValues[$row][1] - $cellValues[$row-1][1];
        $cellValues[$row][6] = $cellValues[$row-1][5];
	$cellValues[$row][7] = $cellValues[$row][5] - $cellValues[$row][6];
      }
    }
    else {
      $cellValues[$row][2] = '';
      $cellValues[$row][6] = '';
      $cellValues[$row][7] = '';
    }
  }

  // Close the mysql database connection
  mysqli_close($link);

?>
