<?php 
session_start();

session_destroy();
setcookie('username',"",time()-60*60);
setcookie('password',"",time()-60*60);


header('location:login.php');
?>