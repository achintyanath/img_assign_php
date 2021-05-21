<?php

session_start();
include "imgc.php";
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chat5.css">
    <title>Chatbook</title>
</head>

<body>
    <div id="container">
        <div id="display">
            <div id="name9"><?php echo $_SESSION['username']?></div>

            <div><img src="<?php echo $imageURL ?>" id="image1" alt="profilephoto"></div>

            <div> <button><a href="logout.php">Logout</a></button></div>
        </div>
        <h1 class="heading">Welcome To Chatbook</h1>
        <h2 id="heading2">Here is the list of all users you can chat with.</h2>

        <?php

        $username = $_SESSION['username'];
        include "connection.php";
        
        $selection = "SELECT user_name FROM user WHERE user_name != '$username'";
        $result = mysqli_query($mysqli, $selection);
      
       echo "<table>
       <tr>
       <th>Username</th>
       <th>Chat</th>
       </tr>";
        while($row = $result->fetch_assoc()) {
            $element = $row['user_name'];
       echo "  
            <tr>
            <td class =\"userto\">$element</td>
            <td><button  onclick=\"dialog_box('$element');\">Chat</button></td>
            
            </tr>";
          }
     
        ?>
        <div id="chatbox" style="display:none">
          
               <!-- <textarea id="prem">

        </textarea>
                <textarea id="msg" name="msg" required></textarea>

                <button type="submit" id="btn">Send</button>
                <button type="button" id="close">Close</button>
            
       -->
    </div>

    </div>
    <div>
        <p id="change"><a href="update.php"> Click here to update the profile</a>
        </p>
    </div>
    <script src="chat8.js"></script>
</body>

</html>