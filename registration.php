<?php
session_start();
include "connection.php";
$name_err = "";
$username_err = "";
$city_err = "";
$gender_err = "";
$age_err = "";
$education_err = "";
$phone_err = "";
$email_err = "";
$password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $city = $_POST['cityname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $education = $_POST['qualification'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $flag1 = false;
    $flag2 = false;
    $flag3 = false;
    $flag4 = false;
    $flag5 = false;
    $flag6 = false;
    $flag7 = false;
    $flag8 = false;
    $flag9 = false;
    $flag12 = false;
    //backened validation begins here

    if (empty($name)) {
        $name_err = "<p>Required Feild</p>";
    } else {
        if (!preg_match("/^[A-Z][a-zA-Z\.\' ]*[a-zA-Z]$/", $name)) {
            $name_err = "<p> The name must begin with capital letter and should not include numbers.</p>";
        } else {
            $flag1 = true;
        }
    }

    if (empty($username)) {
        $username_err = "<p>Required Feild</p>";
    } else {
        if (!preg_match("/^[a-zA-Z0-9][a-zA-Z0-9]*$/", $username)) {
            $username_err = "<p>Username must be alpha-numeric</p>";
        } else {
            $flag2 = true;
        }
    }

    if (empty($city)) {
        $city_err = "<p>Required Feild</p>";
    } else {
        if (!preg_match("/^[A-Z][a-zA-Z ]*[a-zA-Z]$/", $city)) {
            $city_err = "<p>The city's name must begin with a capital letter and should not include numbers &
            special characters.</p>";
        } else {
            $flag3 = true;
        }
    }
    /*
    if (empty($gender)) {
        $gender_err = "<p></p>";
    } else {
        if (!preg_match("", $gender)) {
            $gender_err = "<p></p>";
        } else {
            $flag4 = true;
        }
    }
*/

    if (empty($age)) {
        $age_err = "<p>Required Field</p>";
    } else {
        if (!preg_match("/^[1-9]$|^[1-9][0-9]$|^[1][0-1][0-9]$/", $age)) {
            $age_err = "<p>Age must be a number between 1-120.</p>";
        } else {
            $flag5 = true;
        }
    }

    /*
    if (empty($education)) {
        $education_err = "<p></p>";
    } else {
        if (!preg_match("", $education)) {
            $education_err = "<p></p>";
        } else {
            $flag6 = true;
        }
    }*/

    if (empty($phone)) {
        $phone_err = "<p>Required Field</p>";
    } else {
        if (!preg_match("/^(\+?91(\-)?)?(0)?[9876][0-9]{9}$/", $phone)) {
            $phone_err = "<p> Enter a valid phone number.</p>";
        } else {
            $flag7 = true;
        }
    }


    if (empty($email)) {
        $email_err = "<p>Required Field</p>";
    } else {
        if (!preg_match("/^[a-zA-Z0-9][a-zA-Z0-9\!\#\$\%\&\'\*\+\-\/\=\?\^\_\`\{\|\}\~\.]*[a-zA-Z0-9]@([a-zA-Z]+[.])+[a-zA-z]+$/", $email)) {
            $email_err = "<p> Enter a valid email-id.</p>";
        } else {
            $flag8 = true;
        }
    }

    if (empty($password)) {
        $password_err = "<p>Reuired Feild</p>";
    } else {
        if (!preg_match("/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[\#\?\!\@\$\%\^\&\*\-\.]).{8,}$/", $password)) {
            $password_err = "<p>Enter a valid password</p>";
        } else {
            $flag9 = true;
        }
    }




    if ($flag12) {

        print("INSERT INTO user (user_name,name,city,gender,age,education,phone,email,pass) VALUES (\"" . $username . "\",\"" . $name . "\",\"" . $city . "\",\"" . $gender . "\"," . $age . ",\"" . $education . "\"," . $phone . ",\"" . $email . "\",\"" . $password . "\");");

        $connection = $mysqli->query("INSERT INTO user (user_name,name,city,gender,age,education,phone,email,pass) VALUES (\"" . $username . "\",\"" . $name . "\",\"" . $city . "\",\"" . $gender . "\"," . $age . ",\"" . $education . "\"," . $phone . ",\"" . $email . "\",\"" . $password . "\");");
        $_SESSION['username'] = $username;
        echo $_SESSION['username'];
        header('location:update2.php');
    }
}







