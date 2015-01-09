<?php
/*
 * Class to initiate a new MySQL connection based on $dbInfo
 */
class db{

private $dbHost;
private $dbUser;
private $dbPass;
private $myDbNname;
/*** Declare instance ***/
private static $instance = NULL;

/**
*
* the constructor is set to private so
* so nobody can create a new instance using new
*
*/
private function __construct() {
  /*** maybe set the db name here later ***/
}

/**
*
* Return DB instance or create intitial connection
*
* @return object (PDO)
*
* @access public
*
*/
public static function getInstance() {
	include dirname(__FILE__) ."/siteinfo.php";

	$dbHost = $dbInfo['host'];
        $dbUser = $dbInfo['user'];
        $dbPass = $dbInfo['pass'];
        $myDBname = $dbname;
	
if (!self::$instance)
    {
    self::$instance = new PDO("mysql:host=$dbHost;dbname=$myDBname;charset=utf8mb4", $dbUser, $dbPass);
    self::$instance-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
return self::$instance;
}

/**
*
* Like the constructor, we make __clone private
* so nobody can clone the instance
*
*/
private function __clone(){
}

} /*** end of class ***/

?>
