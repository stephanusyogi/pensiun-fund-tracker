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
|	https://codeigniter.com/userguide3/general/routing.html
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

$route['login'] = 'auth/login';
$route['login-verification'] = 'auth/login_verication';
$route['register'] = 'auth/register';
$route['register-verification'] = 'auth/register_verification';
$route['email-verification'] = 'auth/email_verification';
$route['send-email-verification'] = 'auth/send_email_verification';
$route['change-password'] = 'auth/change_password';
$route['logout'] = 'auth/logout';

$route['profil/(:any)'] = 'profil/index/$1';
$route['profil-update/(:any)'] = 'profil/update_biodata/$1';

$route['profil/update-tracking-pengguna/(:any)'] = 'profil/update_tracking_pengguna/$1';
$route['update-tracking-pengguna'] = 'profil/update_tracking_pengguna_execute';

$route['profil/setting-portofolio-ppip/(:any)'] = 'profil/setting_portofolio_ppip/$1';
$route['profil/ppip-by-id/(:any)'] = 'profil/setting_portofolio_ppip_by_id/$1';
$route['setting-portofolio-ppip'] = 'profil/setting_portofolio_ppip_execute';

$route['profil/setting-nilai-asumsi/(:any)'] = 'profil/setting_nilai_asumsi/$1';
$route['setting-nilai-asumsi'] = 'profil/setting_nilai_asumsi_execute';

$route['profil/setting-portofolio-personal/(:any)'] = 'profil/setting_portofolio_personal_pasar_keuangan/$1';
$route['profil/personal-by-id/(:any)'] = 'profil/setting_portofolio_personal_pasar_keuangan_by_id/$1';
$route['setting-portofolio-personal'] = 'profil/setting_portofolio_personal_pasar_keuangan_execute';

$route['profil/setting-treatment-pembayaran-setelah-pensiun/(:any)'] = 'profil/setting_treatment_pembayaran_setelah_pensiun/$1';
$route['setting-treatment-pembayaran-setelah-pensiun'] = 'profil/setting_treatment_pembayaran_setelah_pensiun_execute';

$route['profil/ubah-password/(:any)'] = 'profil/ubah_password/$1';
$route['ubah-password/(:any)'] = 'profil/ubah_password_execute/$1';

$route['kuisioner'] = 'kuisioner';
$route['input-kuisioner'] = 'kuisioner/add';