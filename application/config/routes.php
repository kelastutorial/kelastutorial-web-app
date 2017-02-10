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

#Homepage
$route['default_controller'] = 'pages';

#All Tutorial
$route['tutorials'] = 'pages/tutorials';

#Static Page
$route['about'] = 'pages/about';
$route['contact'] = 'pages/contact';
$route['site-terms'] = 'pages/site_terms';
$route['privacy-policy'] = 'pages/privacy_policy';
$route['program'] = 'pages/program';
$route['partner'] = 'pages/partner';
$route['reference'] = 'pages/referensi';
$route['report-issues'] = 'pages/laporkan_isu';
$route['donate'] = 'pages/donasi';
$route['event'] = 'pages/event';

#------Main Tutorial------#
#Java Tutorial
$route['java'] = 'java';
$route['java/adminDeletePost/(:any)'] = 'java/adminDeletePost/$1';
$route['java/adminUpdatePost/(:any)'] = 'java/adminUpdatePost/$1';
$route['java/adminAddPost'] = 'java/adminAddPost';
$route['java/adminAllPost'] = 'java/adminAllPost';
$route['java/(:any).html'] = 'java/view/$1';

#Git Tutorial
$route['git'] = 'git';
$route['git/adminDeletePost/(:any)'] = 'git/adminDeletePost/$1';
$route['git/adminUpdatePost/(:any)'] = 'git/adminUpdatePost/$1';
$route['git/adminAddPost'] = 'git/adminAddPost';
$route['git/adminAllPost'] = 'git/adminAllPost';
$route['git/(:any).html'] = 'git/view/$1';

#Python Tutorial
$route['python'] = 'python';
$route['python/adminDeletePost/(:any)'] = 'python/adminDeletePost/$1';
$route['python/adminUpdatePost/(:any)'] = 'python/adminUpdatePost/$1';
$route['python/adminAddPost'] = 'python/adminAddPost';
$route['python/adminAllPost'] = 'python/adminAllPost';
$route['python/(:any).html'] = 'python/view/$1';

#HTML Tutorial
$route['html'] = 'html';
$route['html/adminDeletePost/(:any)'] = 'html/adminDeletePost/$1';
$route['html/adminUpdatePost/(:any)'] = 'html/adminUpdatePost/$1';
$route['html/adminAddPost'] = 'html/adminAddPost';
$route['html/adminAllPost'] = 'html/adminAllPost';
$route['html/(:any).html'] = 'html/view/$1';

#JSON Tutorial
$route['json'] = 'json';
$route['json/adminDeletePost/(:any)'] = 'json/adminDeletePost/$1';
$route['json/adminUpdatePost/(:any)'] = 'json/adminUpdatePost/$1';
$route['json/adminAddPost'] = 'json/adminAddPost';
$route['json/adminAllPost'] = 'json/adminAllPost';
$route['json/(:any).html'] = 'json/view/$1';

#Scrum Tutorial
$route['scrum'] = 'scrum';
$route['scrum/adminDeletePost/(:any)'] = 'scrum/adminDeletePost/$1';
$route['scrum/adminUpdatePost/(:any)'] = 'scrum/adminUpdatePost/$1';
$route['scrum/adminAddPost'] = 'scrum/adminAddPost';
$route['scrum/adminAllPost'] = 'scrum/adminAllPost';
$route['scrum/(:any).html'] = 'scrum/view/$1';

#XML Tutorial
$route['xml'] = 'xml';
$route['xml/adminDeletePost/(:any)'] = 'xml/adminDeletePost/$1';
$route['xml/adminUpdatePost/(:any)'] = 'xml/adminUpdatePost/$1';
$route['xml/adminAddPost'] = 'xml/adminAddPost';
$route['xml/adminAllPost'] = 'xml/adminAllPost';
$route['xml/(:any).html'] = 'xml/view/$1';


#------Admin Page------#
#Image Upload Tutorial
$route['dashboard'] = 'dashboard';
$route['dashboard/image-upload'] = 'dashboard/image_upload';

#$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

#------404 Not Found------#
$route['404_override'] = 'my404'; //my404 is class name.
