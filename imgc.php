<?php
session_start();
$username1=$_SESSION['username'];
//echo $username1;
include "connection.php";


$selection = "SELECT image FROM user WHERE user_name = '$username1'";
    $result =mysqli_query($mysqli,$selection);
    $row =$result->fetch_assoc();

        $imageURL = $row['image'];
       // echo $imageURL;
    
?>