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
$route['default_controller'] = 'login';
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

$route['master-gudang'] = 'md_gudang';
$route['master-gudang-tambah'] = 'md_gudang/add';
$route['master-gudang-edit-(:num)'] = 'md_gudang/edit/$1';
$route['master-gudang-delete-(:num)'] = 'md_gudang/delete/$1';
$route['master-gudang-save'] = 'md_gudang/save';
$route['master-gudang-page'] = 'md_gudang/index';
$route['master-gudang-page/(:any)'] = 'md_gudang/index/$1';
$route['master-gudang-pdf'] = 'md_gudang/print_pdf';
$route['master-gudang-pdf/(:any)'] = 'md_gudang/print_pdf/$1';
$route['master-gudang-excel'] = 'md_gudang/print_excel';
$route['master-gudang-excel/(:any)'] = 'md_gudang/print_excel/$1';

$route['master-leasing'] = 'md_leasing';
$route['master-leasing-tambah'] = 'md_leasing/add';
$route['master-leasing-edit-(:num)'] = 'md_leasing/edit/$1';
$route['master-leasing-delete-(:num)'] = 'md_leasing/delete/$1';
$route['master-leasing-save'] = 'md_leasing/save';
$route['master-leasing-page'] = 'md_leasing/index';
$route['master-leasing-page/(:any)'] = 'md_leasing/index/$1';
$route['master-leasing-pdf'] = 'md_leasing/print_pdf';
$route['master-leasing-pdf/(:any)'] = 'md_leasing/print_pdf/$1';
$route['master-leasing-excel'] = 'md_leasing/print_excel';
$route['master-leasing-excel/(:any)'] = 'md_leasing/print_excel/$1';

$route['master-supplier'] = 'md_supplier';
$route['master-supplier-tambah'] = 'md_supplier/add';
$route['master-supplier-edit-(:num)'] = 'md_supplier/edit/$1';
$route['master-supplier-delete-(:num)'] = 'md_supplier/delete/$1';
$route['master-supplier-save'] = 'md_supplier/save';
$route['master-supplier-page'] = 'md_supplier/index';
$route['master-supplier-page/(:any)'] = 'md_supplier/index/$1';
$route['master-supplier-pdf'] = 'md_supplier/print_pdf';
$route['master-supplier-pdf/(:any)'] = 'md_supplier/print_pdf/$1';
$route['master-supplier-excel'] = 'md_supplier/print_excel';
$route['master-supplier-excel/(:any)'] = 'md_supplier/print_excel/$1';

$route['master-motor'] = 'md_motor';
$route['master-motor-tambah'] = 'md_motor/add';
$route['master-motor-edit-(:num)'] = 'md_motor/edit/$1';
$route['master-motor-delete-(:num)'] = 'md_motor/delete/$1';
$route['master-motor-save'] = 'md_motor/save';
$route['master-motor-page'] = 'md_motor/index';
$route['master-motor-page/(:any)'] = 'md_motor/index/$1';
$route['master-motor-pdf'] = 'md_motor/print_pdf';
$route['master-motor-pdf/(:any)'] = 'md_motor/print_pdf/$1';
$route['master-motor-excel'] = 'md_motor/print_excel';
$route['master-motor-excel/(:any)'] = 'md_motor/print_excel/$1';

$route['master-aksesoris'] = 'md_aksesoris';
$route['master-aksesoris-tambah'] = 'md_aksesoris/add';
$route['master-aksesoris-edit-(:num)'] = 'md_aksesoris/edit/$1';
$route['master-aksesoris-delete-(:num)'] = 'md_aksesoris/delete/$1';
$route['master-aksesoris-save'] = 'md_aksesoris/save';
$route['master-aksesoris-page'] = 'md_aksesoris/index';
$route['master-aksesoris-page/(:any)'] = 'md_aksesoris/index/$1';
$route['master-aksesoris-pdf'] = 'md_aksesoris/print_pdf';
$route['master-aksesoris-pdf/(:any)'] = 'md_aksesoris/print_pdf/$1';
$route['master-aksesoris-excel'] = 'md_aksesoris/print_excel';
$route['master-aksesoris-excel/(:any)'] = 'md_aksesoris/print_excel/$1';

