<?php require_once('head.html');
$pildid = array(
	1=>"nameless1.jpg",
	2=>"nameless2.jpg",
	3=>"nameless3.jpg",
	4=>"nameless4.jpg",
	5=>"nameless5.jpg",
	6=>"nameless6.jpg");
?>

<div id="wrap">
	<h3>Fotod</h3>
	<div id="gallery">
<?php
foreach($pildid as $key=>$pilt) {
	echo '<img src="pildid/'.$pilt.'" alt="nimetu '.$key.'" >';
}
?>

	</div>
</div>
<?php require_once('foot.html');?>