<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['auth'] = 'Auth/index';
$route['logout'] = 'Auth/logout';
$route['home/'] = 'Home/index';