<?php
 include 'connection.php';

 if(isset($_POST["submit"]))

 {

 $name = $_POST["name"] ;
 $regno = $_POST["regno"] ;

 $password = $_POST["password"];
 $sql = 'delete from student where regno = $regno ;';


 if (mysqli_query($conn, $sql)) {
     echo "Record deleted successfully";
 } else {
     echo "Error deleting record: " . mysqli_error($conn);
 }

 $sql ="delete from marks where regno = \"$regno\" ;" ;
 mysqli_query($conn, $sql)

 $sql ="delete from attendance where regno = \"$regno\" ;" ;
 mysqli_query($conn, $sql)



 }


?>


<html>

<head><title>Login </title> </head>

<body>

<h1>Login</h1>

<form method = "post" >


Regno :

<input type = "text" name="regno" > <br>


<input type = "submit" name= "submit" value="Delete" >

</form>



</body>

</html>
