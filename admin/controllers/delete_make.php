<?php
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if ($id == NULL || $id == FALSE ) 
    { $error = "Missing or incorrect Make ID."; 
    include('../view/error.php');
}
else {
    delete_make($id); 
    header("Location: .?action=edit_makes");
}
?>