<?php
$bg_color = "#ff6347";
$txt_color = "#ffffff";
$border_color = "#800000";
$border_width = "10";
$border_radius = "20";
$text = "";
$font_size = "1.5";
$font_family = "sans-serif";
$font_families = array(
	"sans-serif"=>'"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif"',
	"serif"=>'Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif"',
	"monospace"=>'Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", "monospace"'
	);

if ( isset( $_POST[ "bg_color" ] ) && $_POST[ "bg_color" ] != "" ) {
	$bg_color = htmlspecialchars( $_POST[ "bg_color" ] );
}
if ( isset( $_POST[ "txt_color" ] ) && $_POST[ "txt_color" ] != "" ) {
	$txt_color = htmlspecialchars( $_POST[ "txt_color" ] );
}
if ( isset( $_POST[ "border_color" ] ) && $_POST[ "border_color" ] != "" ) {
	$border_color = htmlspecialchars( $_POST[ "border_color" ] );
}
if ( isset( $_POST[ "border_width" ] ) && $_POST[ "border_width" ] != "" ) {
	$border_width = htmlspecialchars( $_POST[ "border_width" ] );
}
if ( isset( $_POST[ "border_radius" ] ) && $_POST[ "border_radius" ] != "" ) {
	$border_radius = htmlspecialchars( $_POST[ "border_radius" ] );
}
if ( isset( $_POST[ "text" ] ) && $_POST[ "text" ] != "" ) {
	$text = htmlspecialchars( $_POST[ "text" ] );
}
if ( isset( $_POST[ "font_size" ] ) && $_POST[ "font_size" ] != "" ) {
	$font_size = htmlspecialchars( $_POST[ "font_size" ] );
}
if ( isset( $_POST[ "font_family" ] ) && $_POST[ "font_family" ] != "" ) {
	$font_family = htmlspecialchars( $_POST[ "font_family" ] );
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ülesanne 1</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style>
		body, textarea {
			font-family: 'Roboto', sans-serif;
		}
		
		fieldset,
		div {
			margin-top: 10px;
		}
		fieldset {
			border: 1px solid gray;
		}
		textarea {
			width: 100%;
			min-height: 50px;
			font-size: 0.9em;
		}
		select {
			width: 100%;
			font-size: 0.9em;
			padding: 10px 20px;
			border: 1px solid #eeeeee;
		}
		select:focus {
			outline: none;
			border: 1px solid #800000;
			box-shadow: 1px 1px 1px 1px #800000;
		}
		#text {
			width: 400px;
			min-height: 200px;
			padding: 20px;
			background: <?php echo $bg_color;
			?>;	
			border: <?php echo $border_width?>px solid <?php echo $border_color?>;
			border-radius: <?php echo $border_radius;
			?>px;
			color: <?php echo $txt_color;
			?>;
			font-size: <?php echo $font_size;?>em;
			font-family: <?php echo $font_families[$font_family];?>;
		}
		
		.flex-container {
			display: flex;
			margin: 0 auto;
			width: auto;
			justify-content: center;
			flex-wrap: wrap;
		}
		.flex-item {
			margin: 20px;
			width: 400px;
		}
		.btn {
			background: #800000;
			color: white;
			border: 0;
			padding: 10px 20px;
			font-size: 1em;
			transition: background 0.5s;
		}
		.btn:hover {
			background: #900000;
		}
		input[type="number"] {
			width: 80px;
			text-align: center;
			border: 0;
			padding-bottom: 10px;
			border-bottom: 1px solid black;
			font-size: 0.9em;
			transition: all 0.3s;
		}
		input[type="number"]:focus {
			outline: none;
			border-bottom: 1px solid #800000;
			box-shadow: 0 1px 0 0 #800000;
		}
		input[type="color"] {
			border: none;
			outline: none;
		}
	</style>
</head>
<body>
	<div class="flex-container">
		<div class="flex-item" id="text">
			<?php echo $text?>
		</div>
		<div class="flex-item">
			<form method="post">
				<div>
					<textarea name="text"><?php echo $text;?></textarea>
				</div>
				<div>
					<input type="color" name="bg_color" value="<?php echo $bg_color;?>"> Taustavärvus
				</div>
			  <fieldset>
					<legend>Tekst</legend>
					<div>
					  <input type="number" name="font_size" value="<?php echo $font_size;?>" step="any" min="1" max="2"> Fondi suurus (1.0-2.0em)
					</div>
				<div>
				  <input type="color" name="txt_color" value="<?php echo $txt_color;?>"> Tekstivärvus
				  </div>
				<div>
					<select name="font_family">
					<?php 
						foreach($font_families as $ff_k => $ff_v) {
							echo "<option value=".$ff_k;
							if($ff_k == $font_family) {
								echo " selected";
							}
							echo ">".$ff_k."</option>\n";
						}
					?>
					</select>
				</div>
				</fieldset>
				<fieldset>
					<legend>Piirjoon</legend>
					<div>
						<input type="number" name="border_width" min="0" max="20" value="<?php echo $border_width?>"> Piirjoone laius (0-20px)
					</div>
					<div>
						<input type="color" name="border_color" value="<?php echo $border_color;?>"> Piirjoone värvus
					</div>
					<div>
						<input type="number" name="border_radius" min="0" max="100" value="<?php echo $border_radius?>"> Piirjoone nurga raadius (0-100px)
					</div>
				</fieldset>
				<div>
					<button type="submit" class="btn">Saada</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>