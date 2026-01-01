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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['rachit-saraf123'] = 'welcome/rachit_saraf';
$route['welcome_rachit'] = 'welcome/rachit';
$route['welcome_saraf'] = 'welcome/saraf';
$route['website_home'] = 'welcome/index';
$route['about'] = 'welcome/about';
$route['doctors'] = 'welcome/doctors';
$route['doctor-mohit'] = 'welcome/doctor_mohit';
$route['appointment'] = 'welcome/appointment';
$route['404_override'] = 'welcome/error404';
$route['login'] = 'welcome/login';
$route['register'] = 'welcome/register';
$route['gallery']      = 'welcome/gallery';     // gallery.php
$route['gallery2']     = 'welcome/gallery2';    // gallery2.php
$route['gallery3']     = 'welcome/gallery3';    // gallery3.php
$route['contact_us'] = 'welcome/contact';
$route['about_us'] = 'welcome/about_us';
$route['dr-mathias-fobi'] = 'welcome/dr_mathias_fobi';
$route['dr-manoel-galvao-neto'] = 'welcome/dr_manoel_galvao';
$route['sleeve-gastrectomy'] = 'welcome/sleeve_gastrectomy';
$route['banded-gastric-bypass'] = 'welcome/banded_gastric_bypass';
$route['roux-en-y-gastric-bypass'] = 'welcome/roux_en_y_gastric_bypass';
$route['duodenal-jejunal-bypass'] = 'welcome/duodenal_jejunal_bypass';
$route['mini-gastric-bypass'] = 'welcome/mini_gastric_bypass';
$route['obesity-and-covid19'] = 'welcome/obesity_covid';
$route['single-incision-lap-sleeve'] = 'welcome/single_incision_lap_sleeve';
$route['reconstructive-surgery'] = 'welcome/reconstructive_surgery';
$route['contact-us'] = 'welcome/contact_uss';
$route['why-us'] = 'welcome/why_us';
$route['training-center'] = 'welcome/training_center';
$route['services/bariatric-surgery'] = 'welcome/bariatric_surgery';
$route['services/bariatric-endoscopy'] = 'welcome/bariatric_endoscopy';
$route['services/reconstructive-surgery'] = 'welcome/reconstructive_surgery_page';
$route['allurion'] = 'welcome/allurion';
$route['medical-weight-loss-program'] = 'welcome/medical_weight_loss_program';
$route['bmi-calculator'] = 'welcome/bmi_calculator';
$route['our-institutes'] = 'welcome/our_institutes';
$route['dr-mahak-bhandari'] = 'welcome/dr_mahak_bhandari';
$route['dipesh-pachani'] = 'welcome/dipesh_pachani';
$route['santosh-singh'] = 'welcome/santosh_singh';
$route['amit-lamba'] = 'welcome/amit_lamba';
$route['mohammad-saleem'] = 'welcome/mohammad_saleem';
$route['blog'] = 'welcome/blog';
$route['testimonials'] = 'welcome/testimonials';
$route['meet-our-doctors'] = 'welcome/meet_our_doctors';
$route['services/diabetes-surgery'] = 'welcome/diabetes_surgery';
$route['services/bariatric-fellowship'] = 'welcome/bariatric_fellowship';
$route['delhi'] = 'welcome/delhi';

$route['blog'] = 'blog/index';
$route['blog/(:any)'] = 'blog/view/$1';
















