<?php
$vID = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    if ($vID == NULL || $vID == FALSE) 
        { $error = "Missing or incorrect Vehicle ID."; 
        include('../view/error.php');
    }
    else {
        delete_vehicle($vID); 
        header("Location: .?");
    }
    ?>