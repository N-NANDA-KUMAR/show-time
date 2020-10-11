<html>
<head>
   <title>Payment</title>
<style type="text/css">
body 
{
     font-family:"Comic Sans MS", cursive, sans-serif;
     background-image: url("dbms project/log2.jpg");
     background-size: 1600px 800px;
}

input 
{
   color:black;
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
li  {
   display:inline;
   float:left;
}
li a {  
display:block;
color:#cccccc;
text-align:center;
padding:16px 35px;
text-decoration:none;
}

h1 
{
color:white;
}
h2 
{
color:white;
}
input[type=submit] {
padding:5px 15px;
background:green;
border:1;
font-weight:bold;
border-radius:180px;
}
input[type=text]{
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:180px;
}
input[type=submit]:focus { 
border-color:#333;
background:white;
}
input[type=text]:focus { 
border-color:#333;
background:white;
}
</style>
</head>
<body>
<h1 align="center"><font size="20"><b>SHOW TIME</b></font></h1>
<ul>
 <li><a href="movie.php"><b><font size="5" font color="black">Back</b></a></font>
 </li>
</ul>
<br>
<fieldset>
<legend align="center"><h2><b>PAYMENT</h2> </b></legend>
<form action="confirm.php" method="post" >
<h2 align="center">
   <label> <b>Payment Mode :</b> 
    <?php
     $mode=$_POST["type"];
     echo"$mode";
     ?>
   </label>
</h2>
<h2 align="center">
   <label> <b>Enter CARD number:</b> 
    <input type="text" name="cvv" required="required" />
  </label>
</h2>
<h2 align="center">
   <label> <b>Enter CVV number:</b> 
    <input type="text" name="cvv" required="required" />
  </label>
</h2>
<h2 align="center">
   <label> <b>Amount :</b> 
    <?php
     $num=$_POST["tickets"];
     $movie=$_POST["movie"];
     $price=$_POST["price"];
     $total=$num*$price;
    echo"$total";
echo " <input type=\"hidden\" name=\"price\" value=\"$total\"> ";
echo " <input type=\"hidden\" name=\"type\" value=\"$mode\"> ";
echo " <input type=\"hidden\" name=\"movie\" value=\"$movie\"> ";
echo " <input type=\"hidden\" name=\"tickets\" value=\"$num\"> ";
     ?>
  </label>
</h2>
</fieldset>
<h2 align="center">
   <label> 
   <input type ="submit" name="submit" value="Pay Now"  />
   
  </label>
</h2>
   </form>

</body>
</html>