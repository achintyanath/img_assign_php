<?php
    
    $mysqli= mysqli_connect("localhost","root","Astha.nbp@29","users");

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    /*else{
        echo "You have done it <br>";
    }*/
