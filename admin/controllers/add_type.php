<?php
$typeName = filter_input(INPUT_POST, "newType", FILTER_SANITIZE_STRING);

if ($typeName == NULL || $typeName == FALSE) 
{ $error = "Invalid data. Check all fields and try again."; 
    include('../view/error.php');
} 
else {
    add_type($typeName); 
    header("Location: .?action=edit_types");
}
?>
