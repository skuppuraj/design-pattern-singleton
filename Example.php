<?php

include 'Singleton.php';

class Example extends Singleton {

	public function __construct() {
		echo "Instance initialized";
	}
}


$obj1 = Example::instance();
$obj2 = Example::instance();

if ( $obj1 == $obj2 ) {
	echo "<br>Both are same object";
}