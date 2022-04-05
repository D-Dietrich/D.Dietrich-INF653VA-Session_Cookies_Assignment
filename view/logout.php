<?php
    include('view/header.php');
    $firstName = $_SESSION['userID']; //Get username if applicable
    unset($_SESSION['userID']);
    $_SESSION = array();
    session_destroy();
    $name = session_name();
    $expire = strtotime('-1 year'); $params = session_get_cookie_params();
    $path = $params['path']; $domain = $params['domain']; $secure = $params['secure']; $httponly = $params['httponly'];
    setcookie($name, '', $expire, $path, $domain, $secure, $httponly);

    if ($firstName == NULL || $firstName == FALSE ) {
        $firstName = "User";
    }
    $userAction = "Signing Out";
    include("view/thanks.php");
    
    include('view/footer.php');
?>