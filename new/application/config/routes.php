<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*
| -------------------------------------------------------------------
|  Authentication 
| -------------------------------------------------------------------
*/

$route['register']['get']       = 'RegisterController/index';
$route['register']['post']      = 'RegisterController/create';
$route['login']['get']          = 'LoginController/index';
$route['login']['post']         = 'LoginController/login';
$route['logout']                = 'LoginController/logout';
$route['default_controller'] = 'PagesController';
/*
| -------------------------------------------------------------------
|  Teams
| -------------------------------------------------------------------
*/
$route['team']['get']       = 'TeamController/index';
$route['anadigix']       = 'Eventstemporary/anadigix';
$route['lom']       = 'Eventstemporary/lom';
$route['sponsors/(:any)']       = 'SponsorController/index/$1';
$route['team']['post']      = 'TeamController/register';
$route['events']['get']          = 'Eventstemporary/index';
$route['pulse']['get']          = 'Pulsetemporary/index';
$route['contact']['get']          = 'contact_temporary/index';
$route['soon']['get']          = 'SoonController/index';

$route['admin']['get']              = 'admin/AdminLoginController/index';
$route['admin']['post']             = 'admin/AdminLoginController/login';
$route['admin/logout']              = 'admin/AdminLoginController/logout';
$route['admin/user']                = 'admin/AdminUserManageController/index';
$route['admin/college/add']['get']  = 'admin/AdminCollegeManageController/index';
$route['admin/college/add']['post'] = 'admin/AdminCollegeManageController/add';
$route['admin/notices']             = 'admin/AdminNoticeController/index';
$route['admin/notices/add']         = 'admin/AdminNoticeController/add';
$route['admin/notices/addnotice']   = 'admin/AdminNoticeController/addnotice';
$route['admin/notices/(:any)']      = 'admin/AdminNoticeController/update/$1';
$route['admin/notices/updatenotice/(:any)']= 'admin/AdminNoticeController/updatenotice/$1';
$route['admin/events']              = 'admin/AdminEventController/index';
$route['admin/events/(:any)']       = 'admin/AdminEventController/event/$1';
$route['admin/eventdetail']         = 'admin/AdminEventDetailController/index';
$route['admin/eventdetail/(:any)']  = 'admin/AdminEventDetailController/update/$1';
$route['admin/eventdetail/updateevent/(:any)'] = 'admin/AdminEventDetailController/updateevent/$1';
$route['admin/team']                = 'admin/AdminTeamController/index';
$route['admin/team/(:any)']         = 'admin/AdminTeamController/team/$1';
$route['admin/team/delete/(:any)']  = 'admin/AdminTeamController/delete/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;