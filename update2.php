<?php
session_start();


include "connection.php";
//print_r($_POST);
$username1=$_SESSION['username'];
$validation=true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
foreach($_POST as $key=>$v){
    //echo $key;
    //echo $v;
   
    $selection = " UPDATE user SET $key='$v' WHERE user_name= '$username1' ";
    $done = mysqli_query($mysqli,$selection);
    
    
  // echo " UPDATE user SET $key=\"$v\" WHERE $key= \"$_SESSION[\"username\"]\""
}

$selection = " UPDATE user SET validation='$validation' WHERE user_name= '$username1' ";
$done = mysqli_query($mysqli,$selection);
header('location:chat.php');
/*
$username=$_POST['username'];
//print_r($_POST);


$numofrows = mysqli_num_rows(mysqli_query($mysqli,$selection));
//echo $numofrows;





*/}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update2.css" type="text/css">
    <title>Document</title>
</head>

<body>
    <div id="container">

        <div id="heading">

            <h1 id="heading">Welcome to Chatbook!</h1>

        </div>
        <div id="message"><p>You can update your profile </div>
        <div id="formdiv">
            <form id="form3" action="" method="post">
                <table>
                    <tr>
                        <div>

                            <td><label for="college">College</label></td>
                            <td><input type="text" id="college" name="college">

                            </td>
                            <td><span id ="errormessage" style="display:none">The college name must begin with a capital letter and cannot be empty</span></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label for="school">School</label>
                            </td>
                            <td>
                                <input type="text" id="school" name="school">


                            </td>
                            <td><span id ="errormessage2" style="display:none">The school name must begin with a capital letter and cannot be empty</span></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label for="birth">Birth Place</label>
                            </td>
                            <td>
                                <input type="text" id="birth" name="birth">


                            </td>
                            <td><span id ="errormessage3" style="display:none">The bithplace  must begin with a capital letter and cannot be empty</span></td>
                        </div>
                    </tr>
                    <tr>
                        <div>

                            <td><label for="work">Organisation</label></td>
                            <td><input type="text" id="work" name="work">

                            </td>
                            <td><span id ="errormessage4" style="display:none">The Organisation must begin with a capital letter and cannot be empty</span></td>
                        </div>
                    </tr>
                    <tr>
                        <div>

                            <td><label for="hobby">Hobbies</label></td>
                            <td><input type="text" id="hobby" name="hobby">

                            </td>
                            <td><span id ="errormessage5" style="display:none">The name of hoobies must begin with a capital letter and cannot be empty</span></td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <button type="submit" form="form3" value="Submit" id="button" style>Update</button>
                            </td>
                        </div>











                </table>
            </form>

        </div>
    </div>
    <script src="update2.js"></script>
</body>

</html>