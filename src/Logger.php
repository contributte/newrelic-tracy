<?php

namespace VrtakCZ\NewRelic\Tracy;

class Logger extends \Tracy\Logger
{
	/** @var array */
	private $logLevel;

	/**
	 * @param array
	 */
	public function __construct(array $logLevel)
	{
		$oldLogger = \Tracy\Debugger::getLogger();
		$this->emailSnooze =& $oldLogger->emailSnooze;
		$this->mailer =& $oldLogger->mailer;
		$this->directory =& $oldLogger->directory;
		$this->email =& $oldLogger->email;

		$this->logLevel = $logLevel;
	}

	/**
	 * @param string|array
	 * @param int
	 */
	public function log($message, $priority = NULL)
	{
		parent::log($message, $priority);

		if (in_array($priority, $this->logLevel)) {
			if (is_array($message)) {
				$message = implode(' ', $message);
			}

			newrelic_notice_error($message);
		}
	}
}
