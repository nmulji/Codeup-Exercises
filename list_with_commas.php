<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';



$physicistsArray = explode (', ', $physicistsString);

$lastPhysicist = array_pop($physicistsArray);

$result = implode (', ', $physicistsArray);

echo $result . "," . " and " . $lastPhysicist . PHP_EOL;



