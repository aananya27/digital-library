<?php
session_start();
 include 'connection.php';
?>

<html>

<head><title>Home </title> </head>

<style type="text/css">

	body{
		background-color: #29ABE2;
	}
	
	button{
		background-color: #6cc070;
		width: 300px;
		font-size: 14px;
		box-shadow: none;
		border: none;
		color: white;
		height: 60px;
		margin-right: 20px;
	}

	.box{
		color: black !important;
		background-color: white;
		font-size: 14px;
		font-family: Helvetica;
		padding: 30px;
		margin:50px;
		 display: flex;
    align-items: center;
	}

	h1{
		font-family: Helvetica;
		color: white;
		text-align: center;
	}
</style>
<body>

<h1>Dashboard</h1>
<?php
echo "<h1>".$_SESSION["regno"]."</h1> <br>" ;
echo "<h1>".$_SESSION["name"]."</h1>" ;
?>
<br><br>
<div class="box">
 <a href="createtask.php">
 <button> Create Task</button>
</a>
<br><br>

 <a href="seestasks.php">
 <button> See My Tasks</button>
</a>
<br><br>

 <a href="logout.php">
 <button> Logout</button>
</a>
<br><br>
<div>




</body>

</html>
