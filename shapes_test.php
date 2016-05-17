<?php

require_once 'rectangle.php';

require_once 'square.php';



$newSquare = new Square(2);

echo $newSquare->perimeter();

$newRectangle = new Rectangle(1, 1);

echo $newRectangle->area();