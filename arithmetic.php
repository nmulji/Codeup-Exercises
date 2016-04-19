<?php

$a = 30;
$b = 10;

function add($a, $b)
{
	if(!is_numeric($a) || !is_numeric($b)) {
		return "Error!! Must be number!\n";
	} 
    
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b)
{
	return $a % $b;
}

echo add($a, $b) . PHP_EOL;

echo subtract($a, $b) . PHP_EOL;

echo multiply($a, $b) . PHP_EOL;

echo divide($a, $b) . PHP_EOL;

echo modulus($a, $b) . PHP_EOL;

