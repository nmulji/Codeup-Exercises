<?php

class Log 
{
	private $fileName;
	private $handle;

	public function __construct($prefix = 'Log')
	{
		$this->logDate = date('Y-m-d');
		$this->setFileName("$prefix-{$this->logDate}.log");
		$this->setHandle(fopen($this->fileName, 'a'));
	}

	protected function setFileName($fileName) 
	{
		$this->fileName = $fileName;
	}

	protected function setHandle($handle)
	{
		$this->handle = $handle;
	}

	public function __destruct()
	{
		fclose($this->handle);
	}

	public function logMessage($logLevel, $message)
	{
	 	$logTime = date('h:i:s');
	 	//$fileName = "log-{$logDate}.log";
	 	//$handle = fopen($fileName, 'a');

	 	$dateLog = [];

	 	$message = $this->logDate.' '.$logTime.' [ ' .$logLevel. ' ] '.$message;

	 	fwrite($this->handle, $message.PHP_EOL);

	 	//fclose($handle);
	}

	public function info($logMessage)
	{
		$this->logMessage("INFO", $logMessage);
	}

	public function error($logMessage)
	{
		$this->logMessage("ERROR", $logMessage);
	}

}