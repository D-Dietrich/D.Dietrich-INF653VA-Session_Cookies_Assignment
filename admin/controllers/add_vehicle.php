<?php $make_id = filter_input(INPUT_POST, 'makeID', FILTER_VALIDATE_INT);
    $type_id = filter_input(INPUT_POST, 'typeID', FILTER_VALIDATE_INT);
    $class_id = filter_input(INPUT_POST, 'classID', FILTER_VALIDATE_INT);
    $year = filter_input(INPUT_POST, 'year', FILTER_VALIDATE_INT);
    $model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING); 
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
    if ($make_id == NULL || $make_id == FALSE || $type_id == NULL || $type_id == FALSE || $class_id == NULL || $class_id == FALSE || $year == NULL || $year == FALSE || $model == NULL || $model == FALSE || $price == NULL || $price == FALSE) 
        { $error = "Invalid data. Check all fields and try again."; 
            include('../view/error.php');
    } 
    else {
        add_vehicle($class_id, $make_id, $type_id, $model, $price, $year); 
        header("Location: .?");
    } 
    ?>