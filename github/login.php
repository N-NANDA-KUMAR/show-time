<html>
<head>
   <title> Login </title>
    <style type="text/css">
body 
    {
     background:linear-gradient(#667eea,#764ba2);
     font-family:serif;
     background-image: url("dbms project/log2.jpg");
     background-size: 1600px 800px;
    }

h1 
    {
    color:white; 
    } 
h2 
   {
   color:white;
   }
   form
   {
     width:500px;
    margin-right: auto;
    margin-left: auto;
    margin-top: 180px;
    border:solid;
    border-radius:15px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-color: white;
   }
   label
   {
    color: white;
   }
   label.one
   {
    font-size: 20px;
   }
    label.two
   {
    font-size: 20px;
   }
input[type=text] 
   { 
    color:black;
    width:30%;
    height:5%;
    padding:5px 15px;
    background:#ccc;
    border:0;
    border-radius:10px;
  }
input[type=password] 
   {
    color:black;
    width:30%;
    height:5%;
    padding:5px 15px;
    background:#ccc;
    border:0;
    border-radius:10px;  
   } 
input[type=password]:focus 
   { 
    
    background:white;
   }
input[type=text]:focus 
   { 
    
    background:white;
   }
input[type=submit] 
   {
    color:black;
    width:30%;
    height:5%;
    padding:5px 15px;
    background:green;
    color:white;
    border:0;
    border-radius:10px;
    margin-top: 10px;
   }
</style>
</head>

<body>
   <form action="authent.php" method="post" >
   <h3> <input type="checkbox" name="admin" value="admin"><label>Admin Login</label><br>
   </h3><h1 align="center" >   
   <label class="one"> <b>USER NAME :</b> 
    <input type="text" name ="username" required="required" /> <br />
   </label>
   </h1>
   <h1 align="center">
   <label class="two"> <b>PASSWORD :</b> 
    <input type="password" name="password" required="required" /><br><br>
   <input type ="submit" value="LOG IN" name="submit"  />
  </label>
   </h1>
   </form>
</body>
</html>