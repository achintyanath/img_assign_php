<?php
session_start();
include "connection.php";
//print_r($_POST);
$username1=$_SESSION['username'];
foreach($_POST as $key=>$v){
    echo $key;
    echo $v;
   
    $selection = " UPDATE user SET $key='$v' WHERE user_name= '$username1' ";
    $done = mysqli_query($mysqli,$selection);
    header('location:update.php');
  // echo " UPDATE user SET $key=\"$v\" WHERE $key= \"$_SESSION[\"username\"]\""
}
/*
$username=$_POST['username'];
//print_r($_POST);


$numofrows = mysqli_num_rows(mysqli_query($mysqli,$selection));
//echo $numofrows;





*/
?>