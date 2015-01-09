<?php

session_start();
$_SESSION['login_dest'] = 'church/reports';
$pmt = 6;

include '../commons.php';

// Note the current authenticated Location
if (isset($_SESSION['username']))
  $place = $_SESSION['username'];

if (isset($_SESSION['tab']))
  $reportType = $_SESSION['tab'];
else 
  $reportType = 'monthly';

// Get Email address
$link = connect_to_db();
$dbtable = 'Users';

$result = mysqli_query($link, "SELECT Email FROM $dbtable WHERE Username='$locName'");
if (!$result)  {
  echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
  exit();
}

$ans = mysqli_fetch_row($result);
$locEmail = $ans[0];
// Close the mysql database connection
mysqli_close($link);

// Assets variables
if ($reportType == 'assets') {
  $link = connect_to_db();

  $dbtable = 'assets2012';

  $result = mysqli_query($link, "SELECT * FROM $dbtable WHERE Location='$locName'");
  if (!$result)  {
    echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
    exit();
  }

  include 'assets.php';
  // Close the mysql database connection
  mysqli_close($link);
}

else if ($reportType == 'attendance') {
  $link = connect_to_db();

  $dbtable = 'attendances';

  $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  $selectVars = 'NumLoc, MaxNum, MinNum, AvgNum';

  $cellValues = array(array());
  for ($row = 0; $row < count($months); ++$row) {
    $result = mysqli_query($link, "SELECT $selectVars FROM $dbtable WHERE Location='$locName' AND Month='$months[$row]'");
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
    if ($row > 0 ) {
      $cellValues[$row][2] = $cellValues[$row][1] - $cellValues[$row-1][2];
      $cellValues[$row][6] = $cellValues[$row-1][5];
      $cellValues[$row][7] = $cellValues[$row][5] - $cellValues[$row][6];
    }
    else {
      $cellValues[$row][2] = '';
      $cellValues[$row][6] = '';
      $cellValues[$row][7] = '';
    }
  }

  include 'attendance.php';
}

else if ($reportType == 'financial') {
  $link = connect_to_db();
  $months = 'January, February, March, April, May, June, July, August, September, October, November, December, YearTotal';

// First perform operation for Income
  $dbtable = 'income2012';
  $iTitles = array('Building Fund','CFM','FWI','Love Offering','Mid-Week','Mission','Missionary Offerings','Offering','Others','Pledges','Thanksgiving','Tithe', 'Youth','Total');

  $incomeValue = array(array());
  for ($row = 0; $row < count($iTitles); ++$row) {
     $sql = "SELECT $months FROM $dbtable WHERE Location='$place' AND Title='$iTitles[$row]'";
     $result = mysqli_query($link, $sql);
     if (!$result)  {
       echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
       exit();
     }
     $rowArray = mysqli_fetch_array($result);

     // Now populate cell values            
     $incomeValue[$row][0] = $iTitles[$row];
     for ($column = 0; $column < 13; ++$column) { // including Year total
       $col = $column + 1;
       if ( $rowArray[$column] == 0.0 )
         $incomeValue[$row][$col] = '';
       else
         $incomeValue[$row][$col] = $rowArray[$column];
     }
  }

// Then perform operation for Expenditure
  $dbtable = 'expenditure2012';
  $eTitles = array('Adult Evangelism', 'Advertisement and Publicity', 'Bank Charges and Interest', 'Benefits', 'Building Repairs', 'CFM', 'Car Allowance', 'Charity', 'Children', 'City Utility and Property Insurance', 'Condominium Fee', 'Deeper Life Missions', 'Education and Training', 'Entertainment', 'Equipment and Furnishing', 'FWI', 'Garbage Removal', 'Home Groups', 'Honorarium', 'Housing', 'Hydro', 'Insurance', 'Janitorial', 'Licenses, membership, and dues', 'Life of Canada (Pacific Life)', 'Loan Payment', 'Love Offering', 'Miscellaneous', 'Mortgage and Rent', 'National Tithes', 'Office Supplies', 'Outreach', 'Pastoral Care', 'Payroll Taxes', 'Photocopier', 'Postage and Shipping', 'Printing', 'Professional Consulting fees', 'Property Taxes', 'Retreat and Conferences', 'Salary', 'Snow Removal', 'Special Program', 'Stationaries', 'Sunday School and Choir', 'Telephone and Fax', 'Travel and Conference', 'Utility Gas',  'Vehicle and Local Transportation', 'Women', 'Youth', 'Total');

  $expenditureValue = array(array());
  for ($row = 0; $row < count($eTitles); ++$row) {
     $sql = "SELECT $months FROM $dbtable WHERE Location='$place' AND Title='$eTitles[$row]'";
     $result = mysqli_query($link, $sql);
     if (!$result)  {
       echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
       exit();
     }
     $rowArray = mysqli_fetch_array($result);

     // Now populate cell values            
     $expenditureValue[$row][0] = $eTitles[$row];
     for ($column = 0; $column < 13; ++$column) { // including Year total
       $col = $column + 1;
       if ( $rowArray[$column] == 0.0 )
         $expenditureValue[$row][$col] = '';
       else
         $expenditureValue[$row][$col] = $rowArray[$column];
     }
  }

// Finally load the page
  include 'financial.php';
}

else if ($reportType == 'monthly') {
  $iTitles = array('Building Fund', 'CFM', 'FWI', 'Love Offering', 'Mid-Week', 'Mission', 'Missionary Offerings', 'Offering', 'Others', 'Pledges', 'Thanksgiving', 'Tithe', 'Youth', 'Total');

  $eTitles = array('Adult Evangelism', 'Advertisement and Publicity', 'Bank Charges and Interest', 'Benefits', 'Building Repairs', 'CFM', 'Car Allowance', 'Charity', 'Children', 'City Utility and Property Insurance', 'Condominium Fee', 'Deeper Life Missions', 'Education and Training', 'Entertainment', 'Equipment and Furnishing', 'FWI', 'Garbage Removal', 'Home Groups', 'Honorarium', 'Housing', 'Hydro', 'Insurance', 'Janitorial', 'Licenses, membership, and dues', 'Life of Canada (Pacific Life)', 'Loan Payment', 'Love Offering', 'Miscellaneous', 'Mortgage and Rent', 'National Tithes', 'Office Supplies', 'Outreach', 'Pastoral Care', 'Payroll Taxes', 'Photocopier', 'Postage and Shipping', 'Printing', 'Professional Consulting fees', 'Property Taxes', 'Retreat and Conferences', 'Salary', 'Snow Removal', 'Special Program', 'Stationaries', 'Sunday School and Choir', 'Telephone and Fax', 'Travel and Conference', 'Utility Gas',  'Vehicle and Local Transportation', 'Women', 'Youth', 'Total');
  include 'monthly.php';
}

?>
