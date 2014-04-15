<?php namespace Elwinar\Babel;

use Illuminate\Support\ServiceProvider;

class BabelServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('elwinar/babel');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('babel.markdown', function()
		{
			return new Markdown;
		});

		$this->app['view']->addExtension('md', 'markdown', function()
		{
			return new MarkdownEngine;
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array(
			'babel.markdown'
		);
	}

}
