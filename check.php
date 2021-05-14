<?php
session_start();

include "connection.php";

$username=$_POST['username'];
$password=$_POST['password'];
//print_r($_POST);
//echo $username;
//echo $password;

$selection = " SELECT user_name, pass FROM user WHERE user_name= '$username' AND pass='$password'";

$numofrows = mysqli_num_rows(mysqli_query($mysqli,$selection));
echo $numofrows;

if($numofrows==1){
    //echo "You are logged in";
    $_SESSION['username']= $username;
    header('location:chat.php');

}
else{
    echo "Wrong username or password";
}

?>