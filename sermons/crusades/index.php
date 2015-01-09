<?php 
  if (isset($_GET["yr"])):
	$theYear = $_GET["yr"] ;
  else:
	$theYear = date('Y') ;
  endif;

  if (is_readable($theYear . '/index.php')):
	header('Location: ' . $theYear . '/');
  else:
	$fileData = '<?php'.PHP_EOL;
	$fileData .= '$thisCateg = "Crusades";'.PHP_EOL;
	$fileData .= '$categTitle = "Crusade sermons and Testimonies (' . $theYear .')";'.PHP_EOL;
	$fileData .= '$db_categ = "CRU";'.PHP_EOL;
	$fileData .= '$theYear = ' . $theYear .';'.PHP_EOL;
	$fileData .= 'include "../../events_landing_template.php";'.PHP_EOL;
	$fileData .= '?>'.PHP_EOL;
        if(!is_dir($theYear))
        mkdir($theYear, 0777, TRUE);
        file_put_contents($theYear . '/index.php', $fileData);
	header('Location: ' . $theYear . '/');
  endif;
?>
