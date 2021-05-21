<?php
session_start();

include "connection.php";
$userto = $_POST["user_to"];
$chat = $_POST["chat"];
$username = $_SESSION['username'];


$selection = "INSERT INTO achintya_chat (user_to,user_from,chat_message) VALUES ('$userto','$username','$chat')";
$done = mysqli_query($mysqli,$selection);

$selection2 = "SELECT * FROM achintya_chat WHERE (user_from = '$username' AND user_to = '$userto') OR (user_from = '$userto' AND user_to = '$username') ORDER BY time";

$done2 = mysqli_query($mysqli,$selection2);


$output='<ul style="list-style-type:none;">';


while($row = $done2->fetch_assoc()) {
   if($row['user_from']==$username){
       $display_user="You";
   }
   else{
    $display_user=$userto;
   }
  
$output.='<li><p>'.$display_user.':<br>'.$row['chat_message'].'<br><p align="right"><small><em>'.$row['time'].'</em></small></p></p></li><hr>';
}
$output.='</ul><div id="anchor"></div>';
echo $output;
?>