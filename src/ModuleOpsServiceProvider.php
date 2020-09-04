<?php

namespace Dorcas\ModulesOps;
use Illuminate\Support\ServiceProvider;

class ModulesOpsServiceProvider extends ServiceProvider {

	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/resources/views', 'modules-ops');
		$this->publishes([
			__DIR__.'/config/modules-ops.php' => config_path('modules-ops.php'),
		], 'dorcas-modules');
		/*$this->publishes([
			__DIR__.'/assets' => public_path('vendor/modules-settings')
		], 'dorcas-modules');*/
	}

	public function register()
	{
		
		//add menu config
		$this->mergeConfigFrom(
	        __DIR__.'/config/navigation-sub-menu.php', 'navigation-menu.modules-ops.sub-menu'
	     );

	}

}


?>