<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Giris';
$route['404_override'] = '';
$route['giris'] = 'giris/index';
$route['giris/(.*)'] = 'giris/$1';
//$route['^(.*)'] = 'index/$1';
$route['translate_uri_dashes'] = FALSE;
