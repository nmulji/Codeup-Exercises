<?php


function humanizedList ($array, $alphabetical = true) {

	if ($alphabetical !== false) {
		sort($array);
	}

$lastPhysicist = array_pop($array);

$result = implode (', ', $array);

return $result . "," . " and " . $lastPhysicist . PHP_EOL;

}


//list of famous peeps

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


//convert string to array

$physicistsArray = explode (', ', $physicistsString);


//humanize that list

$famousFakePhysicists = humanizedList($physicistsArray);


//output

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";