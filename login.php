<?php

session_destroy();
include "connection.php";
//Code if cookie is set 



function xss($entry) {
    $entry= trim($entry);
    $entry = stripslashes($entry);
    $entry = htmlspecialchars($entry);
    return $entry;
  }
  $username=xss($_POST['username']);
  $password=xss($_POST['password']);
  
if($_SERVER['REQUEST_METHOD']=="POST"){

$selection = " SELECT user_name, pass FROM user WHERE user_name= '$username' AND pass='$password'";
//echo $selection;
$numofrows = mysqli_num_rows(mysqli_query($mysqli,$selection));

$selection = " SELECT validation FROM user WHERE user_name= '$username' ";
$done = mysqli_query($mysqli,$selection);
$row =$done->fetch_assoc();
$col1 =$row['validation'];



if($numofrows==1){
    session_start();
    echo "You are logged in";
    $_SESSION['username']= $username;
//code for setcookie
if(isset($_POST['remember'])){
    setcookie('username',$username,time()+60*60*24*7);
    setcookie('password',$password,time()+60*60*24*7);
}
   
    if($col1==0){
    header('location:update2.php');
    }
    else{
        header('location:chat.php');
    }
}
else{
    echo '<script>
    window.alert("Wrong username or password");
    </script>';
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <h1>
        Welcome To Chatbook!
    </h1>
    <div id="container">
        <form id="form2" action="" method="post">
            <div id="container2">
                <table id="table">

                    <tr>
                        <div>

                            <td><label for="username">Username</label></td>
                            <td><input type="text" id="username" name="username">

                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label for="password">Password</label>
                            </td>
                            <td>
                                <input type="password" id="password" name="password">


                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <button type="submit" form="form2" value="Submit" id="button" style>Log in</button>
                            </td>
                        </div>
                        <div>
                            <td>
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">Remember Me<label><br>
                            </td>
                        </div>

                </table>
        </form>
        </table>
    </div>
    <div id="reges">
        <p>
            Don't have a account. <a href="registration.php">Sign in</a>
        </p>


    </div>



</body>

</html>
<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    $email1=$_COOKIE['username'];
    $password1=$_COOKIE['password'];
    echo "<script>document.getElementById(\"username\").value='$email1';
    document.getElementById(\"password\").value='$password1';
    document.getElementById(\"button\").click();
    
    </script>";
    }

?>