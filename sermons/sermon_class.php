<?php

/*$columns = implode(", ",array_keys($insData));
$escaped_values = array_map('mysql_real_escape_string', array_values($insData));
$values  = implode(", ", $escaped_values);
$sql = "INSERT INTO `fbdata`($columns) VALUES ($values)";



include("./assets/php/db.php");
$data = array('field1' => 'data1', 'field2'=> 'data2');
insertArr("databaseName.tableName", $data);

//db.php
// Class to initiate a new MySQL connection based on $dbInfo settings found in dbSettings.php
//
// @example
//    $db = new database(); // Initiate a new database connection
//    mysql_close($db->get_link());
//
class database{
    protected $databaseLink;
    function __construct(){
        include "dbSettings.php";
        $this->database = $dbInfo['host'];
        $this->mysql_user = $dbInfo['user'];
        $this->mysql_pass = $dbInfo['pass'];
        $this->openConnection();
        return $this->get_link();
    }
    function openConnection(){
    $this->databaseLink = mysql_connect($this->database, $this->mysql_user, $this->mysql_pass);
    }

    function get_link(){
    return $this->databaseLink;
    }
}


 // Insert an associative array into a MySQL database
 //
 //@example
 //    $data = array('field1' => 'data1', 'field2'=> 'data2');
 //   insertArr("databaseName.tableName", $data);
 //
function insertArr($tableName, $insData){
    $db = new database();
    $columns = implode(", ",array_keys($insData));
    $escaped_values = array_map('mysql_real_escape_string', array_values($insData));
    foreach ($escaped_values as $idx=>$data) $escaped_values[$idx] = "'".$data."'";
    $values  = implode(", ", $escaped_values);
    $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
    mysql_query($query) or die(mysql_error());
    mysql_close($db->get_link());
}


//dbsettings.php
$dbInfo = array(
    'host'      => "localhost",
    'user'      => "root",
    'pass'      => "password"
);

/**************************************
if(is_array($EMailArr)){

    $sql = "INSERT INTO email_list (R_ID, EMAIL, NAME) values ";

    $valuesArr = array();
    foreach($EMailArr as $row){

        $R_ID = (int) $row['R_ID'];
        $email = mysql_real_escape_string( $row['email'] );
        $name = mysql_real_escape_string( $row['name'] );

        $valuesArr[] = "('$R_ID', '$email', '$name')";
    }

    $sql .= implode(',', $valuesArr);

    mysql_query($sql) or exit(mysql_error()); 
}****/

include '../common/sto_rec.php';


class sermon
{
	//private $search;
	private $getall;
	private $query;
	public $Result;
	public $sto_rec;

		
	function setSearch($search)
	{
		$itm_search = " WHERE title like ";
		$data_search = explode(" ", $search);
		if(is_array($data_search))
		{
			for( $i = 0; $i < count($data_search); $i++)
			{
				$itm_search.= ($i == count($data_search)-1)?"'%".$data_search[$i]."%'" : "'%".$data_search[$i]."%' or  title like ";
			}
		}
		else $itm_search .= "'%".$data_search."%'";
		$this->query = "select * from sermon_data".$itm_search;
		$this->conn();
	}
	
	/*function setGetAll($search)
	{
		$this->getall = $search;
	}*/
	
	function getAll()
	{
		$this->query = "select * from sermon_data";
		$this->conn();		
	}
	
	function insertArr($tableName, $insData)
	{
		//$db = new database();
		$columns = implode(", ",array_keys($insData));
		$escaped_values = array_map('mysql_real_escape_string', array_values($insData));
		foreach ($escaped_values as $idx=>$data) $escaped_values[$idx] = "'".$data."'";
		$values  = implode(", ", $escaped_values);
		return $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
		//mysql_query($query) or die(mysql_error());
		//mysql_close($db->get_link());
	}

	
	function conn(){
		mysqli_select_db($this->sto_rec, "dclm_sermon") or die("could not connect");
		$this->Result = mysqli_query($this->sto_rec, $this->encodeChar($this->query));
	}	
	
	function encodeChar($chsJs) {
		$ban = array(";", "exec", "execute","--","#");
		$ran = array(":", "^", "^C","^s","^sh");
		$bas = $chsJs;
		$chsJs = (substr($bas,-1)==";")?substr($chsJs,0,-1):$chsJs;
		$chsJs = str_replace($ban,$ran,$chsJs);
		return $chsJs.";";
	}

