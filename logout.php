<?php

session_start();
if (isset($_SESSION['auth'])) 
{
   unset($_SESSION['auth']);
   unset($_SESSION['auth_user']);

   $_SESSION['status'] = "Logged out!";
   $_SESSION['status_code'] = "info";
}
header('location: index.php');

?>