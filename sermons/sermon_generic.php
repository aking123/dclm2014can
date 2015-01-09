<?php
 require_once(dirname(__FILE__) . '/sermon_query.php');

 if ($categ == 'ALL'):
 	$samon->getRecent(6);
 elseif (($categ == 'BST') || ($categ == 'SWS') || ($categ == 'REV')):
	$samon->getCategory($categ, $theYear);
 else:
	$samon->getEvent($event_id);
 endif;

 $sermons = array(array());
 while($row = $samon->result->fetch(PDO::FETCH_ASSOC)) 
 {
	 // TODO: This foreach segment can be totally avoided if date transformation (as done below) is performed during sermon data insertion
	foreach ( $row as $key => $value ) {
		if ($key == "Sdate") {
	   		$timestamp = strtotime($value);
	   		$value = date('F dS \, Y', $timestamp);
	  		$row[$key] = $value ; 
		}
	}
	$sermons[] = $row;
 }

 //set $Thumb  to null if not already set
 if (! isset($Thumb)) $Thumb = "";

 if ($categ != "ALL"):

 if (isset($thisCateg)):
	 $subTitle = $thisCateg . " (" . $theYear . ")" ; // $thisCateg ;
 else : 
	 $subTitle = $pageTitle ; // $pageTitle ;
 endif;
echo '		<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">';

echo '		<article class="resurrect-entry-full ctfw-no-image">';
echo '		<h1 class="resurrect-entry-title resurrect-main-title">' . $subTitle . '</h1>';

echo '		</article>';		
echo '		</div>';
 endif;

 $sermonTotal = count($sermons) - 1;
 if (fmod($sermonTotal,6) == 0)
    $page_total = (int)($sermonTotal/6) ; //7087854941
 else
    $page_total = (int)($sermonTotal/6) + 1 ;

 $startCt = (($thisPage - 1) * 6) + 1;
 $stopCt = min((6*$thisPage), $sermonTotal) ;
 //$categ_link = $pageParent;
 for ($s_ct = $startCt; $s_ct <= $stopCt; $s_ct++):
    $sermons[$s_ct]["Title"] = utf8_decode($sermons[$s_ct]["Title"]);
    switch ($sermons[$s_ct]["Categ"]) {
      case "BST":
          $categ_link = "sermons/biblestudies";
          break;
      case "SWS":
          $categ_link = "sermons/sundayservices";
          break;
      case "REV":
          $categ_link = "sermons/revivalservices";
          break;
      case "RET":
          $categ_link = "sermons/retreats";
          break;
      case "CRU":
          $categ_link = "sermons/crusades";
          break;
      case "YTH":
          $categ_link = "sermons/youths";
          break;
      case "CRU":
          $categ_link = "sermons/conferences";
          break;
      default:
          $categ_link = "sermons/specialprograms";
    }
    $json_enc = json_encode($sermons[$s_ct]);
    if (($categ != "ALL") || ($s_ct == 1) || ($sermons[$s_ct]["Categ"] != $sermons[$s_ct - 1]["Categ"])):