	function decodeChar($dhsJs) {
		$ban = array(";", "exec", "execute","--","#");
		$ran = array(":", "^", "^C","^s","^sh");
	
		$dhsJs = str_replace($ran,$ban,$dhsJs);

		return $dhsJs;
	}
}
?>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	 <input type="text" name="content" value="" id="search"/>
	 &nbsp;&nbsp;
	 <input type="submit" name="search" value="Search" />
	</form>

<?php
$samon = new sermon;

$samon->sto_rec = connect_to_db();



//insert data
$data = array("Sdate" => "20140630",
                 "Title" => "Special Study: Faith That Banishes Worry and Anxiety",
                 "Categ" => "BST",
                 "Descr" => "Weekly Bible Study",
                 "High" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140623Me.mp4",
                 "Low" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140623Low.mp4",
                 "Audio" => "https://s3.amazonaws.com/2014Services/MBS/HQMBS20140623Eng.mp3",
                 "Outline" => "http://s3.amazonaws.com/MBSoutlines/2014/MBS16062014.doc",
                 "Thumbs" => "http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-400x400.jpg",
              );
/*
$thequery = $samon->insertArr('sermon_data',$data);
echo $thequery . '<br/>';
	mysqli_select_db($samon->sto_rec, "dclm_sermon") or die("could not connect");
      if (!mysqli_query($samon->sto_rec, $thequery)) {
        echo 'Error inserting data for sermon: ' . mysqli_error($samon->sto_rec) .'<br>';
        exit();
      }
 */
//search data
if(@$_POST['search'])
{
	$sach = $_POST['content'];
	echo "<h3>Search for ".$sach."</h3>";
	
	$samon->setSearch($sach);
	while($row = mysqli_fetch_array($samon->Result))
	{
		
		$sermons[] = $row;
	}
	
	
	echo "List of searches";
	$rct_sermons  = '<h1 class="resurrect-widget-title">Sermon Search</h1>';
	  for ($rct =0 ; $rct < count($sermons) ; $rct++) {
	    $rct_sermons .= '	<article class="ctc_sermon type-ctc_sermon has-post-thumbnail hentry resurrect-widget-entry resurrect-sermons-widget-entry resurrect-clearfix resurrect-widget-entry-first ctfw-has-image">';
	    $rct_sermons .= '		<header class="resurrect-clearfix">';
	    $rct_sermons .= '			<div class="resurrect-widget-entry-thumb">';
	    $rct_sermons .= '				<a href="' . $sermons[$rct]["Active"] . '" title="' . $sermons[$rct]["Title"] . '"><img width="100" height="100" src="http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-100x100.jpg" class="resurrect-image" alt="" /></a>';
	    $rct_sermons .= '			</div>';
				
	    $rct_sermons .= '			<h1 class="resurrect-widget-entry-title"><a href="' . $sermons[$rct]["Active"] . '" title="' . $sermons[$rct]["Title"] . '">' . $sermons[$rct]["Title"] . '</a></h1>';
	
	    $rct_sermons .= '				<ul class="resurrect-widget-entry-meta resurrect-clearfix">';
	    $rct_sermons .= '					<li class="resurrect-widget-entry-date resurrect-sermons-widget-entry-date">';
	    $rct_sermons .= '						<time datetime="2013-06-12T14:09:39+00:00">' . $sermons[$rct]["Sdate"] . '</time>';
	    $rct_sermons .= '					</li>';
	    $rct_sermons .= '					<li class="resurrect-widget-entry-icons resurrect-sermons-widget-entry-icons">';
	    $rct_sermons .= '						<ul class="resurrect-list-icons">';
	    if ( $sermons[$rct]["Outline"] != "" ) {
	       $rct_sermons .= '					<li><a href="' . $sermons[$rct]["Outline"] . '" class="el-icon-book" title="Read Online"></a></li>';
	    }
	    if ( $sermons[$rct]["High"] != "" ) {
	    	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["High"] . '" class="el-icon-download" title="Download Video"></a></li>';
		$rct_sermons .= '					<li><a href="' . $sermons[$rct]["High"] . '?player=video" class="el-icon-video" title="Watch Video"></a></li>';
	    } else if ( $sermons[$rct]["Low"] != "" ) {
	    	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["Low"] . '" class="el-icon-download" title="Download Video"></a></li>';
		$rct_sermons .= '					<li><a href="' . $sermons[$rct]["Low"] . '?player=video" class="el-icon-video" title="Watch Video"></a></li>';
	    }
	 
	    if ( $sermons[$rct]["Audio"] != "" ) {
	       $rct_sermons .= '					<li><a href="' . $sermons[$rct]["Audio"] . '?player=audio" class="el-icon-headphones" title="Listen to Audio"></a></li>';
	    }
	    $rct_sermons .= '						</ul>';
	    $rct_sermons .= '					</li>';
	    $rct_sermons .= '			</ul>';
	    $rct_sermons .= '		</header>';
	    $rct_sermons .= '	</article>';
	  }
	echo  $rct_sermons."<br /> <h4>End of search</h4>";
}
//output data
	$samon->getAll();
	while($row = mysqli_fetch_array($samon->Result)) 
	{
		echo "this row have the date ".$row['Sdate'] . "\r\n";
		echo "this row have the title ".$row['Title'] . "\r\n";
		$sermons[] = $row;
	}


