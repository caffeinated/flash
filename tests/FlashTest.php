<?php

use Caffeinated\Flash\FlashHandler;

class FlashTest extends PHPUnit_Framework_TestCase
{
	protected $session;

	protected $flash;

	public function setUp()
	{
		$this->session = Mockery::mock('Caffeinated\Flash\SessionStore');
		$this->flash   = new FlashHandler($this->session);
	}

	/** @test */
	public function it_displays_a_default_flash_notification()
	{
		$this->session->shouldReceive('flash')->with('caffeinated.flash.message', 'Live long and prosper.');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.title', 'Notice');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.level', 'info');

		$this->flash->message('Live long and prosper.');
	}

	/** @test */
	public function it_displays_an_info_flash_notification()
	{
		$this->session->shouldReceive('flash')->with('caffeinated.flash.message', 'Logic is the beginning of wisdom, not the end.');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.title', 'Notice');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.level', 'info');

		$this->flash->info('Logic is the beginning of wisdom, not the end.');
	}

	/** @test */
	public function it_displays_a_warning_flash_notification()
	{
		$this->session->shouldReceive('flash')->with('caffeinated.flash.message', 'Highly illogical.');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.title', 'Notice');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.level', 'warning');

		$this->flash->warning('Highly illogical.');
	}

	/** @test */
	public function it_displays_an_error_flash_notification()
	{
		$this->session->shouldReceive('flash')->with('caffeinated.flash.message', 'Our ship is being hit, shields at 60%.');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.title', 'Notice');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.level', 'danger');

		$this->flash->error('Our ship is being hit, shields at 60%.');
	}

	/** @test */
	public function it_displays_a_success_flash_notification()
	{
		$this->session->shouldReceive('flash')->with('caffeinated.flash.message', 'Shields at 100%.');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.title', 'Notice');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.level', 'success');

		$this->flash->success('Shields at 100%.');
	}

	/** @test */
	public function it_displays_a_custom_titled_flash_notification()
	{
		$this->session->shouldReceive('flash')->with('caffeinated.flash.message', 'Make it so.');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.title', 'Mr. Worf');
		$this->session->shouldReceive('flash')->with('caffeinated.flash.level', 'success');

		$this->flash->success('Make it so.');
	}
}