?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

</head>

<body>
    <div id="container">
        <div id="details">
            <h1>
                Welcome to Chatbook!
            </h1>

        </div>
        <div id="formname">
            <form id="form1" action="" method="post">
                <table>
                    <tr>
                        <div>

                            <td><label for="username">Name</label></td>
                            <td><input type="text" id="username" name="name">
                                <div id="errormessage" style="display:none">
                                    The name must begin with capital letter and should not include numbers.

                                </div>
                            <td><?php echo $name_err ?></td>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>

                            <td><label for="user">Userame</label></td>
                            <td id="append"><input type="text" id="user" name="username">
                            <span id ="mess"></span>
                            <td><?php echo $username_err ?></td>
                            </td>
                        </div>
                    </tr>

                    <tr>
                        <div>
                            <td>
                                <label for="cityname"> City </label>
                            </td>
                            <td>
                                <input type="text" id="cityname" name="cityname">
                                <div id="errormessage2" style="display:none">
                                    The city's name must begin with a capital letter and should not include numbers &
                                    special characters.
                                </div>
                            <td><?php echo $city_err ?></td>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>Gender</td>
                            <td><input type="radio" id="male" name="gender" value="Male">
                                <label for="male">Male</label>

                                <input type="radio" id="female" name="gender" value="Female">
                                <label for="female">Female</label>
                                <input type="radio" id="other" name="gender" value="Other">
                                <label for="other">Other</label>
                            </td>
                        </div>
                    </tr>
                    <tr>

                        <div>
                            <td>
                                <label for="age">Age</label>
                            </td>
                            <td>
                                <input type="text" id="age" name="age">
                                <div id="errormessage3" style="display:none">
                                    Age must be a number between 1-120.
                                </div>
                            <td><?php echo $age_err ?></td>
                            </td>
                        </div>
                    </tr>
                    <tr>

                        <div>
                            <td><label for="qualification">Educational Qualification</label></td>
                            <td>
                                <select id="qualification" name="qualification">

                                    <option value="Graduate">Graduate</option>
                                    <option value="Post-Grauate">Post-Graduate</option>
                                    <option value="Phd">Phd</option>

                                </select>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label for="phonenumber">Phone Number</label>
                            </td>
                            <td>
                                <input type="text" id="phonenumber" name="phonenumber">
                                <div id="errormessage4" style="display:none">
                                    Enter a valid phone number.
                                </div>
                            <td><?php echo $phone_err ?></td>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label for="email">Email</label><br>
                            </td>
                            <td>
                                <input type="text" id="email" name="email">
                                <div id="errormessage5" style="display:none">
                                    Enter a valid email-id.
                                </div>
                            <td><?php echo $email_err ?></td>
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
                                <div id="errormessage6" style="display:none">
                                    Enter a valid password<br>
                                </div>
                            <td><?php echo $password_err ?></td>
                            <div id="instructions">
                                Atleast 8 characters, one upper letter,one lower letter,one number & one special
                                character.
                            </div>
                            </td>
                        </div>
                    </tr>
                    <tr>
                        <div>
                            <td>
                                <label for="confirmpass">Confirm Password</label>
                            </td>
                            <td>
                                <input type="password" id="confirmpass" name="confirmpass">
                                <div id="errormessage7" style="display:none">
                                    Password didn't match.
                                </div>
                            </td>
                        </div>
                    </tr>
                </table>
                <div>
                    <button type="submit" form="form1" value="Submit" id="button" style>Sign Up</button>

                </div>

            </form>

        </div>
    </div>
    <script src="registration_js.js"></script>
</body>

</html>