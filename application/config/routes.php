<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// XXX static routing system XXX
// $route['posts'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['posts'] = 'posts';
$route['posts/(:any)'] = 'posts/view/$1';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
