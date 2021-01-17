<?php


// C:\xampp\htdocs\gallery

// directory separator - pravi kose crte u putanji bilo da je s leva ili s desna (Win/Mac)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// definisemo putanju do naseg sajta
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'gallery');

// definisemo putanju do includes foldera u adminu
defined("INCLUDES_PATH") ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'admin'.DS.'includes');




// require_once je bolje od include 

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("session.php");


?>