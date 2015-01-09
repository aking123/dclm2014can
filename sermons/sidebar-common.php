<?php
 if (!isset($thisCateg)) $thisCateg="";
?>
	<aside class="resurrect-widget resurrect-sidebar-widget widget_search"><h1 class="resurrect-widget-title">Sermon Search</h1>
		<div class="resurrect-search-form">
		<form method="post" action="sermons/search/">
			<label class="resurrect-assistive-text">Search</label>
			<div class="resurrect-search-field">
				<input type="text" name="s" />
			</div>
			<a href="#" class="resurrect-search-button el-icon-search"></a>
		</form>
		</div>
	</aside>

	<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories">
		<h1 class="resurrect-widget-title">Services and Programs</h1>
		<ul>
			<li class="cat-item"><a href="sermons/biblestudies/">Bible Study</a>	</li>
			<li class="cat-item"><a href="sermons/sundayservices/">Sunday Worship Service</a>	</li>
			<li class="cat-item"><a href="sermons/revivalservices/">Thursday Revival Service</a></li>
<?php if ($thisCateg != "Crusades"): ?> 
			<li class="cat-item"><a href="sermons/crusades/">Monthly Revival Programs / Crusades</a></li>
<?php endif ;?>
<?php if ($thisCateg != "Retreats"): ?> 
			<li class="cat-item"><a href="sermons/retreats/">Retreats</a></li>
<?php endif ;?>
		</ul>
	</aside>
	<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories">
		<h1 class="resurrect-widget-title">Conferences and Summits</h1>
		<ul>
			<li class="cat-item"><a href="sermons/youths/">Youth Empowerment Summits</a></li>
			<li class="cat-item"><a href="sermons/youths/">Success Academy For Youths</a></li>
			<li class="cat-item"><a href="sermons/europe/">European Conferences</a></li>
			<li class="cat-item"><a href="sermons/americas/">U.S. Conventions</a></li>
		</ul>
	</aside>
	<aside class="resurrect-widget resurrect-sidebar-widget widget_ctfw-categories">
		<h1 class="resurrect-widget-title">Special Occasions</h1>
		<ul>
			<li class="cat-item"><a href="sermons/marriage/">Singles Seminars</a></li>
			<li class="cat-item"><a href="sermons/marriage/">Marriage and Family Seminars</a></li>
			<li class="cat-item"><a href="sermons/specialoccassions/">Independence Program</a></li>
			<li class="cat-item"><a href="sermons/specialoccassions/">Watch Night Services</a></li>
		</ul>
	</aside>

