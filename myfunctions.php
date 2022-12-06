<?php
session_start();
function redirect($url, $status)
{
    $_SESSION['status'] = $status;
    
    header('location: '.$url); 
    exit();
}

include ('dbcon.php');

function getAll($table){
    global $con;
    $query = "select * from $table";
    return $query_run = mysqli_query($con, $query);
}


function getByID($table, $id){
    global $con;
    $query = "Select * from $table where id='$id'";
    return $query_run = mysqli_query($con, $query);
}


?>