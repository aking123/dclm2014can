<html>
<head></head>
<body>
  <h3>
<?php
 include 'dclm_db.php';

/**
    * Returns input smart quotes in html codes.
    */
function prettyQuote($string) {
	$search = array(chr(145), chr(146), chr(147), chr(148)); 
	$replace = array("&lsquo;", "&rsquo;", "&ldquo;", "&rdquo;"); 
	return str_replace($search, $replace, $string);
}

function prepare_insert($tableName, $firstArray)
 {
	$columns = implode(", ",array_keys($firstArray));
	$placeHolders = implode(',', array_fill(0, count($firstArray), '?'));
	$theQuery = "INSERT INTO $tableName ($columns) VALUES ($placeHolders)";
	return $theQuery;
 }

function check_year_dir($sermonArray)
 {
   $thisYear = substr($sermonArray["categ_id"], 0, 4);   
   switch ($sermonArray["Categ"]) {
      case "BST":
          $categLink = "sermons/biblestudies";
          break;
      case "SWS":
          $categLink = "sermons/sundayservices";
          break;
      case "REV":
          $categLink = "sermons/revivalservices";
          break;
      case "RET":
          $categLink = "sermons/retreats";
          break;
      case "CRU":
          $categLink = "sermons/crusades";
          break;
      case "YTH":
          $categLink = "sermons/youths";
          break;
      case "CRU":
          $categLink = "sermons/conferences";
          break;
      default:
          $categLink = "sermons/specialprograms";
    }
    $yearDir = "../" . $categLink . "/" . $thisYear;
    if (! is_dir($yearDir)) {
       echo "The directory $yearDir does not exist <br>";
    ////Test with perm 0755
       if (!mkdir($yearDir, 0777, true))
	  die('Failed to create folders...');
    }
    return ;
 }

//$link = connect_to_db();
try {
$whatToDo = 'sermons'; 

if ($whatToDo == 'sermons') {

  $numRow = DB::getInstance()->exec("SET NAMES utf8");
// -----------------Create Sermon categories ---------------------------------
  $dbtable = 'category';

  $sql = 'CREATE TABLE '.$dbtable.' (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  category_id INT(2) DEFAULT NULL, activity varchar(80) DEFAULT NULL,
	  act_sht varchar(20) DEFAULT NULL) DEFAULT CHARACTER SET utf8mb4';
  $numRow = DB::getInstance()->exec($sql);
  print("$dbtable table successfully created. \n");

// -----------------Create Sermon Metadata table -----------------------------
  $dbtable = 'sermon_data';

  $sql = 'CREATE TABLE '.$dbtable.' (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
             categ_id int DEFAULT NULL, Sdate date DEFAULT NULL,
             Title varchar(80) DEFAULT NULL, Categ varchar(10) DEFAULT NULL,
             Descr varchar(100) DEFAULT NULL, High varchar(200) DEFAULT NULL,
             Low varchar(200) DEFAULT NULL, Audio varchar(200) DEFAULT NULL,
	     Outline varchar(200) DEFAULT NULL, status_ad int(2) DEFAULT "1")
	     DEFAULT CHARACTER SET utf8mb4';
  $numRow = DB::getInstance()->exec($sql);
  print("$dbtable table successfully created. \n");

// -----------------Create Event data table -----------------------------
  $dbtable = 'events_data';

  $sql = 'CREATE TABLE '.$dbtable.' (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
             categ_id int DEFAULT NULL, Categ varchar(10) DEFAULT NULL,
	     Theme varchar(80) DEFAULT NULL, webFlyer varchar(80) DEFAULT NULL)
	     DEFAULT CHARACTER SET utf8mb4';
  $numRow = DB::getInstance()->exec($sql);
  print("$dbtable table successfully created. \n");

// -----------------Create tag table ------------------------------------
  $dbtable = 'tag';

  $sql = 'CREATE TABLE '.$dbtable.' (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  tag_name varchar(80) DEFAULT NULL, nick varchar(30) DEFAULT NULL)
	  DEFAULT CHARACTER SET utf8mb4';
  $numRow = DB::getInstance()->exec($sql);
  print("$dbtable table successfully created. \n");

} // End dclm_sermon DB 


if ($whatToDo == 'sermons') {
// -----------------Insert sertmon data into its table------------------------
   $dbtable = 'sermon_data';

   include '../sermons/se_data2.php';
   $nSermons = count($sermons);
   /* The next 2 lines is moved out of the 'for loop' following it, with the
    * assumption that ALL elements of the $sermons array contains the same
    * numbers of key and value array pairs. We can ensure this is the case by
    * properly pre-processing the $sermons array before it get here.
   */
   $thequery = prepare_insert($dbtable,  $sermons[0]);
   $dbInsert = DB::getInstance()->prepare($thequery);
   for ($ct=0; $ct < $nSermons; $ct++) {
      //check_year_dir($sermons[$ct]);  
      $sermons[$ct]["Title"] = utf8_encode(prettyQuote($sermons[$ct]["Title"]));
      $dbInsert->execute(array_values($sermons[$ct]));
      echo 'row '. $ct . ' of sermons data successfully inserted <br/>';
   }
}

if ($whatToDo == 'sermons') {
// -----------------Insert sertmon data into its table------------------------
   $dbtable = 'events_data';

   include '../sermons/crusade_list.php';
   $nEvents = count($crusades);
   $thequery = prepare_insert($dbtable,  $crusades[0]);
   $dbInsert = DB::getInstance()->prepare($thequery);
   for ($ct=0; $ct < $nEvents; $ct++) {
      $dbInsert->execute(array_values($crusades[$ct]));
      echo 'row '. $ct . ' of events data successfully inserted <br/>';
   }
}

    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }


?>
  </h1>
</body>
</html>

