<?php

session_start();
$_SESSION['login_dest'] = 'church/reports';
$pmt = 6;

include '../../commons.php';
include '../../../externs/dblink.php';  //level relative to rents subdirectory

$link = connect_to_db();

$dbtable = 'rents';

if ($locName != 'National') {
  $result = mysqli_query($link, "SELECT * FROM $dbtable WHERE Location='$locName'");
  if (!$result)  {
    echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
    exit();
  }

  include 'rents.php';
}

else {
  $result = mysqli_query($link, "SELECT * FROM $dbtable");
  if (!$result)  {
    echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
    exit();
  }
  include 'rents_national.php';
}

// Close the mysql database connection
mysqli_close($link);

?>