echo "List all table in the database";
$rct_sermons  = '<h1 class="resurrect-widget-title">Recent Sermons</h1>';
  for ($rct =0 ; $rct < count($sermons) ; $rct++) {
    $rct_sermons .= '	<article class="ctc_sermon type-ctc_sermon has-post-thumbnail hentry resurrect-widget-entry resurrect-sermons-widget-entry resurrect-clearfix resurrect-widget-entry-first ctfw-has-image">';
    $rct_sermons .= '		<header class="resurrect-clearfix">';
    $rct_sermons .= '			<div class="resurrect-widget-entry-thumb">';
    $rct_sermons .= '				<a href="' . $sermons[$rct]["High"] . '" title="' . $sermons[$rct]["Title"] . '"><img width="100" height="100" src="http://demos-cdn.churchthemes.com/resurrect/wp-content/uploads/sites/2/2013/06/prodigal-square-100x100.jpg" class="resurrect-image" alt="" /></a>';
    $rct_sermons .= '			</div>';
			
    $rct_sermons .= '			<h1 class="resurrect-widget-entry-title"><a href="' . $sermons[$rct]["High"] . '" title="' . $sermons[$rct]["Title"] . '">' . $sermons[$rct]["Title"] . '</a></h1>';

    $rct_sermons .= '				<ul class="resurrect-widget-entry-meta resurrect-clearfix">';
    $rct_sermons .= '					<li class="resurrect-widget-entry-date resurrect-sermons-widget-entry-date">';
    $rct_sermons .= '						<time datetime="2013-06-12T14:09:39+00:00">' . $sermons[$rct]["Sdate"] . '</time>';
    $rct_sermons .= '					</li>';
    $rct_sermons .= '					<li class="resurrect-widget-entry-icons resurrect-sermons-widget-entry-icons">';
    $rct_sermons .= '						<ul class="resurrect-list-icons">';
    if ( $sermons[$rct]["Outline"] != "" ) {
       $rct_sermons .= '					<li><a href="' . $sermons[$rct]["Outline"] . '" class="el-icon-book" title="Read Online"></a></li>';
    }
    if ( $sermons[$rct]["High"] != "" ) {
    	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["High"] . '" class="el-icon-download" title="Download Video"></a></li>';
	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["High"] . '?player=video" class="el-icon-video" title="Watch Video"></a></li>';
    } else if ( $sermons[$rct]["Low"] != "" ) {
    	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["Low"] . '" class="el-icon-download" title="Download Video"></a></li>';
	$rct_sermons .= '					<li><a href="' . $sermons[$rct]["Low"] . '?player=video" class="el-icon-video" title="Watch Video"></a></li>';
    }
 
    if ( $sermons[$rct]["Audio"] != "" ) {
       $rct_sermons .= '					<li><a href="' . $sermons[$rct]["Audio"] . '?player=audio" class="el-icon-headphones" title="Listen to Audio"></a></li>';
    }
    $rct_sermons .= '						</ul>';
    $rct_sermons .= '					</li>';
    $rct_sermons .= '			</ul>';
    $rct_sermons .= '		</header>';
    $rct_sermons .= '	</article>';
  }
echo  $rct_sermons;
mysqli_close($samon->sto_rec);

?>
