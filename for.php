<?php 

fwrite(STDOUT, "Enter a starting number\n");

$starting_number = trim(fgets(STDIN));

fwrite(STDOUT, "Enter a ending number\n");

$ending_number = trim(fgets(STDIN));

fwrite(STDOUT, "Enter an increment\n");

$user_increment = trim(fgets(STDIN));


for ($i = $starting_number; $i <= $ending_number; $i+=$user_increment) {
	echo "\$i has a value of {$i}\n";
}