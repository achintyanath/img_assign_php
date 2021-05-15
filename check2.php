<?php

include "connection.php";
$username=$_POST['username'];
//print_r($_POST);
$selection = " SELECT user_name FROM user WHERE user_name= '$username'";

$numofrows = mysqli_num_rows(mysqli_query($mysqli,$selection));
//echo $numofrows;

if($numofrows==1){
    echo "no";
   // $_SESSION['username']= $username;
   // header('location:chat.php');

}
else{
    echo "yes";
}
?>
