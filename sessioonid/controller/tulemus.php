<?php
require_once("head.html");
?>
<div id="wrap">
<p>
<?php
	$pilt="";
	if(isset($_POST["pilt"]) && ($_POST["pilt"] != "")) {
		$pilt = htmlspecialchars($_POST["pilt"]);
		session_start();
		$_SESSION["pilt"] = $pilt;
		echo "Sinu lemmikpildi number on ".$pilt.".";
		echo "<div><a href='killsess.php'>Lõpeta session</a></div>";
	} else {
		header("Location: http://enos.itcollege.ee/~jahhundo/sessioonid/controller/index.php?page=vote");
	}
?>
</p>
</div>
<?php
require_once("foot.html");
?>