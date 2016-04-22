<?php

function parseContacts($filename)
{
    $contacts = array();

    $filename = 'contacts.txt';
    $handle = fopen($filename,  'r');
    $contents = fread($handle, filesize($filename));
    $contentsArray = explode("\n", $contents);

    foreach ($contentsArray as $key => $value) {
    	$innerArray = explode("|", $value);
    	$nameArray = ['Name' => $innerArray[0], 'Number' => $innerArray[1]];

    	$numberPop = array_pop($nameArray);

    	$numberDashes = substr($numberPop, 0, 3) . "-" . substr($numberPop, 3, 3) . "-" . substr($numberPop, 6, 4); 

    	$numberPush = array_push($nameArray, $numberDashes);

    	var_dump($numberDashes);

    	var_dump($nameArray);
    }
    
    fclose($handle);
  
    return $contentsArray;
}

parseContacts('contacts.txt');

