<?php
namespace Caffeinated\Flash\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void error(string $message)
 * @method static void info(string $message)
 * @method static void message(string $message, string $level = 'info')
 * @method static void success(string $message)
 * @method static void warning(string $message)
 */
class Flash extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'flash';
	}
}
