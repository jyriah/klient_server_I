<?php
require_once("head.html");
?>
<div id="wrap">
<p>
<?php
	$pilt="";
	if(isset($_POST["pilt"]) && ($_POST["pilt"] != "")) {
		$pilt = htmlspecialchars($_POST["pilt"]);
		echo "Sinu lemmikpildi on number ".$pilt.".";
	} else {
		echo "Jube jama, aga tuleb välja, et sul polegi lemmikpilti :(";
	}
?>
</p>
</div>
<?php
require_once("foot.html");
?>