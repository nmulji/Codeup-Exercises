<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Tina';

$result = array_search($query, $names);


if ($result !== FALSE) {
	var_dump(TRUE);
} else {
	var_dump(FALSE);
}

$count = 0;

foreach ($names as $value) {

	if (array_search($value, $compare) !== false) {

		$count++;
	}
}

var_dump($count);








