<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}

include "connection.php";
function xss($entry) {
  $entry= trim($entry);
  $entry = stripslashes($entry);
  $entry = htmlspecialchars($entry);
  return $entry;
}
//print_r($_POST);
$username1=$_SESSION['username'];
foreach($_POST as $key=>$v){
     $key;
    $v=xss($v);
   
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