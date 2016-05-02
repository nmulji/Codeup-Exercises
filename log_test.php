<?php

require_once 'Log.php';

$log = new Log;
$log->fileName = 'log-2016-05-02.log';

echo $log->logMessage("INFO", "ERROR");
echo $log->info("This is an info message.");
echo $log->error("This is an info message.");
