<?php

require( 'test.php' );

class Test_Require_Once extends Test {

	function run_tests(){
		$i = 0;
		while ( $i < $this->times ) {
			$file = dirname( __FILE__ ) . '/requires/require_once_' . $i . '.php';

			$start = microtime(true);
			require_once( $file );
			$end = microtime( true );

			$execution = $end - $start;
			$this->results[] = $execution;
			$i++;
		}
	}
	

}

$test_require_once = new Test_Require_Once();
$test_require_once->run_tests();
var_dump( $test_require_once->get_results() );
