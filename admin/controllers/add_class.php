<?php
$className = filter_input(INPUT_POST, "newClass", FILTER_SANITIZE_STRING);

if ($className == NULL || $className == FALSE) 
{ $error = "Invalid data. Check all fields and try again."; 
    include('../view/error.php');
} 
else {
    add_class($className); 
    header("Location: .?action=edit_classes");
}
?>