$route['master-customer'] = 'md_customer';
$route['master-customer-tambah'] = 'md_customer/add';
$route['master-customer-edit-(:num)'] = 'md_customer/edit/$1';
$route['master-customer-detail-(:num)'] = 'md_customer/detail/$1';
$route['master-customer-delete-(:num)'] = 'md_customer/delete/$1';
$route['master-customer-save'] = 'md_customer/save';
$route['master-customer-page'] = 'md_customer/index';
$route['master-customer-page/(:any)'] = 'md_customer/index/$1';
$route['master-customer-pdf'] = 'md_customer/print_pdf';
$route['master-customer-pdf/(:any)'] = 'md_customer/print_pdf/$1';
$route['master-customer-excel'] = 'md_customer/print_excel';
$route['master-customer-excel/(:any)'] = 'md_customer/print_excel/$1';

$route['penjualan'] = 't_penjualan/add';
$route['penjualan-tambah'] = 't_penjualan/add';
$route['penjualan-edit-(:num)'] = 't_penjualan/edit/$1';
$route['penjualan-detail-(:num)'] = 't_penjualan/detail/$1';
$route['penjualan-delete-(:num)'] = 't_penjualan/delete/$1';
$route['penjualan-save'] = 't_penjualan/save';
$route['penjualan-page'] = 't_penjualan/index';
$route['penjualan-page/(:any)'] = 't_penjualan/index/$1';
$route['penjualan-pdf'] = 't_penjualan/print_pdf';
$route['penjualan-pdf/(:any)'] = 't_penjualan/print_pdf/$1';
$route['penjualan-excel'] = 't_penjualan/print_excel';
$route['penjualan-excel/(:any)'] = 't_penjualan/print_excel/$1';

/* Start Kwitansi DP */
$route['kwitansi-dp'] = 't_kwitansi/t_kwitansidp';
$route['kwitansi-dp/(:any)/(:num)'] = 't_kwitansi/t_kwitansidp/$1/$2';

$route['kwitansi-dp-tambah'] = 't_kwitansi/t_kwitansidp/add';
$route['kwitansi-dp-edit-(:num)'] = 't_kwitansi/t_kwitansidp/edit/$1';
$route['kwitansi-dp-detail-(:num)'] = 't_kwitansi/t_kwitansidp/detail/$1';
$route['kwitansi-dp-delete-(:num)'] = 't_kwitansi/t_kwitansidp/delete/$1';
$route['kwitansi-dp-save'] = 't_kwitansi/t_kwitansidp/save';
$route['kwitansi-dp-page'] = 't_kwitansi/t_kwitansidp/index';
$route['kwitansi-dp-page/(:any)'] = 't_kwitansi/t_kwitansidp/index/$1';
$route['kwitansi-dp-pdf'] = 't_kwitansi/t_kwitansidp/print_pdf';
$route['kwitansi-dp-pdf/(:any)'] = 't_kwitansi/t_kwitansidp/print_pdf/$1';
$route['kwitansi-dp-excel'] = 't_kwitansi/t_kwitansidp/print_excel';
$route['kwitansi-dp-excel/(:any)'] = 't_kwitansi/t_kwitansidp/print_excel/$1';

/* Start Kwitansi Fee */
$route['kwitansi-fee'] = 't_kwitansi/t_kwitansi_fee/add';
$route['kwitansi-fee-tambah'] = 't_kwitansi/t_kwitansi_fee/add';//kwitansi-fee-save
$route['kwitansi-fee-edit-(:num)'] = 't_kwitansi/t_kwitansi_dp/edit/$1';
$route['kwitansi-fee-detail-(:num)'] = 't_kwitansi/t_kwitansi_dp/detail/$1';
$route['kwitansi-fee-delete-(:num)'] = 't_kwitansi/t_kwitansi_dp/delete/$1';
$route['kwitansi-fee-save'] = 't_kwitansi/t_kwitansi_fee/save';
$route['kwitansi-fee-page'] = 't_kwitansi/t_kwitansi_dp/index';
$route['kwitansi-fee-page/(:any)'] = 't_kwitansi/t_kwitansi_dp/index/$1';
$route['kwitansi-fee-pdf'] = 't_kwitansi/t_kwitansi_dp/print_pdf';
$route['kwitansi-fee-pdf/(:any)'] = 't_kwitansi/t_kwitansi_dp/print_pdf/$1';
$route['kwitansi-fee-excel'] = 't_kwitansi/t_kwitansi_dp/print_excel';
$route['kwitansi-fee-excel/(:any)'] = 't_kwitansi/t_kwitansi_dp/print_excel/$1';
/* Kwitansi Fee */

