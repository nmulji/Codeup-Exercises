<?php

function add($a, $b)
{
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

echo add(1, 2) . PHP_EOL;

echo subtract(20, 8) . PHP_EOL;

echo multiply(5, 4) . PHP_EOL;

echo divide(60, 15) . PHP_EOL;

echo modulus(50, 8) . PHP_EOL;

