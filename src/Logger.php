<?php

namespace VrtakCZ\NewRelic\Tracy;

if (!interface_exists('Tracy\ILogger')) {
	require_once __DIR__ . '/ILogger.php';
}

class Logger implements \Tracy\ILogger
{
	/** @var \Tracy\ILogger */
	private $oldLogger;

	/** @var array */
	private $logLevel;

	/** @var bool */
	public $directory = TRUE; // workaround https://github.com/nette/tracy/pull/74

	/**
	 * @param array
	 */
	public function __construct(array $logLevel)
	{
		$this->oldLogger = \Tracy\Debugger::getLogger();
		$this->logLevel = $logLevel;
	}

	/**
	 * @param string|array
	 * @param string
	 * @return string logged error filename
	 */
	public function log($message, $priority = NULL)
	{
		$exceptionFile = $this->oldLogger->log($message, $priority);

		if (in_array($priority, $this->logLevel)) {
			if (is_array($message)) {
				$message = implode(' ', $message);
			}

			newrelic_notice_error($message);
		}

		return $exceptionFile;
	}
}
