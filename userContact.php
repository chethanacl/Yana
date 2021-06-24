<?php

$con=mysqli_connect('localhost','root');

if($con){
    echo"Connection Successful";
}else{
    echo" No Connection";
}
mysqli_select_db($con, 'yana');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];

$query = "insert into contacts(name, email, phone,comment)
values('$name', '$email', '$phone', '$comment')";

mysqli_query($con, $query);

header('location:index.php');
?>