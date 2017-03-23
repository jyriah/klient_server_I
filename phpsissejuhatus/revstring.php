<?php
$string = $_REQUEST[ "str" ];
revString( $string );

function revString( $str ) {
	mb_internal_encoding( "UTF-8" );
	$revString = "";
	for ( $i = mb_strlen( $str ) - 1; $i >= 0; $i-- ) {
		$revString = $revString . mb_substr( $str, $i, 1 );
	}
	echo $revString;
}
?>