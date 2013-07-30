<?php

//Connection to database in local server
const MY_DSN = 'mysql:host=localhost;port=8888;dbname=ssl_cms'; //Database is empty(no table).
const MY_USER = 'root';
const MY_PASS = 'root';

//Calling Classes
require_once 'load.php';
require_once 'model.php';
require_once 'skin.php';
require_once 'control.php';

$app = new Control(); 
$page = new Skin('simple'); //pass skin as string

//build html page
$page->title($app->title);
$page->fill($app->output);
$page->show(); 

?>