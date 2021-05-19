<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
function xss($entry)
{
    $entry = trim($entry);
    $entry = stripslashes($entry);
    $entry = htmlspecialchars($entry);
    return $entry;
}
include "connection.php";
$target_dir = "uploads/";
$check1 = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//echo $check1;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



$college_err = "";
$school_err = "";
$birth_err = "";
$work_err = "";
$hobby_err = "";
$img_err - "";

$username1 = $_SESSION['username'];




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $college = xss($_POST['college']);
    $school = xss($_POST['school']);
    $birth = xss($_POST['birth']);
    $work = xss($_POST['work']);
    $hobby = xss($_POST['hobby']);
    $flag1 = false;
    $flag2 = false;
    $flag3 = false;
    $flag4 = false;
    $flag5 = false;
    $flag6 = false;

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

    //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //print_r($check);
    if ($check1 == false) {
        $flag6 = false;
        $img_err = "No image is selected";
    } else
  
  if ($_FILES["fileToUpload"]["size"] > 500000) {
        $img_err = "<p>File size too large</p>";
    } else
   if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $img_err = "Only JPG, JPEG, PNG & GIF files are allowed.";
        $flag6 = false;
    } else

  if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $flag6 = false;
    } else {
        $flag6 = true;
        //echo "Done";
    }
    //print_r($_POST);
    //print_r($_FILES);

    if ($flag1 && $flag2 && $flag3 && $flag4 && $flag5 && $flag6) {
        foreach ($_POST as $key => $v) {


            $selection = " UPDATE user SET $key='$v' WHERE user_name= '$username1' ";
            $done = mysqli_query($mysqli, $selection);
        }

        $selection = " UPDATE user SET image='$target_file' WHERE user_name= '$username1' ";
        $done = mysqli_query($mysqli, $selection);
        $validation = true;
        $selection = " UPDATE user SET validation='$validation' WHERE user_name= '$username1' ";
        $done = mysqli_query($mysqli, $selection);
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
    <link href="update2.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div id="container">
        <div id="display">
            <div id="name9">Username:<?php echo $_SESSION['username'] ?></div>

            <!--<div><img src="<?/*php echo $imageURL */ ?>" id="image1" alt="profilephoto"></div>-->

            <div id="buttonl"> <button><a href="logout.php">Logout</a></button></div>
        </div>
        <div id="heading">

            <h1 id="heading">Welcome to Chatbook!</h1>

        </div>
        <div id="message">
            <p>You can update your profile
        </div>
        <div id="formdiv">
            <form id="form3" action="" method="post" enctype="multipart/form-data">
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

                            <td><label for="fileToUpload">Profile Image</label></td>
                            <td> <input type="file" name="fileToUpload" id="fileToUpload">


                                <?php echo $img_err ?>
                            </td>


                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <button type="submit" form="form3" value="Submit" id="button" name="submit" style>Update</button>
                            </td>
                        </div>
                </table>
            </form>

        </div>
    </div>
 <script src="update2.js"></script>
</body>

</html>