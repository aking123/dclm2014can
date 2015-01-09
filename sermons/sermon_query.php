<?php

class sermon
{
	//private $search;
	private $getall;
	private $sql;
	private $arrayToExec;
	public $result;
		
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
		$this->sql = "select * from sermon_data".$itm_search;
		$this->arrayToExec = array();
		$this->conn();
	}
	
	/*function setGetAll($search)
	{
		$this->getall = $search;
	}*/
	
	
	function getCategory($thisCategory, $thisYear)
	{
		$this->sql = 'SELECT * FROM sermon_data WHERE Categ = ? AND Year(Sdate) = ? ORDER BY Sdate DESC';
		$this->arrayToExec = array($thisCategory, $thisYear);
		$this->conn();		
	}
		
	function getRecent($num)
	{
		$this->sql = "SELECT * FROM sermon_data ORDER BY Sdate DESC LIMIT ?, ?";
		$this->arrayToExec = array(0, $num);
		$this->conn();		
	}
		
	function getEvent($thisEvent)
	{
		$this->sql = 'SELECT * FROM sermon_data WHERE categ_id = ? ORDER BY Sdate DESC';
		$this->arrayToExec = array($thisEvent);
		$this->conn();		
	}
		
	function populateEvents($thisCateg, $thisYear)
	{
		$this->sql = 'SELECT * FROM events_data WHERE categ = ? AND SUBSTRING(categ_id, 1, 4) = ? ORDER BY categ_id DESC';
		$this->arrayToExec = array($thisCateg, $thisYear);
		$this->conn();		
	}

	function conn(){
		require_once(dirname(__FILE__) . "/../common/dclm_db.php");
		try {
			/* 
			 * The following setAttribute statement is necessary to
			 * pass integer value to getRecent function using PDO
			 */
			DB::getInstance()->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
			$numRow = DB::getInstance()->exec("SET NAMES utf8");
			$this->result = DB::getInstance()->prepare($this->sql);
			$this->result->execute($this->arrayToExec);
		}
		catch(PDOException $e)
    		{
    			echo $e->getMessage();
    		}
	}	
	
}

 $samon = new sermon;

?>
