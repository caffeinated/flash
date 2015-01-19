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
	 * Create a flash message.
	 *
	 * @param string $message
	 * @param string $level
	 * @param string $title
	 */
	public function message($message, $level = 'info', $title = 'Notice')
	{
		$this->session->flash('caffeinated.flash.message', $message);
		$this->session->flash('caffeinated.flash.level', $level);
	}
}
