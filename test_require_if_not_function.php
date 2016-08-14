<?php

require( 'test.php' );

class Test_Require_If_Not_Exists extends Test {

	function run_tests(){
		$i = 0;
		while ( $i < $this->times ) {
			$file = dirname( __FILE__ ) . '/requires/require_if_not_exists_' . $i . '.php';

			$start = microtime(true);
			if ( ! function_exists( 'add_action' ) ){
				require( $file );
			}
			$end = microtime( true );

			$execution = $end - $start;
			$this->results[] = $execution;
			$i++;
		}
	}
	

}

$Test_Require_If_Not_Exists = new Test_Require_If_Not_Exists();
$Test_Require_If_Not_Exists->run_tests();
var_dump( $Test_Require_If_Not_Exists->get_results() );
