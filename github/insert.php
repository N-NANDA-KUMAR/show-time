<html>
<head>
   <title> Insert</title>
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
   color:black;
   width:20%;
height:5%;
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
input[type=submit] {
padding:5px 15px;
    background:green;
border:1;
font-weight:bold;
border-radius:10px;

}
input[type=text]{
padding:5px 15px;
    background:#ccc;
border:1;
font-weight:bold;
border-radius:10px;
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
   <form action="insertquery.php" method="post" >
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Name :</b> 
    <input type="text" name ="moviename" required="required" /> <br />
   </label>
   </h2>
   <h2 align="center">
   &nbsp;&nbsp;<label> <b>Movie Language :</b> 
    <input type="text" name="movielanguage" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Actor :</b> 
    <input type="text" name="movieactor" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Actress :</b> 
    <input type="text" name="movieactress" required="required" /><br>
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Director :</b> 
    <input type="text" name="moviedirector" required="required" />
  </label>
</h2>
<h2 align="center">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label> <b>Movie Rating :</b> 
    <input type="text" name="movierating" required="required" />
  </label>
</h2>
<h2 align="center">
   <label> <b>Movie Ticket Price :</b> 
    <input type="text" name="movieprice" required="required" />
  </label>
</h2>
<h2 align="center">
   <label> <b>Movie Image Location :</b> 
    <input type="text" name="movielocation" required="required" />
  </label>
</h2>
</fieldset>
<h2 align="center">
   <label> 
   <input type ="submit" name="submit" value="INSERT"  />
  </label>
</h2>
</form>
</body>
</html>