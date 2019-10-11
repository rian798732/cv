<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = "admin/dashboard";
$route['admin/profile'] = "admin/profile";
$route['admin/pengalaman'] = "admin/pengalaman";
$route['admin/edit_pengalaman'] = "admin/pengalaman/edit";
