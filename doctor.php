<?php
error_reporting(0);
if (isset($_POST["submit"])) {
	$Name =$_POST["Name"];
	$Phone =$_POST["Phone"];
	$Email =$_POST["Email"];
    $Date =$_POST["Date"];
    $Gastroenterologists =$_POST["Gastroenterologists"];
    $Dermatologists =$_POST["Dermatologists"];
    $Cardiologists =$_POST["Cardiologists"];
    
    $servername = "localhost";
$username ="root";
$password = "";
$database = "doctor";

$conn = mysqli_connect($servername,$username,$password,$database
);

if(!$conn){
	die("sorry we failed to connect:" . mysqli_connect_error());
}
else{
	echo"connection was sucessful<br>";
}
$sql ="INSERT INTO medical (`name`,`phone`,`email`,`day`,`gastroenterologists`,`dermatologists`,`cardiologists`) VALUES ('$Name','$Phone','$Email','$Date','$Gastroenterologists','$Dermatologists','$Cardiologists')";
$result = mysqli_query($conn,$sql);
if($result){
	echo "the record has been inserted  sucessfully!<br>";
}

else{
	echo "the record  was not created sucessfully--->".mysqli_error($conn);
}
}

?>


