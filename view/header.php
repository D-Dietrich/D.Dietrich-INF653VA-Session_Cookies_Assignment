<?php require("model/database.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zippy Used Autos - D. Dietrich</title>
    <link rel="stylesheet" href="view/main.css">
</head>
<body>
    <main>
    <section id="sheet">
    <header>
        
    <?php if ($action != 'register' && $action != 'logout')
        if (!isset($_SESSION['userID'])) {?>
                  <div>  <a href="index.php?action=register">Register</a></div>
        <?php } else {?>
            <div> <?php echo "Welcome ", $_SESSION['userID'], "!";?>
             (<a href="index.php?action=logout">Sign Out</a>)</div>
            <?php }?>
        
            <h1> Zippy Used Autos
                
            </h1>
        </header>