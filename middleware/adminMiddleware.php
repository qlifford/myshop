<?php
session_start();
 include('../myfunctions.php');

if(isset($_SESSION['auth'])){

    if($_SESSION['role_as'] != 1)
    {
        redirect(" ../index.php", "Unauthorized User!");
       
    }


}else{
    redirect(" ../login.php", "Unauthorized Access!");

}
?>                
