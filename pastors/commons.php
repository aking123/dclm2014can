<?php

// set the default timezone to use.
date_default_timezone_set('UTC');
$lastMonth = date("F",strtotime(-date("j") . " days"));

//Insist on active (authenticated) session
$locName = $_SESSION['username'];
$ulevel  = $_SESSION['userlev'];
$pmt = 3;
if ((! isset($locName)) || ($_SESSION['logged_in'] == 0) || ($ulevel < $pmt)) {
  //redirects user to login page
  header('Location: ../');
}

// Note the current authenticated Location
if (isset($_SESSION['username'])) {
  $place = $_SESSION['username'];
}

$places = array('Brampton', 'Burnaby', 'Calgary', 'Cambridge', 'Edmonton', 'Fort McMurray', 'Fort-Vermilion', 'Hamilton', 'Kingston', 'London Ontario', 'Manitoba', 'Mississauga', 'Montreal', 'Montreal East', 'New Brunswick', 'Newfoundland and Labrador', 'Nova Scotia', 'Nunavut', 'NWT Territory', 'Oakdale', 'Oshawa', 'Ottawa', 'Prince Edward Island', 'Prince George', 'Quebec City', 'Saskatoon', 'Scarborough', 'Waterloo', 'Windsor', 'Total');

$theYear = date('Y');
if (date('n') == 1) $theYear = date('Y') - 1;
?>
