<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




function combine_arrays($array1, $array2) {
	$combinedArray = [];
	foreach ($array1 as $index => $value) {
		if (array_search($value, $array2) !== false) {
			array_push($combinedArray, $value);
		} else {
			array_push($combinedArray, $array1[$index], $array2[$index]);
		}
	}
	return $combinedArray;
}


print_r (combine_arrays($names, $compare));








