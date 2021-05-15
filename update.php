<?php
session_start();
?>
<?php

echo "Please update the fpllowing details";
echo $_SESSION['username'];

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
    <div id ="container">
    <h1>
    Welcome to Chatbook!</h1>
     <p> Please complete your profile</p>
     <form id="form3">
    <table>
    <tr>
    <td>Fallana</td>
    <td>Dimaka</td>
    <td><i class="fab fa-github"></i></td>
    </tr>
    </table>
    </form>


    <?php

     $username=$_SESSION['username'];
    include "connection.php";
    echo $username;
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
    </tr>

    <tr>
    <td>City</td>
    <td>$col3</td>
    <td>Edit</td>
    <td id= \"rowname\"></td>
    </tr>

    <tr>
    <td>Gender</td>
    <td>$col4</td>
    <td>Edit</td>
    <td id= \"rowname\"></td>
    </tr>

    <tr>
    <td>Age</td>
    <td>$col5</td>
    <td>Edit</td>
    <td id= \"rowname\"></td>
    </tr>

    <tr>
    <td>Educational Qualification</td>
    <td>$col6</td>
    <td>Edit</td>
    <td id= \"rowname\"></td>
    </tr>


    <tr>
    <td>Phone</td>
    <td>$col7</td>
    <td>Edit</td>
    <td id= \"rowname\"></td>
    </tr>


    <tr>
    <td>Email</td>
    <td>$col8</td>
    <td>Edit</td>
    <td id= \"rowname\"></td>
    </tr>

    <tr>
    <td>Password</td>
    <td>$col9</td>
    <td>Edit</td>
    <td id= \"rowname\"></td>
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