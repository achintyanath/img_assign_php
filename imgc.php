<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

$username1=$_SESSION['username'];
//echo $username1;
include "connection.php";


$selection = "SELECT image FROM user WHERE user_name = '$username1'";
    $result =mysqli_query($mysqli,$selection);
    $row =$result->fetch_assoc();

        $imageURL = $row['image'];
       // echo $imageURL;
    
?>