<?php

namespace HistoricalMeteorological\Controller;

use Silex\Application;
use Silex\ControllerCollection;

class DefaultControllerProvider extends AbstractControllerProvider
{
    protected function registerControllerRoutes(Application $application, ControllerCollection $collection):ControllerCollection
    {
        $collection->get('/', function (Application $application) {
            return 'Hello World';
        });

        $collection->get('/test', function (Application $application) {
            return 'Test';
        });
        return $collection;
    }
}