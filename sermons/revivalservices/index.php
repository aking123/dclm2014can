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
	$fileData .= '$thisPage = 1;'.PHP_EOL;
	$fileData .= '$pageParent = "sermons/revivalservices/' . $theYear .'";'.PHP_EOL;
	$fileData .= 'include "../rev_template.php";'.PHP_EOL;
	$fileData .= '?>'.PHP_EOL;
        if(!is_dir($theYear))
        mkdir($theYear, 0777, TRUE);
        file_put_contents($theYear . '/index.php', $fileData);
	header('Location: ' . $theYear . '/');
  endif;
?>
