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
	 * Boot the service provider
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../views', 'flash');

		$this->publishes([
			__DIR__.'/../views' => base_path('resources/views/vendor/flash'),
		]);
	}

	/**
	 * Register the service provider
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Caffeinated\Flash\SessionStore',
			'Caffeinated\Flash\LaravelSessionStore'
		);

		$this->app->singleton('flash', function() {
			return $this->app->make('Caffeinated\Flash\FlashHandler');
		});
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
}
