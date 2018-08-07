<?php
/**
 * FormBuilder表单生成器
 * Author: xaboy
 * Github: https://github.com/xaboy/form-builder
 */

namespace LaravelFormBuilder;

use Illuminate\Support\ServiceProvider;

class FormBuilderProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/views','form-builder');

        $this->publishes([
           __DIR__.'/views' => base_path('resources/views/vendor/form-builder')
        ], 'resources');
        $this->publishes([
            __DIR__.'/assets/form-create' => public_path('vendor/form-create')
        ], 'assets');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'LaravelFormBuilder\Form'
        );
    }
}
