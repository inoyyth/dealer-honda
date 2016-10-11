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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'dashboard';

$route['master-jabatan'] = 'md_jabatan';
$route['master-jabatan-tambah'] = 'md_jabatan/add';
$route['master-jabatan-edit-(:num)'] = 'md_jabatan/edit/$1';
$route['master-jabatan-delete-(:num)'] = 'md_jabatan/delete/$1';
$route['master-jabatan-save'] = 'md_jabatan/save';
$route['master-jabatan-page'] = 'md_jabatan/index';
$route['master-jabatan-page/(:any)'] = 'md_jabatan/index/$1';
$route['master-jabatan-pdf'] = 'md_jabatan/print_pdf';
$route['master-jabatan-pdf/(:any)'] = 'md_jabatan/print_pdf/$1';
$route['master-jabatan-excel'] = 'md_jabatan/print_excel';
$route['master-jabatan-excel/(:any)'] = 'md_jabatan/print_excel/$1';

$route['master-karyawan'] = 'md_karyawan';
$route['master-karyawan-tambah'] = 'md_karyawan/add';
$route['master-karyawan-edit-(:num)'] = 'md_karyawan/edit/$1';
$route['master-karyawan-delete-(:num)'] = 'md_karyawan/delete/$1';
$route['master-karyawan-save'] = 'md_karyawan/save';
$route['master-karyawan-page'] = 'md_karyawan/index';
$route['master-karyawan-page/(:any)'] = 'md_karyawan/index/$1';
$route['master-karyawan-pdf'] = 'md_karyawan/print_pdf';
$route['master-karyawan-pdf/(:any)'] = 'md_karyawan/print_pdf/$1';
$route['master-karyawan-excel'] = 'md_karyawan/print_excel';
$route['master-karyawan-excel/(:any)'] = 'md_karyawan/print_excel/$1';

$route['user-management'] = 'account';
$route['user-management-tambah'] = 'account/add';
$route['user-management-edit-(:num)'] = 'account/edit/$1';
$route['user-management-delete-(:num)'] = 'account/delete/$1';
$route['user-management-save'] = 'account/save';
$route['user-management-page'] = 'account/index';
$route['user-management-page/(:any)'] = 'account/index/$1';
$route['user-management-pdf'] = 'account/print_pdf';
$route['user-management-pdf/(:any)'] = 'account/print_pdf/$1';
$route['user-management-excel'] = 'account/print_excel';
$route['user-management-excel/(:any)'] = 'account/print_excel/$1';

