<?php

namespace HashyooSwoole;

use HashyooSwoole\Server\Manager;

/**
 * @codeCoverageIgnore
 */
class LaravelServiceProvider extends SwooleServiceProvider
{
    /**
     * Register manager.
     *
     * @return void
     */
    protected function registerManager()
    {
        $this->app->singleton(Manager::class, function ($app) {
            return new Manager($app, 'laravel');
        });

        $this->app->alias(Manager::class, 'swoole.manager');
    }
//
//    /**
//     * Boot websocket routes.
//     *
//     * @return void
//     */
//    protected function bootWebsocketRoutes()
//    {
//        require __DIR__ . '/../routes/laravel_routes.php';
//    }
//
//    /**
//     * Register access log middleware to container.
//     *
//     * @return void
//     */
//    protected function pushAccessLogMiddleware()
//    {
//        $this->app->make(Kernel::class)->pushMiddleware(AccessLog::class);
//    }
}
