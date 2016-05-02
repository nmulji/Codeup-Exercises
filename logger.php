<?php

function logMessage($logLevel, $message)
{
 	$logDate = date('Y-m-d');
 	$logTime = date('h:i:s');
 	$fileName = "log-{$logDate}.log";
 	$handle = fopen($fileName, 'a');

 	$dateLog = [];

 	$message = $logDate.' '.$logTime.' [ ' .$logLevel. ' ] '.$message;

 	fwrite($handle, $message.PHP_EOL);

 	fclose($handle);

}

function logInfo($logMessage) {
	logMessage("INFO", $logMessage);
}

function logError($logMessage) {
	logMessage("ERROR", $logMessage);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
