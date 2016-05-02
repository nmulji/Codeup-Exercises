<?php

require_once 'Log.php';

$log = new Log('cli');

echo $log->logMessage("INFO", "ERROR");
echo $log->info("This is an info message.");
echo $log->error("This is an info message.");
