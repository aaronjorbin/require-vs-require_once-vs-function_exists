<?php

require( 'test.php' );

class Test_Require extends Test {

	function run_tests(){
		$i = 0;
		while ( $i < $this->times ) {
			$file = dirname( __FILE__ ) . '/requires/require_' . $i . '.php';

			$start = microtime(true);
			require( $file );
			$end = microtime( true );

			$execution = $end - $start;
			$this->results[] = $execution;
			$i++;
		}
	}
	

}

$test_require = new Test_Require();
$test_require->run_tests();
var_dump( $test_require->get_results() );
