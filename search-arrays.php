<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'Tina';

$result = array_search($query, $names);

if ($result !== FALSE) {
	echo "TRUE\n";
} else {
	echo "FALSE\n";
}

