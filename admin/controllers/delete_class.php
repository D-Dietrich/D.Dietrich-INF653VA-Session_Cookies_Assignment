<?php
$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
if ($id == NULL || $id == FALSE ) 
    { $error = "Missing or incorrect Class ID."; 
    include('../view/error.php');
}
else {
    delete_class($id); 
    header("Location: .?action=edit_classes");
}
?>