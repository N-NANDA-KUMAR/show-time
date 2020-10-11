<?php
$success=0;
$error=0;
$duser=" ";
$dpass=" ";
include "connect.php";
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$query="select user_name,user_password from user where user_name=\"$user\"";
$result=$con->query($query);
//$duser=$result->fetch_assoc()['user_name'];
//$dpass=$result->fetch_assoc()['user_password'];
$row=mysqli_fetch_row($result);
$duser=$row[0];
$dpass=$row[1];
 if($_POST['admin']=='admin')
{
  $admin1="nanda";
  $pass1="password";
  $admin2="nandan";
  $pass2="hollywood";
  if(($user==$admin1 && $pass==$pass1)||($user==$admin2 && $pass==$pass2))
    {
        session_start();
       $_SESSION['admin']=$user;
        header('Location:admin.php');
    }
  else
   {
       header('Location:error.php');

   }
  }
 elseif($duser==$user && $dpass==$pass)
{  
    header('Location:movie.php');
    session_start();
    $_SESSION['loginuser']=$user;
    $_SESSION['login']=0;
}
else
{ 
  header('Location:error.php');
 } 
mysqli_close($con);
}   
?>