<html>
<head>
<title>Admin</title>
<style>
input.two
{
     color:red;
     width:20%;
     height:5%;
     margin-left: 120px;

}
input.one
{
     color:red;
     width:20%;
     height:5%;
     margin-left: 20px;

}


body 
{
     background:linear-gradient(#667eea,#764ba2);
     font-family:"Comic Sans MS", cursive, sans-serif;
      background-image: url("dbms project/log2.jpg");
     background-size: 1600px 800px;
     font-color:white;
}

ul 
{ 
     list-style-type:none;
      margin:0;
     padding:0;
    overflow:hidden;
    background-color:white;
    height: 50px;
 }
li  
{
   display:inline;
   float:left;
}
li a 
{  
    display:block;
   color:#cccccc;
    text-align:center;
   padding:16px 35px;
   text-decoration:none;
}
h2 
{
   color:white;
   background-color:white;
}
h3
{
	color: white;
}

input[type=submit] 
{
   padding:5px 15px;
  background:red;
  color:white;
   border:2;
   border-radius:10px;
}
select
{
   padding:5px 15px;
   background:#ccc;
   border:1;
   font-weight:bold;
   border-radius:10px;
}
input[type=submit]:focus 
{ 
   border-color:#333;
    background:white;
}


</style>
</head>
<body>
<h1 align="center"><font size="20" font color="white"><b>SHOW TIME</b></font>
</h1>

<ul>
 <li><a href="index.html"><b><font size="5" font color="black">Home</b></a></font>
 </li>
</ul>
<br>
<marquee width="100%" ><font color="green" font size="10"><b><?php
session_start();
echo "Welcome admin &nbsp ";
echo $_SESSION['admin'];
?></font></b></marquee>

<h2 align="center" style="color:#000000;">MOVIES PRESENT IN THE DATABASE</h2>

<p align="center" >
<font size="5" color="white">
<b>
<?php
include "connect.php";
$query="select * from movies";
$result=$con->query($query);
while($row=mysqli_fetch_row($result))
{
echo $row[1];
echo"<br>";
}
?>
<b>
</font>
</p>
<br>

<h2 align="center" style="color:#000000;">What Would You Like To Do</h2>

<br>
<h3 align="center">
<form action="insert.php" method="post">
<input type="submit" value="INSERT" class="two">(INSERT A MOVIE )
</form>
<br>
<form action="update.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="UPDATE" class="one">(UPDATE A MOVIE DETAILS)
<br>
<br>
</form>
<form action="delete.php" method="post">
<input type="submit" value="DELETE" class="two">(DELETE A MOVIE)
<br>
<br>
</form>
<form action="view.php" method="post">
<input type="submit" value="View" class="two">(View Booking Details)
</h3><br>
<br>
</form>    
</body>
</html>