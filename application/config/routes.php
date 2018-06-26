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
$route['clientbankedit'] = 'ClientEditBank/view';//paiya
$route['admin'] = 'Login/view';
$route['admin/users']='UserInfo/view';
$route['admin/orders']='Orders/view';
$route['admin/transaction']='Transactions/view';
$route['admin/create'] = 'Shares/create';
$route['admin/shares'] = 'Shares/view';
$route['admin/shares/(:any)'] = 'Shares/view/$1';
$route['admin/startup']="Startup/view";
$route['admin/update']='Update/view';
$route['admin/logout'] = 'Login/logout';
$route['clienthome'] = 'Clientstart/view'; //savi
$route['brokerlogout'] = 'Clientloginbroker/logout'; //savi
$route['banklogout'] = 'Clientloginbank/logout'; //savi
$route['team'] = 'Clientdevelopers/view'; //savi
$route['brokereditprofile'] = 'Clientbrokereditprofile/view'; //savi
$route['brokerrankings'] = 'Clientbrokerrankings/view'; //savi
$route['brokertransactions'] = 'Clientbrokertransactions/view'; //savi
$route['brokeradvises'] = 'Clientbrokeradvises/view'; //savi
$route['brokerbuysell'] = 'Clientbrokerbuysell/view'; //savi
$route['brokershare'] = 'Clientbrokershare/view'; //savi
$route['testdata1'] = 'Clienttestdata1/view'; //savi
$route['brokerhome'] = 'Clientbrokerhome/view'; //savi
$route['newbrokeracc'] = 'Clientnewbrokeracc/view'; //savi
$route['newbankacc'] = 'Clientnewbankacc/view'; //savi
$route['bankbook'] = 'Clientbankbook/view'; //savi
$route['loginbank'] = 'Clientloginbank/view'; //savi
$route['loginbroker'] = 'Clientloginbroker/view'; //savi
$route['admin'] = 'Login/view/$1';
$route['startup']="Startup/view";
$route['adduser']="AddUser/view";
$route['admin/edit/(:any)'] = 'Shares/edit/$1';
$route['clientbrokerhome/cancelorder/(:any)']="Clientbrokerhome/cancel_order/$1";
$route['brokershareselected/(:any)'] = 'Clientbrokershareselected/view/$1'; //savi
$route['(:any)'] = 'Login/view/$1';
$route['default_controller'] = 'Clientstart/view'; //savi
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
