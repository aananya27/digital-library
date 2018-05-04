<?php
session_start();
 include 'connection.php';



if(isset($_POST["submit"]))

{

$regno = $_POST["regno"] ;

$password = $_POST["password"];
$sql = "select count(*) from student where regno like \"$regno\"  and password like \"$password\"  ;" ;

$result = mysqli_query($conn,$sql) ;

$row = mysqli_fetch_assoc($result) ;


if( $row["count(*)"] == 0 ) {

echo "<div class=\"snack\"> <p>Invalid regno or password</snack>" ;

}

else{

echo "<div class=\"snack\"> <p>successfully Logged in.</p>";
$sql = "select * from student where regno like \"$regno\"  ;" ;
$result = mysqli_query($conn,$sql) ;
$row = mysqli_fetch_assoc($result) ;
$_SESSION["regno"] = $regno;
$_SESSION["name"] = $row["name"];

echo" <br><a href=\"home.php\"><button>  Home</button></a><br><br> </snack><br>";



}

}



?>

<html>

<style type="text/css">
	.snack{
		background-color: #6cc070;
		height: 30px;
		width: 100%;
		color: white;
		font-size: 12px;
		font-family: Helvetica;
	}
	.snack p{
		padding-left: 10px;
		padding-top: 8px;
	}

	body{
		background-color: #29ABE2;
		padding: 0px;
		margin: 0px;
	}
	form{
		background-color: white;
		width: 50%;
		margin:auto;
		padding: 50px;
		font-size: 18px;
		font-family: Helvetica;
		color: black;
	}

	form h3{
		color: black;
	}

	form input{
		width: 60%;
		padding: 10px;
		margin: 20px;
		font-size: 18px;
		font-family: Helvetica;
	}

	form input[type=submit]{
		background-color: #29ABE2;
		box-shadow: none;
		border: none;
		color: white;
		height: 60px;
	}

	button{
		background-color: #6cc070;
		width: 300px;
		font-size: 14px;
		box-shadow: none;
		border: none;
		color: white;
		height: 60px;
	}

	h1{
		font-family: Helvetica;
		color: white;
		text-align: center;
	}

</style>

<head><title>Login </title> </head>

<body>
<br>
<br>
<h1>Login</h1>

<form method = "post" >
<h3>Student Login</h3>
<br>
Username :
<br>

<input type = "text" name="regno" > <br>

Password:
<br>
<input type = "password" name = "password" > <br>


<br>
<input type = "submit" name= "submit" value="Login" >

</form>



</body>

</html>
