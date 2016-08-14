<?php

class Test {

	protected $times = 10000;
	protected $results = array();


	function get_results() {
		return array(
			'mean' => $this->get_mean(),
			'95%'  => $this->get_percentile( 95 ),
			'99%'  => $this->get_percentile( 99 ),
		);
	}

	function get_mean(){
		return round( array_sum( $this->results) / count( $this->results ) , 5 );
	}

	function get_percentile( $percentile ){
		$percentile = (int) $percentile;
		$local_results = $this->results;
		sort( $this->results );
		return round( $this->results[ round( ($this->times / 100 ) * $percentile ) ] , 5 ); 
	}

}
