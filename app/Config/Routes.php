<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Main::index');
$routes->get('about', 'Main::about');
$routes->get('portfolio', 'Main::portfolio');
$routes->get('contact', 'Main::contact');
