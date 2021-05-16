<?php
session_start();


include "connection.php";
$college_err = "";
$school_err = "";
$birth_err = "";
$work_err = "";
$hobby_err = "";


$username1=$_SESSION['username'];




if ($_SERVER["REQUEST_METHOD"] == "POST"){

$college=$_POST['college'];
$school=$_POST['school'];
$birth=$_POST['birth'];
$work=$_POST['work'];
$hobby=$_POST['hobby'];
$flag1 = false;
$flag2 = false;
$flag3 = false;
$flag4 = false;
$flag5 = false;

if (empty($college)) {
    $college_err = "<p>Required Feild</p>";
} else {
    if (!preg_match("/^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/", $college)) {
        $college_err = "<p> The college name must begin with a capital letter.</p>";
    } else {
        $flag1 = true;
    }
}

if (empty($school)) {
    $school_err = "<p>Required Feild</p>";
} else {
    if (!preg_match("/^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/", $school)) {
        $school_err = "<p> The school name must begin with a capital letter.</p>";
    } else {
        $flag2 = true;
    }
}


if (empty($birth)) {
    $birth_err = "<p>Required Feild</p>";
} else {
    if (!preg_match("/^[A-Z][a-zA-Z ]*[a-zA-Z]$/", $birth)) {
        $birth_err = "<p> The bithplace  must begin with a capital letter.</p>";
    } else {
        $flag3 = true;
    }
}


if (empty($work)) {
    $work_err = "<p>Required Feild</p>";
} else {
    if (!preg_match("/^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/", $work)) {
        $work_err = "<p> The organisation must begin with a capital letter</p>";
    } else {
        $flag4 = true;
    }
}

if (empty($hobby)) {
    $hobby_err = "<p>Required Feild</p>";
} else {
    if (!preg_match("/^[A-Z][a-zA-Z0-9\.\' \!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\,]*[a-zA-Z]$/", $hobby)) {
        $hobby_err = "<p>The name of hoobies must begin with a capital letter</p>";
    } else {
        $flag5 = true;
    }
}





if($flag1&&$flag2&&$flag3&&$flag4&&$flag5){
foreach($_POST as $key=>$v){
    
   
    $selection = " UPDATE user SET $key='$v' WHERE user_name= '$username1' ";
    $done = mysqli_query($mysqli,$selection);
    
    

}
$validation=true;
$selection = " UPDATE user SET validation='$validation' WHERE user_name= '$username1' ";
$done = mysqli_query($mysqli,$selection);
header('location:chat.php');
}
}
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
        <div id="message">
            <p>You can update your profile
        </div>
        <div id="formdiv">
            <form id="form3" action="" method="post">
                <table>
                    <tr>
                        <div>

                            <td><label for="college">College</label></td>
                            <td><input type="text" id="college" name="college">


                                <span id="errormessage" style="display:none">The college name must begin with a capital
                                    letter and cannot be empty</span>
                                <?php echo $college_err ?>
                            </td>


                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label for="school">School</label>
                            </td>
                            <td>
                                <input type="text" id="school" name="school">



                                <span id="errormessage2" style="display:none">The school name must begin with a capital
                                    letter and cannot be empty</span>
                                <?php echo $school_err ?>
                            </td>

                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label for="birth">Birth Place</label>
                            </td>
                            <td>
                                <input type="text" id="birth" name="birth">



                                <span id="errormessage3" style="display:none">The bithplace must begin with a capital
                                    letter and cannot be empty</span>
                                <?php echo $birth_err ?>
                            </td>

                        </div>
                    </tr>
                    <tr>
                        <div>

                            <td><label for="work">Organisation</label></td>
                            <td><input type="text" id="work" name="work">

                                <span id="errormessage4" style="display:none">The organisation must begin with a capital
                                    letter and cannot be empty</span>
                                <?php echo $work_err ?>
                            </td>

                        </div>
                    </tr>
                    <tr>
                        <div>

                            <td><label for="hobby">Hobbies</label></td>
                            <td><input type="text" id="hobby" name="hobby">

                                <span id="errormessage5" style="display:none">The name of hoobies must begin with a
                                    capital letter and cannot be empty</span>
                                <?php echo $hobby_err ?>
                            </td>

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