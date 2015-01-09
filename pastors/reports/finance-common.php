<?php

session_start();
$_SESSION['login_dest'] = 'church/reports';
$pmt = 6;

include '../../commons.php';
include '../../../externs/dblink.php';

  $link = connect_to_db();

  $months = 'January, February, March, April, May, June, July, August, September, October, November, December, YearTotal';

// First perform operation for Income
  $dbtable = 'income2012';

  $iTitles = array('Building Fund', 'CFM', 'FWI', 'Love Offering', 'Mid-Week', 'Mission', 'Missionary Offerings', 'Offering', 'Others', 'Pledges', 'Thanksgiving', 'Tithe', 'Youth', 'Total');

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

  // Close the mysql database connection
  mysqli_close($link);

?>
