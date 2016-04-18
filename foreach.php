<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	if (is_int($thing)) {
		echo "{$thing}\n";
	} else if (is_float($thing)) {
		echo "{$thing}\n";
	} else if (is_bool($thing)) {
		echo "{$thing}\n";
	} else if (is_array($thing)) {
		foreach ($thing as $number) {
			echo "{$number}\n";
		}
	} else if (is_null($thing)) {
		echo "{$thing}\n";
	} else if (is_string($thing)) {
		echo "{$thing}\n";
	}
}


foreach ($things as $thing) {
	if (is_scalar($thing))
		echo "{$thing} is a scalar\n";
}

