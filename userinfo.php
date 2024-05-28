<?php

$con= mysqli_connect('localhost','root');

if($con){
    echo "Connection sucessful";
}else{
    echo "No connection";
}

mysqli_select_db($con, 'dynamic_userdata');

$username= $_POST['username'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$comment= $_POST['comment'];

$query = "insert into userinfodata (username, email, mobile, comment)
values('$username', '$email', '$mobile' ,'$comment')";

mysqli_query($con, $query);
header ('location:index.php');
?>