<?php

namespace VrtakCZ\NewRelic\Tracy\Custom;

class Tracers
{

	/**
	 * @param string functionName / ClassName::functionName
	 */
	public static function addTracer($function)
	{
		if (\VrtakCZ\NewRelic\Tracy\Bootstrap::isEnabled()) {
			newrelic_add_custom_tracer($function);
		}
	}

}