/* Start Kwitansi Diskon */
$route['kwitansi-diskon'] = 't_kwitansi/t_kwitansi_diskon/add';
$route['kwitansi-diskon-tambah'] = 't_kwitansi/t_kwitansi_diskon/add';
$route['kwitansi-diskon-edit-(:num)'] = 't_kwitansi/t_kwitansi_diskon/edit/$1';
$route['kwitansi-diskon-detail-(:num)'] = 't_kwitansi/t_kwitansi_diskon/detail/$1';
$route['kwitansi-diskon-delete-(:num)'] = 't_kwitansi/t_kwitansi_diskon/delete/$1';
$route['kwitansi-diskon-save'] = 't_kwitansi/t_kwitansi_diskon/save';
$route['kwitansi-diskon-page'] = 't_kwitansi/t_kwitansi_diskon/index';
$route['kwitansi-diskon-page/(:any)'] = 't_kwitansi/t_kwitansi_diskon/index/$1';
$route['kwitansi-diskon-pdf'] = 't_kwitansi/t_kwitansi_diskon/print_pdf';
$route['kwitansi-diskon-pdf/(:any)'] = 't_kwitansi/t_kwitansi_diskon/print_pdf/$1';
$route['kwitansi-diskon-excel'] = 't_kwitansi/t_kwitansi_diskon/print_excel';
$route['kwitansi-diskon-excel/(:any)'] = 't_kwitansi/t_kwitansi_diskon/print_excel/$1';
/* Kwitansi Diskon */

/* Start PDI */
$route['pdi'] = 't_pdi/t_pdi/add';
$route['pdi-tambah'] = 't_pdi/t_pdi/add';
$route['pdi-edit-(:num)'] = 't_pdi/t_pdi/edit/$1';
$route['pdi-detail-(:num)'] = 't_pdi/t_pdi/detail/$1';
$route['pdi-delete-(:num)'] = 't_pdi/t_pdi/delete/$1';
$route['pdi-save'] = 't_pdi/t_pdi/save';
$route['pdi-page'] = 't_pdi/t_pdi/index';
$route['pdi-page/(:any)'] = 't_pdi/t_pdi/index/$1';
$route['pdi-pdf'] = 't_pdi/t_pdi/print_pdf';
$route['pdi-pdf/(:any)'] = 't_pdi/t_pdi/print_pdf/$1';
$route['pdi-excel'] = 't_pdi/t_pdi/print_excel';
$route['pdi-excel/(:any)'] = 't_pdi/t_pdi/print_excel/$1';
/* End PDI */

/* Start STNK BPKB */
$route['stnk-bpkb'] = 't_stnk_bpkb/add';
$route['stnk-bpkb-tambah'] = 't_stnk_bpkb/add';
$route['stnk-bpkb-edit-(:num)'] = 't_stnk_bpkb/edit/$1';
$route['stnk-bpkb-detail-(:num)'] = 't_stnk_bpkb/detail/$1';
$route['stnk-bpkb-delete-(:num)'] = 't_stnk_bpkb/delete/$1';
$route['stnk-bpkb-save'] = 't_stnk_bpkb/save';
$route['stnk-bpkb-page'] = 't_stnk_bpkb/index';
$route['stnk-bpkb-page/(:any)'] = 't_stnk_bpkb/index/$1';
$route['stnk-bpkb-pdf'] = 't_stnk_bpkb/print_pdf';
$route['stnk-bpkb-pdf/(:any)'] = 't_stnk_bpkb/t_stnk_bpkb/$1';
$route['stnk-bpkb-excel'] = 't_stnk_bpkb/print_excel';
$route['stnk-bpkb-excel/(:any)'] = 't_stnk_bpkb/print_excel/$1';
/* End STNK BPKB */

/* Start Void */
$route['void'] = 't_void/add';
$route['void-tambah'] = 't_void/add';
$route['void-edit-(:num)'] = 't_void/edit/$1';
$route['void-detail-(:num)'] = 't_void/detail/$1';
$route['void-delete-(:num)'] = 't_void/delete/$1';
$route['void-save'] = 't_void/save';
$route['void-page'] = 't_void/index';
$route['void-page/(:any)'] = 't_void/index/$1';
$route['void-pdf'] = 't_void/print_pdf';
$route['void-pdf/(:any)'] = 't_void/print_pdf/$1';
$route['void-excel'] = 't_void/print_excel';
$route['void-excel/(:any)'] = 't_void/print_excel/$1';
/* End Void */

