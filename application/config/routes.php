<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main";
$route['task'] = "task";
$route['mentortask'] = "main/mentortask";
$route['mentorsend'] = "main/mentorsend";
//$route['devtask'] = "main/devtask";
//$route['devsend'] = "main/devsend";
//$route['devprogress'] = "main/devprogress";
$route['send'] = "main/send";
$route['progress'] = "main/progress";
$route['register']="main/register";
$route['homepage']='main/homepage';
$route['auth']="auth";
$route['wel']="welcome";
$route['faq'] = "faq";
$route['edit_profile'] = "main/edit_profile";
$route['admin'] = "main/admin";
$route['edit_hp'] = "main/edit_hp";
$route['edit_faq'] = "main/edit_faq";
$route['announcement'] = "main/announcement";


/////// test

//$route['news'] = 'news';
//$route['news/(:any)'] = 'news/view/$1';
//$route['news/create'] = 'news/create';

//$route['task/test'] = 'task';
$route['task/create'] = 'task/create';
$route['task/update'] = 'task/update';
$route['task/delete/(:any)']='task/delete/$1';
$route['task/stop_rel'] = 'task/stop_rel';
$route['task/comment'] = 'task/comment';
$route['faq/edit']='faq/edit';
//// end test


$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */