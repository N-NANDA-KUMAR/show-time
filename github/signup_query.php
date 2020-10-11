<?php
$match=0;
$error=0;
include "connect.php";
$query1="select max(user_id) from user ";
$result1=$con->query($query1);
$row1=mysqli_fetch_row($result1);
$id=$row1[0]+1;
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$dob=$_POST['dob'];
$mail=$_POST['email'];
$phone=$_POST['phone'];
$addr=$_POST['address'];
$query="insert into user values (\"$user\",\"$pass\",\"$dob\",\"$mail\",\"$phone\",\"$addr\")";
$con->query($query);
header('Location:movie.php');
}
?>