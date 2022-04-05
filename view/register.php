<?php
if (empty($_GET['firstname'])) {
    include("view/register_form.php");
}
else{
    $firstName = htmlspecialchars($_GET['firstname']); //Get username if applicable
    if ($firstName != NULL || $firstName != FALSE ) {
        $_SESSION['userID'] = $firstName; 
    }
    <?php include('view/header.php');

if(!isset($_SESSION['userID'])){?>
<form id="myForm" action="." method="GET">
                 <label for='firstname'>Enter your First Name:</label>
                 <input type="text" id="firstname" name="firstname" required> <br>
                 <input type="hidden" name="action" value="register">
                 <button type="submit" name="submit" id="submit" class="add_button">Register</button>
             </form> 
<?php } else {
    $userAction = "Registering";
    include('thanks.php');
 }
 include('footer.php');?>
    <?php
    }

?>