<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ==========================================================================================
// Admin
// @npic restaurant
//ibnusoffyan@gmail.com
// ==========================================================================================

$route['a/dashboard']                       = 'admin/dashboard';

$route['a/slider']                          = 'admin/slider_controller';
$route['a/slider/add']                      = 'admin/slider_controller/add';
$route['a/slider/edit/(:any)']              = 'admin/slider_controller/edit/$1';
$route['a/slider/delete/(:any)']            = 'admin/slider_controller/delete/$1';

$route['a/profile']                         = 'admin/account_controller';
$route['a/update_account']                  = 'admin/account_controller/update';
$route['a/change_password']                 = 'admin/account_controller/change_password';

$route['a/profile_resto']                   = 'admin/profile_controller';

$route['a/employee']                        = 'admin/employee_controller';
$route['a/employee/add']                    = 'admin/employee_controller/add';

$route['a/position']                        = 'admin/position_controller';
$route['a/position/add']                    = 'admin/position_controller/add';

$route['a/food']                            = 'admin/menu_controller';
$route['a/food_not_available']              = 'admin/menu_not_available';
$route['a/food/add']                        = 'admin/menu_controller/add';

$route['a/food_category']                   = 'admin/category_controller';
$route['a/food_category/add']               = 'admin/category_controller/add';

$route['a/food_type']                       = 'admin/type_controller';
$route['a/food_type/add']                   = 'admin/type_controller/add';

$route['a/salary']                          = 'admin/salary_controller';
$route['a/salary/choose']                   = 'admin/salary_controller/choose_employee';

$route['a/user']                            = 'admin/user_controller';

$route['a/table']                           = 'admin/table_controller';
$route['a/table/add']                       = 'admin/table_controller/add';

$route['a/setting']                         = 'admin/setting_controller';

$route['a/profile/update']                  = 'admin/profile_controller/update';
$route['a/social_media']                    = 'admin/sosmed_controller';
$route['a/social_media/add']                = 'admin/sosmed_controller/add';

$route['a/transaction']                     = 'admin/invoice';
$route['a/transaction/end']                 = 'admin/invoice/selesai';

$route['a/shop']                            = 'admin/shop_controller';

$route['a/report/all']                      = 'admin/report_controller';
$route['a/report/day']                      = 'admin/report_controller/day';
$route['a/report/pdf']                      = 'admin/report_controller/pdf';

$route['a/salary/choose_employee']          = 'admin/data_salary/choose_employee';
$route['a/logout']                          = 'auth/logout';
$route['a/profile']                         = 'admin/account_controller';
$route['a/reservation']                     = 'admin/dashboard';




$route['a/block_access']                    = 'admin/block_access';
