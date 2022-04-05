<?php
$lifetime = 60 * 60 * 24 * 14;
session_set_cookie_params($lifetime, '/');
session_start();


require('model/database.php'); 
require('model/classes.php'); 
require('model/makes.php'); 
require('model/types.php'); 
require('model/vehicles.php'); 

$action = filter_input(INPUT_POST, 'action'); 
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action'); 
    if ($action == NULL) {
        $action = 'list_vehicles'; } 
} 

if ($action == 'list_vehicles')
{
    include('controllers/list_vehicles.php');
} 
else if ($action == 'register'){
    include('view/register.php');

}
else if ($action == 'logout'){
    include('view/logout.php');

}
?>