?> 
<div class="resurrect-content-block resurrect-content-block-close resurrect-clearfix">
	<article class="page resurrect-entry-full">

	<div class="resurrect-entry-content resurrect-clearfix">
			<!-- <p> We can put notices and/alerts here.</p> -->
		<section id="resurrect-loop-after-content" class="resurrect-loop-after-content">
    <?php endif; ?>
	
   		<article class="ctc_sermon type-ctc_sermon hentry resurrect-entry-short resurrect-sermon-short <?php if ($Thumb == "") echo "ctfw-no-image";?>">
		
    		<header class="resurrect-entry-header resurrect-clearfix">
    <?php if ($Thumb != ""): ?>
    			<div class="resurrect-entry-image">
				<a href="sermons/player/?player=video" onclick='loadSermon(<?php echo $json_enc; ?>)'><img width="400" height="400" src="<?php echo $Thumb; ?>" class="resurrect-image" alt="" /></a>
			</div>
    <?php endif; ?>
	    		<div class="resurrect-entry-title-meta">

    				<h3 class="resurrect-entry-title">
				<a href="sermons/player/?player=video" onclick='loadSermon(<?php echo $json_enc; ?>)'><?php echo $sermons[$s_ct]["Title"];?></a>
    				</h3>
		
				<ul class="resurrect-entry-meta">
					<li class="resurrect-entry-date resurrect-content-icon">
					<span class="el-icon-folder-open"></span>
					<a class="dclm-sermon-category" href="<?php echo $categ_link ;?>" rel="tag"><?php echo $sermons[$s_ct]["Descr"]; ?></a>
					</li>

					<li class="resurrect-entry-date resurrect-content-icon">
					<span class="el-icon-calendar"></span>
					<time datetime=""><?php echo $sermons[$s_ct]["Sdate"];?></time>
					</li>
				</ul>

			</div>
		</header>

    		<footer class="resurrect-entry-footer resurrect-clearfix">
			<ul class="resurrect-entry-footer-item resurrect-list-buttons">
<?php
    if (($sermons[$s_ct]["High"] != "") && ($sermons[$s_ct]["Low"] != "")):
?>
				<li>
					<a href="download/?link=<?php echo $sermons[$s_ct]["High"]; ?>" title="Download High Quality Sermon"><span class="resurrect-button-icon el-icon-download"></span>High</a>
				</li>
				<li>
					<a href="download/?link=<?php echo $sermons[$s_ct]["Low"]; ?>" title="Download Low Quality Sermon"><span class="resurrect-button-icon el-icon-download"></span>Low</a>
				</li>
<?php elseif ($sermons[$s_ct]["High"] != ""): ?>
				<li>
					<a href="download/?link=<?php echo $sermons[$s_ct]["High"]; ?>" title="Download Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download</a>
				</li>
<?php elseif ($sermons[$s_ct]["Low"] != ""): ?>
				<li>
					<a href="download/?link=<?php echo $sermons[$s_ct]["Low"]; ?>" title="Download Sermon"><span class="resurrect-button-icon el-icon-download"></span>Download</a>
				</li>
<?php
      endif;
      if ($sermons[$s_ct]["Outline"] != ""):
?>
				<li>
					<a href="download/?link=<?php echo $sermons[$s_ct]["Outline"]; ?>" title="Read Sermon Outline"><span class="resurrect-button-icon el-icon-book"></span>	Outline	</a>
				</li>
<?php
      endif;
      if (($sermons[$s_ct]["High"] != "") || ($sermons[$s_ct]["Low"] != "")):
	$video_to_show = "";
	if ($sermons[$s_ct]["Low"] != ""):
		$video_to_show = $sermons[$s_ct]["Low"] ;
	else :
		$video_to_show = $sermons[$s_ct]["High"] ;
	endif
?>
				<li>
					<a href="sermons/player/?player=video" onclick='loadSermon(<?php echo $json_enc; ?>)'><span class="resurrect-button-icon el-icon-video"></span>Watch</a>
				</li>
<?php
      endif;
      if ($sermons[$s_ct]["Audio"] != ""):
?>
				<li>
					<a href="sermons/player/?player=audio" onclick='loadSermon(<?php echo $json_enc;?>)'><span class="resurrect-button-icon el-icon-headphones"></span>Listen</a>
				</li>
<?php endif; ?>
			</ul>

		</footer>
 
		</article>

 <?php if (($categ != "ALL") || ($s_ct == $stopCt) || ($sermons[$s_ct]["Categ"] != $sermons[$s_ct + 1]["Categ"])): ?>
		</section>
	</div>
	</article>
</div>
<?php
 endif ;	      
 endfor;

 if ($categ != "ALL") include dirname(__FILE__) . '/pages_nav.php';

?>
