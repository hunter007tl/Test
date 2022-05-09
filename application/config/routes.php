<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'visitor';
$route['404_override'] = 'visitor/error_404';
$route['translate_uri_dashes'] = TRUE;

// Visitor
$route['home'] = 'visitor';

// Login
$route['cpanel-admin'] = 'login';
$route['login-process'] = 'login/login_process';
$route['reset-password'] = 'login/request_password';

// Admin
$route['admin-dashboard'] = 'admin';
$route['admin-logout'] = 'admin/logout';
$route['log-activity'] = 'logs/logs_view';

$route['users-list'] = 'users/list_view';
$route['users-register-form'] = 'users/input_form';
$route['users-edit-form/(:any)'] = 'users/edit_form/$1';
$route['users-my-profile/(:any)'] = 'users/profile_form/$1';


