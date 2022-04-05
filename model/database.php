<?php
$dsn = 'mysql:host=m7az7525jg6ygibs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com; dbname=eknoe037gii7jxcf';
$username = 'lodp1f8ntou05hwn';
$p = 'ijd938mkqhapyhtb';

try {
    $db =new PDO($dsn, $username, $p);


} catch (PDOException $e) {
    $error_message = 'Database Error: ';
    $error_message .= $e->getMessage();
    echo $error_message;
    exit();
} ?>