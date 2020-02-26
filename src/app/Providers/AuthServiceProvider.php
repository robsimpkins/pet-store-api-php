<?php

namespace App\Providers;

use Illuminate\Auth\GenericUser;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['auth']->viaRequest('api', function ($request) {
            // Improvement: the API key would be used to identify a system user by querying an authentication microservice
            // Check if request header API key matches server API key
            if ($request->headers->get('api-key') == $request->server->get('API_KEY')) {
                return new GenericUser([
                    'id'   => 1,
                    'name' => 'API User',
                ]);
            }
        });
    }
}
