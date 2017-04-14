<?php require_once('head.html');?>
<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p><?php
$pilt="";
	if(isset($_GET["pilt"]) && ($_GET["pilt"] != "")) {
		$pilt = htmlspecialchars($_GET["pilt"]);
		echo "Sinu lemmikpildi on number ".$pilt.".";
	} else {
		echo "Jube jama, aga tuleb välja, et sul polegi lemmikpilti :(";
	}
		?>
	</p>

</div>
<?php require_once('foot.html');?>