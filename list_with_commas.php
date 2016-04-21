<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode (', ', $physicistsString);

var_dump($physicistsArray);

$lastPhysicist = array_pop($physicistsArray);

var_dump($physicistsArray);

$newPhysicistArray = $physicistsArray;

$result = implode (', ', $newPhysicistArray);

echo $result . "," . " and " . $lastPhysicist . PHP_EOL;



