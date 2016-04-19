<?php


$a = 30;
$b = 10;


function throwErrorMessage()
{
	return "Error!!\n";
}


function add($a, $b)
{
	if(!is_numeric($a) || !is_numeric($b)) {
		return throwErrorMessage();
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
	if($a == 0 || $b == 0) {
		echo throwErrorMessage() . PHP_EOL;
	} 
    
    return $a + $b;
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

