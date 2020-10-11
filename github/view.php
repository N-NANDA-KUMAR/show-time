<html>
<head>
<title>View</title>
<style type="text/css">
h3 {
   border-style:double;
   border-width:5px;
   border-color:black;
   color:white;
}
table {
    border-spacing: 100px;
}
th {
    text-align:center;
    
}
th, td {
    padding: 15px;
    color:white;
}
table {
    border-spacing: 5px;
}
ul { 
list-style-type:none;
      margin:0;
     padding:0;
    overflow:hidden;
    background-color:white;
 }
li  {
   display:inline;
   float:left;
}
 body {
   background:linear-gradient(#667eea,#764ba2);
      font-family:"Comic Sans MS", cursive, sans-serif;
     background-image: url("dbms project/log2.jpg");
     background-size: 1600px 800px;
     }
li a {  
display:block;
color:#cccccc;
text-align:center;
padding:16px 35px;
text-decoration:none;
}
img {
 float:left;
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
<?php
include "connect.php";
$query="select sum(payment_amount) from payment";
$result=$con->query($query);
$row=mysqli_fetch_row($result);
$total +=$row[0];
?>
<br>
<br>
      <table width="90%" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><font size="5" color="white">Payment Id</font></th>
          <td><font size="5" color="white">Payment Type</font></th>
          <td><font size="5" color="white">Movie Name</font></th>
          <td><font size="5" color="white">User Name</font></th>
          <td><font size="5" color="white">Payment Amount</font></th>
        </tr>
<?php
include "connect.php";
$query="select payment_id,payment_type,movie_name,user_name,payment_amount from payment,ticket where payment.ticket_id=ticket.ticket_id";
$result=$con->query($query);
while($row1=mysqli_fetch_row($result))
{ 
   echo"<tr>";
   echo"<td>";
   echo $row1[0];
   echo"</td>";
   echo"<td>";
   echo $row1[1];
   echo"</td>";
   echo"<td>";
   echo $row1[2];
   echo"</td>";
    echo"<td>";
   echo $row1[3];
   echo"</td>";
    echo"<td>";
   echo $row1[4];
   echo"</td>";
   echo "</tr>";
}
?>
      <tr>
          <td><font size="5" color="white"></font></th>
          <td><font size="5" color="white"></font></th>
          <td><font size="5" color="white"></font></th>
          <td><font size="5" color="white">Total=</font></th>
          <?php
            echo " <td><font size=\"5\" color=\"white\"> $total </font></td>";

         ?>
        </tr>
</table>
</body>
</html>