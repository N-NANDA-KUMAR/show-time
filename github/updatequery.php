<html>
<head>
   <title>UPDATED</title>
<style type="text/css">
body {
     background:linear-gradient(#667eea,#764ba2);
      font-family:"Comic Sans MS", cursive, sans-serif;
     background-image: url("dbms project/log2.jpg");
     background-size: 1600px 800px;
}

ul { 
list-style-type:none;
      margin:0;
     padding:0;
    overflow:hidden;
    background-color:white;
 }

input {
   color:white;
   width:20%;
height:5%;
}
h1 {

    color:white;
    text-align:center;
}
h2 {
color:#cccccc;
}
h3 a
{
  color: white;
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
</style>
</head>
<body>
<h1 align="center"><font size="20"><b>SHOW TIME</b></font>
</h1>

<ul>
 <li><a href="admin.php"><b><font size="5" font color="black">Back</b></a></font>
 </li>
</ul>
<br></br>
<br>
<br>
<br>
<br>
<h1 align="center">
<?php
$movie=$_POST['movie'];
$price=$_POST['price'];
include "connect.php";
$query="UPDATE movies SET movie_price=\"$price\" where movie_name=\"$movie\"";
$result=$con->query($query);
if($result)
echo "Movie Price Updated";
else
{
echo "Error Occured While Updating";
echo "<br>";
echo"<a href=\"delete.php\">Try Again</a>";
}
?>
</h1>
<h3 align="center">
<a href="admin.php">GO BACK</a>
</h3>
</body>
</html>