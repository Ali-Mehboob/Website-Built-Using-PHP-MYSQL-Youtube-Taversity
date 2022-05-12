<?php

$connection = mysqli_connect('localhost:3306','alimehbo_ali','alimehboob@1234','alimehbo_phpwebsite');

mysqli_select_db($connection,"youtubedata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>