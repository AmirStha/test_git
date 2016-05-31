<?php 
//Setup File

# Database Connections here

include('config/connection.php');

#constants:

DEFINE('D_TEMPLATE','template');

# functions:
include('Functions/data.php');
include('Functions/template.php');
include('Functions/home_element.php');

#site setup

$debug = data_settings_value($dbc, 'debug-status');

$site_title = "Sublime";
//$page_title = "Home Page";

if(isset($_GET['page'])){
    $pageid = $_GET['page']; //get if from the URl
}
else{
   $pageid = 'home'; //set default page to load
}

# page setupS

$page = data_page($dbc, $pageid);


?>