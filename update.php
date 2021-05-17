<?php
session_start();
include "imgc.php";
?>
<?php

//echo "Please update the fpllowing details";
//echo $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <title>Pesrsonal Details</title>
</head>

<body>
    <div id="container">

    <div id="display">
            <div id="name9">Username:<?php echo $_SESSION['username']?>
            </div>
            <div><img src="<?php echo $imageURL ?>" id="image1" alt="profilephoto"></div>
        </div>
        <h1>
            Welcome to Chatbook!</h1>
        <p> Please complete your profile</p>


        <?php

     $username=$_SESSION['username'];
    include "connection.php";
    //rrecho $username;
    $selection = "SELECT * FROM user WHERE user_name = '$username'";
    $result =mysqli_query($mysqli,$selection);
    $row =$result->fetch_assoc();
    $col1 =$row['user_name'];
    $col2 =$row['name'];
    $col3 =$row['city'];
    $col4 =$row['gender'];
    $col5 =$row['age'];
    $col6 =$row['education'];
    $col7 =$row['phone'];
    $col8 =$row['email'];
    $col9 =$row['pass'];
    $col10 =$row['college'];
    $col11 =$row['school'];
    $col12 =$row['birth'];
    $col13 =$row['work'];
    $col14 =$row['hobby'];
    
    echo "<table>
     <!--<tr>
    <td>Username</td>
    <td>$col1</td>
    <td><button id = \"buttonname\">Edit</button></td>
    <td id= \"rowname\"></td>
    </tr>-->

    <tr>
    <td>Name</td>
    <td>$col2</td>
    <td><button id = \"buttonname\">Edit</button></td>
    <td id= \"rowname\"></td>
    <td> <div id=\"errormessage\" style=\"display:none\">
    The name must begin with capital letter and should not include numbers.

    </div></td>
    </tr>

    <tr>
    <td>City</td>
    <td>$col3</td>
    <td><button id = \"buttonname2\">Edit</button></td>
    <td id= \"rowname2\"></td>
    <td><div id=\"errormessage2\" style=\"display:none\">
    The city's name must begin with a capital letter and should not include numbers &
    special characters.
</div></td>
    </tr>

    

    <tr>
    <td>Age</td>
    <td>$col5</td>
    <td><button id = \"buttonname4\">Edit</button></td>
    <td id= \"rowname4\"></td>
    <td> <div id=\"errormessage3\" style=\"display:none\">
    Age must be a number between 1-120.
</div>
    </td>
    </tr>

    <tr>
    <td>Educational Qualification</td>
    <td>$col6</td>
    <td><button id = \"buttonname5\">Edit</button></td>
    <td id= \"rowname5\"></td>
    </tr>


    <tr>
    <td>Phone</td>
    <td>$col7</td>
    <td><button id = \"buttonname6\">Edit</button></td>
    <td id= \"rowname6\"></td>
    <td><div id=\"errormessage4\" style=\"display:none\">
    Enter a valid phone number.
</div></td>
    </tr>


    <tr>
    <td>Email</td>
    <td>$col8</td>
    <td><button id = \"buttonname7\">Edit</button></td>
    <td id= \"rowname7\"></td>
    <td> <div id=\"errormessage5\" style=\"display:none\">
    Enter a valid email-id.
</div> </td>
    </tr>

    <tr>
    <td>Password</td>
    <td>$col9</td>
    <td><button id = \"buttonname8\">Edit</button></td>
    <td id= \"rowname8\"></td>
    <td> <div id=\"errormessage6\" style=\"display:none\">
    Enter a valid password
</div> </td>
    </tr>

    <tr>
    <td>College</td>
    <td>$col10</td>
    <td><button id = \"buttonname9\">Edit</button></td>
    <td id= \"rowname9\"></td>
    <td> <div id=\"errormessage7\" style=\"display:none\">
    The college name must begin with a capital letter
</div> </td>
    </tr>

    <tr>
    <td>School</td>
    <td>$col11</td>
    <td><button id = \"buttonname10\">Edit</button></td>
    <td id= \"rowname10\"></td>
    <td> <div id=\"errormessage8\" style=\"display:none\">
    The school name must begin with a capital letter
</div> </td>
    </tr>

    <tr>
    <td>Birth Place</td>
    <td>$col12</td>
    <td><button id = \"buttonname11\">Edit</button></td>
    <td id= \"rowname11\"></td>
    <td> <div id=\"errormessage9\" style=\"display:none\">
    The bithplace  must begin with a capital letter
</div> </td>
    </tr>

    <tr>
    <td>Organisation</td>
    <td>$col13</td>
    <td><button id = \"buttonname12\">Edit</button></td>
    <td id= \"rowname12\"></td>
    <td> <div id=\"errormessage10\" style=\"display:none\">
    The organisation must begin with a capital letter.
</div> </td>
    </tr>

    <tr>
    <td>Hobbies</td>
    <td>$col14</td>
    <td><button id = \"buttonname13\">Edit</button></td>
    <td id= \"rowname13\"></td>
    <td> <div id=\"errormessage11\" style=\"display:none\">
    he name of hoobies must begin with a capital letter.
</div> </td>
    </tr>

    </table>
    "
    
    /*<td>Name</td>
    <td>City</td>
    <td>Gender</td>
    <td>Age</td>
    <td>Education</td>
    <td>Phone Number</td>
    <td>Email_Address</td>
    <td>Password</td>
    </tr>*/
    
    
    
    




    


    ?>


    </div>
    <script src="update.js"></script>
</body>

</html>