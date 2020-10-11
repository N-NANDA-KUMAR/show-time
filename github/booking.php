<html>
<head>
<title>Booking</title>
<style>
input 
{
     color:white;
     width:20%;
     height:5%;
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
}

input[type=submit] 
{
   padding:5px 15px;
   background:green;
   color:white;
   border:2;
   border-radius:180px;
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
body 
{
     background:linear-gradient(#45a247,#283c86);
     font-family:"Comic Sans MS", cursive, sans-serif;
     background-image: url("dbms project/log2.jpg");
     background-size: 1600px 800px;
}

</style>
</head>
<body>
<h1 align="center"><font size="20" font color="white"><b>SHOW TIME</b></font></h1>
<ul>
 <li><a href="movie.php"><b><font size="5" font color="black">Back</b></a></font>
 </li>
</ul>
<?php
$name=$_POST['moviename'] ;
?>
<br>
<br>
<form action="payment.php" method="post">

<fieldset align="center">
<legend align="center"><b><h2>BOOKING</h2></b></legend>
<label><h2 align="center">Movie Name : <?php echo"$name"; ?>
</h2></label>

<label><h2 align="center">Number Of Tickets : 
<select name="tickets">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</h2></label>
<label>
<h2 align="center">
<?php
include "connect.php";
$query="select movie_price from movies where movie_name=\"$name\"";
$result=$con->query($query);
$row=mysqli_fetch_row($result);
echo "Price/Ticket : $row[0] ";
echo " <input type=\"hidden\" name=\"movie\" value=\"$name\"> ";
echo " <input type=\"hidden\" name=\"price\" value=\"$row[0]\"> ";
?>
</h2>
</label>
<label>
<h2 align="center">Payment Type :
<select name="type">
<option>Debit Card</option>
<option>Credit Card</option>
</select>
</h2>
</label>

</fieldset>
<label>
<h2 align="center">
<input type="submit"value="Proceed To Pay">
</h2>
</label>
</form>
</body>
</html>