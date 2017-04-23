 <?php
require_once("head.html");
?>
<div id="wrap">
<?php
	$page = "";
	if(isset($_GET["page"]) && $_GET["page"] != "") {
		$page = $_GET["page"];	
	}
	switch($page) {
		case "main":
			include("pealeht.html");
			break;
		case "gallery":
			include("galerii.html");
			break;
		case "vote":
			include("vote.html");
			break;
		default:
			include("pealeht.html");
	}
?>
</div>
<?php
require_once("foot.html");
?>