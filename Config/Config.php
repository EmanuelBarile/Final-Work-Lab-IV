<?php namespace Config;

define("ROOT", dirname(__DIR__) . "/");
//Path to your project's root folder
define("FRONT_ROOT", "Final_Work");
define("VIEWS_PATH", "Views/");
define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "css/");
define("JS_PATH", FRONT_ROOT.VIEWS_PATH . "js/");
define ('API_KEY', '4f3bceed-50ba-4461-a910-518598664c08');

define ('API_URL_COMPANIES', 'https://utn-students-api.herokuapp.com/api/JobPosition');
define ('API_URL_CAREERS', 'https://utn-students-api.herokuapp.com/api/Career');
define ('API_URL_STUDENTS', 'https://utn-students-api.herokuapp.com/api/Student');

?>




