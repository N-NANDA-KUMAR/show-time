<html>
<head>
   <title>DELETE</title>
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
   width:10%;
height:5%;
}
h1 {

    text-align:center;
}
h2 {
color:#cccccc;
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
select {
 width:20%;
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
}
input[type=submit] {
padding:5px 15px;
    background:green;
border:1;
font-weight:bold;
border-radius:10px;

}
input[type=submit]:focus { 
border-color:#333;
background:blue;
}
</style>
</head>
<body>
<h1 align="center"><font size="20" font color="white"><b>SHOW TIME</b></font>
</h1>

<ul>
 <li><a href="admin.php"><b><font size="5" font color="black">Back</b></a></font>
 </li>
</ul>
<br></br>

<fieldset>
<legend align="center"><h2><b></h2> </b></legend>
   <h2 align="center" >
    Select Movie To Be Deleted
<br>
<br>

   <form action="deletequery.php" method="post" >
   <select name="movie">
   <?php
     include "connect.php";
     $query="select * from movies";
     $result=$con->query($query);
     while($row=mysqli_fetch_row($result))
     {
       echo"<option>$row[1]</option>";
     }
    ?>
  </select> 
<br>
<br>
<input type="submit" name="submit" value="DELETE" >
   </form>
</h2>
</body>
</html>