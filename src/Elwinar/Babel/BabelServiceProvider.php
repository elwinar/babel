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
		$this->registerMarkdown();
		$this->registerTextile();
	}

	public function registerMarkdown()
	{
		$this->app->bind('babel.markdown', function()
		{
			return new Markdown;
		});

		$this->app['view']->addExtension('md', 'markdown', function()
		{
			return new MarkdownEngine;
		});

		$this->app['view']->addExtension('md.php', 'php-markdown', function()
		{
			return new PhpMarkdownEngine;
		});

		$this->app['view']->addExtension('md.blade.php', 'blade-markdown', function()
		{
			return new BladeMarkdownEngine($this->app['view']->getEngineResolver()->resolve('blade')->getCompiler());
		});
	}

	public function registerTextile()
	{
		$this->app->bind('babel.textile', function()
		{
			return new Textile;
		});

		$this->app['view']->addExtension('tx', 'textile', function()
		{
			return new TextileEngine;
		});

		$this->app['view']->addExtension('tx.php', 'php-textile', function()
		{
			return new PhpTextileEngine;
		});

		$this->app['view']->addExtension('tx.blade.php', 'blade-textile', function()
		{
			return new BladeTextileEngine($this->app['view']->getEngineResolver()->resolve('blade')->getCompiler());
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
			'babel.markdown',
			'babel.textile',
		);
	}

}
