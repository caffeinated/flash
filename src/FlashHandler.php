<?php
namespace Caffeinated\Flash;

class FlashHandler
{
	/**
	 * @var SessionStore
	 */
	private $session;

	/**
	 * Constructor
	 *
	 * @param SessionStore $service
	 */
	public function __construct(SessionStore $session)
	{
		$this->session = $session;
	}

	/**
	 * Create an info flash message.
	 *
	 * @param string $message
	 */
	public function info($message)
	{
		$this->message($message, 'info');
	}

	/**
	 * Create a success flash message.
	 *
	 * @param string $message
	 */
	public function success($message)
	{
		$this->message($message, 'success');
	}

	/**
	 * Create a warning flash message.
	 *
	 * @param string $message
	 */
	public function warning($message)
	{
		$this->message($message, 'warning');
	}

	/**
	 * Create an error flash message.
	 *
	 * @param string $message
	 */
	public function error($message)
	{
		$this->message($message, 'danger');
	}

	/**
	 * Create a flash message.
	 *
	 * @param string $message
	 * @param string $level
	 */
	public function message($message, $level = 'info')
	{
		$this->session->flash('caffeinated.flash.message', $message);
		$this->session->flash('caffeinated.flash.level', $level);
	}
}
