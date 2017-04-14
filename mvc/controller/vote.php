<?php
$pildid = array(
	1=>"nameless1.jpg",
	2=>"nameless2.jpg",
	3=>"nameless3.jpg",
	4=>"nameless4.jpg",
	5=>"nameless5.jpg",
	6=>"nameless6.jpg");
?>
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="POST">
<?php
	
	foreach($pildid as $key=>$pilt) {
		echo '<p>';
		echo '<label for="p'.$key.'">';
		echo '<img src="pildid/'.$pilt.'" alt="nimetu '.$key.'" height="100" />';
		echo '</label>';
		echo '<input type="radio" value="'.$key.'" id="p'.$key.'" name="pilt"/>';
		echo '</p>';
	}
?>

		<br/>
		<input type="submit" value="Valin!"/>
	</form>
