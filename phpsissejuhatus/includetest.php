<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Include Test</title>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<style>
		* {
			font-family: 'Source Sans Pro', sans-serif;
			margin: 0;
			padding: 0;
		}
		a {
			text-decoration: none;
			font-size: 1.4em;
			color: gray;
		}
		a:hover {
			text-decoration: underline;
		}
		.main {
			width: 90%;
			margin: 20px auto;
		}
		.profile-image-container {
			width: 138px;
			height: 138px;
			background: #fff;
			border-radius: 50%;
			margin: auto;
		}
		.profile-image {
			border-radius: 50%;
			position: relative;
			top: 5px;
		}
		.capitalize {
			text-transform: capitalize;
		}
		.container {
			display: table;
			margin: 0 auto;
		}
		.user {
			text-align: center;
			margin: 20px;
			padding: 20px;
			background: #003DFF;
			color: #fff;
			border-radius: 5%;
			float: left;
			font-size: 1.2em;
			line-height: 2em;
		}
	</style>
</head>

<body>
<div class="main">
<div class="container">
<h1 style="color: #E5A700;background: #996F00;padding: 10px 20px;display: inline-block; margin-left: 20px;">Viide kasutajate generaatorile:</h1>
<div style="padding: 20px;margin-left: 20px;"><a href="https://api.randomuser.me">https://api.randomuser.me</a></div>
	<?php
	$users = array(
		array( "first" => "kerttu", "last" => "heinonen", "street" => "1645 reijolankatu", "city" => "lieto", "state" => "northern savonia", "postcode" => "44588", "email" => "kerttu.heinonen@example.com", "phone" => "043-902-74-30", "image" => "https://randomuser.me/api/portraits/women/38.jpg" ),
		array( "first" => "matthew", "last" => "jimenez", "street" => "3380 mcgowen st", "city" => "tyler", "state" => "oregon", "postcode" => "74658", "email" => "matthew.jimenez@example.com", "phone" => "(965)-830-0727", "image" => "https://randomuser.me/api/portraits/men/16.jpg" ),
		array( "first" => "georgia", "last" => "mitchell", "street" => "6342 prospect rd", "city" => "chesapeake", "state" => "north carolina", "postcode" => "44225", "email" => "georgia.mitchell@example.com", "phone" => "(593)-032-6142", "image" => "https://randomuser.me/api/portraits/women/49.jpg" )
	);
	foreach ( $users as $user ) {
		include 'user.html';
	}
	?>
	<br style="clear: both">
</div>
</div>
</body>

</html>