<?php

use App\Controllers\Pages;
use App\Controllers\News;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

$routes->get('news', [News::class, 'index']);
$routes->get('news/(:segment)', [News::class, 'show']);
