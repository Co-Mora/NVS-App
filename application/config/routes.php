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
$route['default_controller'] = 'Customers/register';
$route['home'] = "Home/view";
$route['industries'] = "industries/view_industries";
$route['administrative']= "Business/administrative";
$route['accommodation']= "Business/accommodation";
$route['administrative']= "Business/administrative";
$route['retail']= "Business/retail";
$route['contractor']= "Business/contractor";
$route['estate']= "Business/estate";
$route['event']= "Business/event";
$route['manufacturer']= "Business/manufacturer";
// Policies Routes
$route['admin_policy1']= "Policies/admin_policy1";
$route['admin_policy2']= "Policies/admin_policy2";
$route['accommodation_policy1']= "Policies/accommodation_policy1";
$route['accommodation_policy2']= "Policies/accommodation_policy2";
$route['retail_policy1']= "Policies/retail_policy1";
$route['retail_policy2']= "Policies/retail_policy2";

$route['contractor_policy1']= "Policies/contractor_policy1";
$route['contractor_policy2']= "Policies/contractor_policy2";
$route['estate_policy1']= "Policies/estate_policy1";
$route['estate_policy2']= "Policies/estate_policy2";
$route['event_policy1']= "Policies/event_policy1";
$route['event_policy2']= "Policies/event_policy2";
$route['manufacturer_policy1']= "Policies/manufacturer_policy1";
$route['manufacturer_policy2']= "Policies/manufacturer_policy2";
$route['create_admin_policy1']= "Policies/create_admin_policy1";
$route['create_admin_policy2']= "Policies/create_admin_policy2";
$route['create_accommodation_policy1']= "Policies/create_accommodation_policy1";
$route['create_accommodation_policy2']= "Policies/create_accommodation_policy2";
$route['create_retail_policy1']= "Policies/create_retail_policy1";
$route['create_retail_policy2']= "Policies/create_retail_policy2";
$route['create_contractor_policy1']= "Policies/create_contractor_policy1";
$route['create_contractor_policy2']= "Policies/create_contractor_policy2";
$route['create_estate_policy1']= "Policies/create_estate_policy1";
$route['create_estate_policy2']= "Policies/create_estate_policy2";
$route['create_event_policy1']= "Policies/create_event_policy1";
$route['create_event_policy2']= "Policies/create_event_policy2";
$route['create_manufacturer_policy1']= "Policies/create_manufacturer_policy1";
$route['create_manufacturer_policy2']= "Policies/create_manufacturer_policy2";


$route['view_customer']= "Customers/view_customer";
$route['register']= "Users/register";
$route['login']= "Users/login";
$route['logout']= "Users/logout";

$route['view']= "Front/view";
$route['re_view']= "Front/re_view";




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
