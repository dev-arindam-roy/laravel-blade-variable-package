<?php

namespace Arindam\BladeVariable;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Contracts\Http\Kernel;

class BladeVariableServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        $blade = $this->app['view']->getEngineResolver()->resolve('blade')->getCompiler();

        $blade->extend( function($value, $compiler)
		{
			return preg_replace("/@var\('(.*?)'\,(.*)\)/", '<?php $$1 = $2; ?>', $value);
		});
    }

    /**
     * Bootstrap services.
     */
    public function boot(Kernel $kernel): void
    {
        
    }
}