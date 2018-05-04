
<?php

$conn = mysqli_connect("localhost","aananya","abcd","students2") or die("connection failure") ;

$sql1 = "create table student (name varchar(50) , regno varchar(9) primary key , password varchar(50));"  ;
//$sql2 = "create table attendance(course varchar(6) , regno varchar(9) , perc int not null) ;" ;
//$sql3 = " create table marks(course varchar(6) , regno varchar(9) , mark int not null) ;";


if (mysqli_query($conn, $sql1)  ) {

    echo "Succesful connection to db";

} else {

   echo "Error creating table: " . mysqli_error($conn);

}
/*
if (mysqli_query($conn, $sql2)  ) {

    echo "Succesful connection to db";

} else {



    #echo "Error creating table: " . mysqli_error($conn);

}

if (mysqli_query($conn, $sql3)  ) {

    echo "Succesful connection to db";

} else {
#echo "Error creating table: " . mysqli_error($conn);

}

*/

?>
