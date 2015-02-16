<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('s175423_homepage', new Route('/hello/{name}', array(
    '_controller' => 's175423Bundle:Default:index',
)));

return $collection;
