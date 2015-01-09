<?php

session_start();
$_SESSION['login_dest'] = 'church/reports';
$pmt = 6;

include '../../commons.php';
include '../../../externs/dblink.php';
// the default $theYear is set in commons.php

$link = connect_to_db();

$mths = 'January, February, March, April, May, June, July, August, September, October, November, December, YearTotal';
	
$iTitles = array('Building Fund', 'CFM', 'Love Offering', 'Mid-Week', 'Mission', 'Missionary Offerings', 'Offering', 'Others', 'Pledges', 'Retreat Contributions', 'Thanksgiving', 'Tithe', 'Youth', 'Total');

$eTitles = array('Adult Evangelism', 'Advertisement and Publicity', 'Bank Charges and Interest', 'Building Repairs', 'Charity', 'Children', 'Condominium Fee', 'Congress', 'Corp Canada', 'Dominican', 'Equipments and Furnishings', 'Gbagada', 'Insurance', 'Loan Payment', 'Mexico', 'Miscellaneous', 'Mortgage and Rent', 'National Tithes', 'Outreach', 'Postage and Shipping', 'Printing and Photocopying', 'Radio', 'Rent', 'Retreats and Conferences', 'Returned Checks', 'Software', 'Special Program', 'Stationaries', 'Telephone and Webex', 'Training and Education', 'Transfer', 'Transportation and Vehicle Expenses', 'Utilities (Hydro and Gas)', 'Women', 'Youth', 'Total');

// Locational view
if ($locName != 'National') {
	
  if (isset($_SESSION['loc_financial_yr'])) {
    $theYear  = $_SESSION['loc_financial_yr'];
  }

  // First perform operation for Income
  $dbtable = 'income'.$theYear;

  $incomeValue = array(array());
  for ($row = 0; $row < count($iTitles); ++$row) {
     $sql = "SELECT $mths FROM $dbtable WHERE Location='$place' AND Title='$iTitles[$row]'";
     $result = mysqli_query($link, $sql);
     if (!$result)  {
       echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
       exit();
     }
     $rowArray = mysqli_fetch_array($result);

     // Now populate cell values            
     for ($col = 0; $col < 13; ++$col) { // including Year total
       if ( $rowArray[$col] == 0.0 )
         $incomeValue[$row][$col] = '';
       else
         $incomeValue[$row][$col] = number_format($rowArray[$col],2);
     }
  }

// Then perform operation for Expenditure
  $dbtable = 'expenditure'.$theYear;

  $expenditureValue = array(array());
  for ($row = 0; $row < count($eTitles); ++$row) {
     $sql = "SELECT $mths FROM $dbtable WHERE Location='$place' AND Title='$eTitles[$row]'";
     $result = mysqli_query($link, $sql);
     if (!$result)  {
       echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
       exit();
     }
     $rowArray = mysqli_fetch_array($result);

     // Now populate cell values            
     for ($col = 0; $col < 13; ++$col) { // including Year total
       if ( $rowArray[$col] == 0.0 )
         $expenditureValue[$row][$col] = '';
       else
         $expenditureValue[$row][$col] = number_format($rowArray[$col],2);
     }
  }

  include 'financial.php';
}

//National view
else {
  $sumMths = 'SUM(January), SUM(February), SUM(March), SUM(April), SUM(May), SUM(June), SUM(July), SUM(August), SUM(September), SUM(October), SUM(November), SUM(December), SUM(YearTotal)';

  if (isset($_SESSION['nat_fin_view'])) {
    $theView = $_SESSION['nat_fin_view'];
    $selectItems = $mths;
    $queryVar = "Location='$theView' AND ";
  } else {
    $theView = $locName;
    $selectItems = $sumMths;
    $queryVar = "";
  }

  if (isset($_SESSION['nat_fin_view_yr'])) $theYear = $_SESSION['nat_fin_view_yr'];

  if (!(isset($_SESSION['nat_fin_view2']))) {
// First perform operation for Income
  $dbtable = 'income'.$theYear;

  $incomeValue = array(array());
  for ($row = 0; $row < count($iTitles); ++$row) {
     $sql = "SELECT $selectItems FROM $dbtable WHERE $queryVar Title='$iTitles[$row]'";
     $result = mysqli_query($link, $sql);
     if (!$result)  {
       echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
       exit();
     }
     $rowArray = mysqli_fetch_array($result);

     // Now populate cell values            
     for ($col = 0; $col < 13; ++$col) { // including Year total   
       if ( $rowArray[$col] == 0.0 )
         $incomeValue[$row][$col] = '';
       else
         $incomeValue[$row][$col] = number_format($rowArray[$col],2);
     }
  }

// Then perform operation for Expenditure
  $dbtable = 'expenditure'.$theYear;

  $expenditureValue = array(array());
  for ($row = 0; $row < count($eTitles); ++$row) {
     $sql = "SELECT $selectItems FROM $dbtable WHERE $queryVar Title='$eTitles[$row]'";
     $result = mysqli_query($link, $sql);
     if (!$result)  {
       echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
       exit();
     }
     $rowArray = mysqli_fetch_array($result);

     // Now populate cell values            
     for ($col = 0; $col < 13; ++$col) { // including Year total
       if ( $rowArray[$col] == 0.0 )
         $expenditureValue[$row][$col] = '';
       else
         $expenditureValue[$row][$col] = number_format($rowArray[$col],2);
     }
  }
  
  if (isset($_SESSION['nat_fin_view'])) unset($_SESSION['nat_fin_view']);
  if (isset($_SESSION['nat_fin_view_yr'])) unset($_SESSION['nat_fin_view_yr']);
  include 'fin_national.php';
  } // End  ! (isset($_SESSION['nat_fin_view'])))

  else {
// First perform operation for Income
  $dbtable = 'income'.$theYear;

  $balanceValue = array(array());
  $incomeValue = array(array());
  for ($row = 0; $row < (count($places)-1); ++$row) {
     $sql = "SELECT $mths FROM $dbtable WHERE Title='Total' AND Location='$places[$row]'";
     $result = mysqli_query($link, $sql);
     if (!$result)  {
       echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
       exit();
     }
     $rowArray = mysqli_fetch_array($result);

     // Now populate cell values            
     for ($col = 0; $col < 13; ++$col) { // including Year total
       $balanceValue[$row][$col] = $rowArray[$col];	     
       if ( $rowArray[$col] == 0.0 )
         $incomeValue[$row][$col] = '';
       else
         $incomeValue[$row][$col] = number_format($rowArray[$col],2);
     }
  }

// Then perform operation for Expenditure
  $dbtable = 'expenditure'.$theYear;

  $expenditureValue = array(array());
  for ($row = 0; $row < (count($places)-1); ++$row) {
     $sql = "SELECT $mths FROM $dbtable WHERE Title='Total' AND Location='$places[$row]'";
     $result = mysqli_query($link, $sql);
     if (!$result)  {
       echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
       exit();
     }
     $rowArray = mysqli_fetch_array($result);

     // Now populate cell values            
     for ($col = 0; $col < 13; ++$col) { // including Year total
       $balanceValue[$row][$col] -= $rowArray[$col];	     
       if ( $rowArray[$col] == 0.0 ) {
         $expenditureValue[$row][$col] = ''; }
       else {
         $expenditureValue[$row][$col] = number_format($rowArray[$col],2); }
        
       if ($balanceValue[$row][$col] == 0.0) $balanceValue[$row][$col] ='';
     }
  } 

  unset($_SESSION['nat_fin_view2']);
  include 'fin_national2.php';
  }

}
// Close the mysql database connection
mysqli_close($link);

?>
