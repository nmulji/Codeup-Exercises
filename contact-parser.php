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
    	var_dump(($nameArray));
    }
    
    fclose($handle);
    array_push($contacts, $contents);
    
    return $contentsArray;
}

parseContacts('contacts.txt');

