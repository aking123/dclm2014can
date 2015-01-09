<?php
session_start();

  if (isset($_SESSION["se_Page"]))
	  unset($_SESSION["se_Page"]);
  $_SESSION["se_Page"] = $_REQUEST;
   
  if (isset($_REQUEST["pageLink"])) {
  
     $pageParent = dirname($_REQUEST["pageLink"]);
     if (basename($_REQUEST["pageLink"]) == "1") {
	  exit();
     }

     $pageTemplate = $_REQUEST["ptemplate"];
     /* NOTE: PageDir is relative to the sermons directory */
     $pageDir = '../'. $_REQUEST["pageLink"];
     if (! is_dir($pageDir)) {
	   //echo "The directory $pageDir does not exist, creating ...<br>";
	   ////Test with perm 0755
	if (!mkdir($pageDir, 0777, true))
		die('Failed to create folders...');
     }
     $pageFile = $pageDir . '/index.php';
     $stringData = '<?php'.PHP_EOL;
//    fwrite($fp, 'if (!isset($_SESSION)) { session_start(); }'.PHP_EOL);
     if (isset($_POST["event_id"])) {
        $stringData .= '$event_id = '. $_POST["event_id"] . ';'.PHP_EOL;
        $pageTitle = basename(str_replace("_", " ", $_REQUEST["pageLink"]));
        $stringData .= '$pageTitle = "'. $pageTitle . '";'.PHP_EOL;
     }
     $stringData .= '$thisPage = '. $_REQUEST["pageNum"] . ';'.PHP_EOL;
     $stringData .= '$pageParent = "'. $pageParent . '";'.PHP_EOL;
     $stringData .= 'include "../'. $pageTemplate. '";'.PHP_EOL;
     $stringData .= '?>'.PHP_EOL;
     file_put_contents($pageFile, $stringData);
     header('Location: ' . $pageDir);

  }
	  
?>
