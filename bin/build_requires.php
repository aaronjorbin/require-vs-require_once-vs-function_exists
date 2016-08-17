<?php

$file_names = array( 
	'require_%s.php',
	'require_once_%s.php',
	'require_if_not_exists_%s.php'
	); 

$i = 0;

while( $i < 10000 ) {
	$str = '<?php /*';
	while( strlen( $str ) < 5000) { 
		$str .= uniqid(); 
	}
	$str .= '*/';
	foreach( $file_names as $file_name ) {
		$putpoint = dirname( __file__ ) . '/../requires/' . sprintf( $file_name, $i );
		file_put_contents( $putpoint, $str );
	}
	echo ".";
	$i++;
	if ( $i % 50 === 0 ){
		echo " [" . $i . ' /10000]' . PHP_EOL;
	}
}