/* Start Surat Jalan */
$route['surat-jalan'] = 't_surat_jalan/add';
$route['surat-jalan-tambah'] = 't_surat_jalan/add';
$route['surat-jalan-edit-(:num)'] = 't_surat_jalan/edit/$1';
$route['surat-jalan-detail-(:num)'] = 't_surat_jalan/detail/$1';
$route['surat-jalan-delete-(:num)'] = 't_surat_jalan/delete/$1';
$route['surat-jalan-save'] = 't_surat_jalan/save';
$route['surat-jalan-page'] = 't_surat_jalan/index';
$route['surat-jalan-page/(:any)'] = 't_surat_jalan/index/$1';
$route['surat-jalan-pdf'] = 't_surat_jalan/print_pdf';
$route['surat-jalan-pdf/(:any)'] = 't_surat_jalan/print_pdf/$1';
$route['surat-jalan-excel'] = 't_surat_jalan/print_excel';
$route['surat-jalan-excel/(:any)'] = 't_surat_jalan/print_excel/$1';
/* End Surat Jalan */

$route['import-penerimaan-motor'] = 'motor_terima';
$route['import-penerimaan-motor-tambah'] = 'motor_terima/add';
$route['import-penerimaan-motor-edit-(:num)'] = 'motor_terima/edit/$1';
$route['import-penerimaan-motor-detail-(:num)'] = 'motor_terima/detail/$1';
$route['import-penerimaan-motor-delete-(:num)'] = 'motor_terima/delete/$1';
$route['import-penerimaan-motor-save'] = 'motor_terima/save';
$route['import-penerimaan-motor-page'] = 'motor_terima/index';
$route['import-penerimaan-motor-page/(:any)'] = 'motor_terima/index/$1';
$route['import-penerimaan-motor-pdf'] = 'motor_terima/print_pdf';
$route['import-penerimaan-motor-pdf/(:any)'] = 'motor_terima/print_pdf/$1';
$route['import-penerimaan-motor-excel'] = 'motor_terima/print_excel';
$route['import-penerimaan-motor-excel/(:any)'] = 'motor_terima/print_excel/$1';
$route['import-penerimaan-motor-upload'] = 'motor_terima/upload_excel';
$route['motor-terima-template-excel'] = 'motor_terima/template_excel';

$route['input-penerimaan-aksesoris'] = 'aksesoris_terima';
$route['input-penerimaan-aksesoris-tambah'] = 'aksesoris_terima/add';
$route['input-penerimaan-aksesoris-edit-(:num)'] = 'aksesoris_terima/edit/$1';
$route['input-penerimaan-aksesoris-detail-(:num)'] = 'aksesoris_terima/detail/$1';
$route['input-penerimaan-aksesoris-delete-(:num)'] = 'aksesoris_terima/delete/$1';
$route['input-penerimaan-aksesoris-save'] = 'aksesoris_terima/save';
$route['input-penerimaan-aksesoris-page'] = 'aksesoris_terima/index';
$route['input-penerimaan-aksesoris-page/(:any)'] = 'aksesoris_terima/index/$1';
$route['input-penerimaan-aksesoris-pdf'] = 'aksesoris_terima/print_pdf';
$route['input-penerimaan-aksesoris-pdf/(:any)'] = 'aksesoris_terima/print_pdf/$1';
$route['input-penerimaan-aksesoris-excel'] = 'aksesoris_terima/print_excel';
$route['input-penerimaan-aksesoris-excel/(:any)'] = 'aksesoris_terima/print_excel/$1';

$route['motor-keluar'] = 'motor_keluar';
$route['motor-keluar-tambah'] = 'motor_keluar/add';
$route['motor-keluar-edit-(:num)'] = 'motor_keluar/edit/$1';
$route['motor-keluar-detail-(:num)'] = 'motor_keluar/detail/$1';
$route['motor-keluar-delete-(:num)'] = 'motor_keluar/delete/$1';
$route['motor-keluar-save'] = 'motor_keluar/save';
$route['motor-keluar-page'] = 'motor_keluar/index';
$route['motor-keluar-page/(:any)'] = 'motor_keluar/index/$1';
$route['motor-keluar-pdf'] = 'motor_keluar/print_pdf';
$route['motor-keluar-pdf/(:any)'] = 'motor_keluar/print_pdf/$1';
$route['motor-keluar-excel'] = 'motor_keluar/print_excel';
$route['motor-keluar-excel/(:any)'] = 'motor_keluar/print_excel/$1';


$route['stock'] = 'stock';
$route['stock-pdf'] = 'stock/print_pdf';
$route['stock-pdf-detail'] = 'stock/print_pdf_detail';
$route['stock-pdf/(:any)'] = 'stock/print_pdf/$1';
$route['stock-excel'] = 'stock/print_excel';
$route['stock-excel-detail'] = 'stock/print_excel_detail';
$route['stock-excel/(:any)'] = 'stock/print_excel/$1';

$route['kwitansi-dp-add'] = 't_kwitansi/add';
