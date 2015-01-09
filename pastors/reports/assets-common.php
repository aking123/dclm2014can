<?php

session_start();
$_SESSION['login_dest'] = 'church/reports';
$pmt = 6;

include '../../commons.php';
include '../../../externs/dblink.php';  //level relative to assets subdirectory

$link = connect_to_db();

  $dbtable = 'assets2012';

  $result = mysqli_query($link, "SELECT * FROM $dbtable WHERE Location='$locName'");
  if (!$result)  {
    echo 'Error fetching data: ' . mysqli_error($link).'<br/>';
    exit();
  }

  // Close the mysql database connection
  mysqli_close($link);

?>
