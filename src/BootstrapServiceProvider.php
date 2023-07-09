<?php
namespace CeddyG\Bootstrap;

use Illuminate\Support\ServiceProvider;

/**
 * Description of ServiceProvider
 *
 * @author CeddyG
 */
class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishesConfig();
		$this->publishesView();
    }
    
    /**
	 * Publish config file.
	 * 
	 * @return void
	 */
	private function publishesConfig()
	{
		$this->publishes([__DIR__ . '/../config' => config_path()], 'config');  
	}

	private function publishesView()
	{
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/bootstrap'),
        ], 'views');
        
        $this->loadViewsFrom(__DIR__.'/../resources/views/'.config('bootstrap.version'), config('bootstrap.namespace'));
	}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/bootstrap.php', 'bootstrap'
        );
    }
}
