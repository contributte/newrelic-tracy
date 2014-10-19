<?php

namespace VrtakCZ\NewRelic\Tracy;

class Logger implements \Tracy\ILogger
{
	/** @var \Tracy\ILogger */
	private $oldLogger;

	/** @var array */
	private $logLevel;

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
	 */
	public function log($message, $priority = NULL)
	{
		$this->oldLogger->log($message, $priority);

		if (in_array($priority, $this->logLevel)) {
			if (is_array($message)) {
				$message = implode(' ', $message);
			}

			newrelic_notice_error($message);
		}
	}
}
