<?php
namespace Caffeinated\Flash;

use Illuminate\Support\ServiceProvider;

class FlashServiceProvider extends ServiceProvider
{
	/**
	 * Indicates of loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerServices();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['flash'];
	}

	/**
	 * Register the package services.
	 *
	 * @return void
	 */
	protected function registerServices()
	{
		$this->app->bind(
			'Caffeinated\Flash\SessionStore',
			'Caffeinated\Flash\LaravelSessionStore'
		);

		$this->app->bindShared('flash', function() {
			return $this->app->make('Caffeinated\Flash\FlashHandler');
		});
	}
}