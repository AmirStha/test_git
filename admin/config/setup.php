<?php 
//Setup File

error_reporting(0);

# Database Connections here

include('../config/connection.php');

#constants:

DEFINE('D_TEMPLATE','template');

# functions:
include('Functions/data.php');
include('Functions/template.php');
include('config/query.php');
include('Functions/sandbox.php');


#site setup

$debug = data_settings_value($dbc, 'debug-status');

$site_title = "Sublime";
//$page_title = "Home Page";

if(isset($_GET['page'])){
    $pageid = $_GET['page']; //get if from the URl
}
else{
   $pageid = 1; //set default page to load
}

# page setupS
$page = data_page($dbc, $pageid);


if(isset($_GET['id'])){
                            $opened = data_page($dbc, $_GET['id']);
                        }

# user setup
$user = data_user($dbc, $_SESSION['username']);


?>