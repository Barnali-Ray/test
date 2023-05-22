<?php


if (isset($_POST["submit"])) {
	$Name =$_POST["Name"];
	$Password =$_POST["Password"];
	
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
$sql ="INSERT INTO login (`user`,`pass`) VALUES ('$Name','$Password')";
$result = mysqli_query($conn,$sql);
if($result){
	echo"the record has been inserted  sucessfully!<br>";
}

else{
	echo "the record  was not created sucessfully--->".mysqli_error($conn);
}
}

?>


