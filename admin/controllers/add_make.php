<?php
$makeName = filter_input(INPUT_POST, "newMake", FILTER_SANITIZE_STRING);

    if ($makeName == NULL || $makeName == FALSE) 
    { $error = "Invalid data. Check all fields and try again."; 
        include('../view/error.php');
    } 
    else {
        add_make($makeName); 
        header("Location: .?action=edit_makes");
    }
    ?>