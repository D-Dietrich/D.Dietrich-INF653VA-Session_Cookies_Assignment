<?php
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if ($id == NULL || $id == FALSE ) 
    { $error = "Missing or incorrect Type ID."; 
    include('../view/error.php');
}
else {
    delete_type($id); 
    header("Location: .?action=edit_types");
}
?>