<?php

namespace HistoricalMeteorological\Provider\Controller;

use Silex\Application;
use Silex\ControllerCollection;

class DefaultControllerProvider extends AbstractControllerProvider
{
    /**
     * Register the homepage route
     * @param Application $application
     * @param ControllerCollection $collection
     * @return ControllerCollection
     */
    protected function registerControllerRoutes(Application $application, ControllerCollection $collection):ControllerCollection
    {
        $collection->get('/', function (Application $application) {
            return file_get_contents(__DIR__.'/../../../../view/swagger-ui.html');
        });

        return $collection;
    }
}
