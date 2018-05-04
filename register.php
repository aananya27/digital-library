<?php
 include 'connection.php';

 if(isset($_POST["submit"]))

 {

 $name = $_POST["name"] ;
 $regno = $_POST["regno"] ;

 $password = $_POST["password"];
 $sql = "insert into student values(\"$name\", \"$regno\", \"$password\"  ) ;" ;

 $result = mysqli_query($conn,$sql) ;
echo "Registered" ;

 }


?>


<html>

<head><title>Login </title> </head>

<body>

<h1>Login</h1>

<form method = "post" >

Name :

<input type = "text" name="name" > <br>
Regno :

<input type = "text" name="regno" > <br>

Password:

<input type = "password" name = "password" > <br>



<input type = "submit" name= "submit" value="Login" >

</form>



</body>

</html>
