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

//This route indicates which controller class should be loaded. In this case is the 
//"welcome" class.
$route['default_controller'] = "welcome";

//This route indicates which controller class should be loaded if the requested controller
//is not found.
$route['404_override'] = '';

//A URL containing the word "sleep" in the first segment will be remapped to he "first" class, 
//and the "zzz" method.
$route['sleep'] = 'first/zzz';

//A URL with "lock" as the first segment, and anything in the second and third will be remapped 
//to the "welcome" class and the "shucks" method.
$route['lock/(:any)/(:any)'] = 'welcome/shucks';

//A URL with "show" as the first segment, and a number in the second will be remapped to the 
//"first" class and the "gimme" method passing in the match as a variable to the function.
$route['show/(:num)'] = 'first/gimme/$1';

//A URL containing the word "dunno" in the first segment will be remapped to the "guess" class.
$route['dunno'] = 'guess';

//A regular expression route will be remapped to the "bingo" class.
$route['([a-zA-Z]{4})/bingo'] = 'bingo';

//A regular expression route will be remapped to the "bingo" class and the "wisdom" method. 
$route['(comp\d{4})/(.*)'] = 'bingo/wisdom';

/* End of file routes.php */
/* Location: ./application/config/routes.php */