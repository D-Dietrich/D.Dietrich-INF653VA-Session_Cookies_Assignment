<?php
require('../model/database.php'); 
require('../model/classes.php'); 
require('../model/makes.php'); 
require('../model/types.php'); 
require('../model/vehicles.php'); 

$action = filter_input(INPUT_POST, 'action'); 
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action'); 
    if ($action == NULL) {
        $action = 'list_vehicles'; } 
} 
/* Vehicle Editing Section */
if ($action == 'list_vehicles')
{
    include('controllers/list_vehicles.php');
} 
else if ($action == 'delete_vehicle') { 
    include('controllers/delete_vehicle.php');
} 
else if ($action == 'show_add_vehicle_form') { 
    include('controllers/show_add_vehicle_form.php');
} 
else if ($action == 'add_vehicle') {
    include('controllers/add_vehicle.php');
}

/* Make Editing Section */
else if ($action == 'edit_makes') { 
    include('controllers/list_makes.php');
}
else if ($action == 'delete_make') {
    include('controllers/delete_make.php');
}
else if ($action == 'add_make') {
    include('controllers/add_make.php');
}

 /* Type Editing Section */
else if ($action == 'edit_types') { 
    include('controllers/list_types.php');
}
else if ($action == 'delete_type') {
    include('controllers/delete_type.php');
}
else if ($action == 'add_type') {
    include('controllers/add_type.php');
}

/* Class Editing Section */
else if ($action == 'edit_classes') { 
    include('controllers/list_classes.php');
}
else if ($action == 'delete_class') {
    include('controllers/delete_class.php');
}
else if ($action == 'add_class') {
    include('controllers/add_class.php');

    }
?>