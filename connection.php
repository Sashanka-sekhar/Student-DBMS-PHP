<?php
//connection.php

$con = mysqli_connect('localhost','myadmin','Ayush068@','student');

 if ($con) {
    echo "connection successfully";
}
 else{
     echo"Something Error";
 }
?>
