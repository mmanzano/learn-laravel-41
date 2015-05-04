<?php
/**
 * Created by PhpStorm.
 * User: miguel
 * Date: 1/05/15
 * Time: 16:38
 */

namespace HireMe\Components;


use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['field'] = $this->app->share(function($app){
            $fieldBuilder = new FieldBuilder($app['form'], $app['view'], $app['session.store']);
            return $fieldBuilder;
        });
    }
}