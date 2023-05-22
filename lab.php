<?php
if (isset($_POST["submit"])) {
	$Name =$_POST["Name"];
	$Phone =$_POST["Phone"];
	$Email =$_POST["Email"];
    $Date =$_POST["Date"];
    $Department =$_POST["Department"];
    $Location =$_POST["Location"];
    
    
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
$sql ="INSERT INTO pathlab (`Name`,`Phone`,`Email`,`Date`,`Department`,`Location`) VALUES ('$Name','$Phone','$Email','$Date','$Department','$Location')";
$result = mysqli_query($conn,$sql);
if($result){
	echo "the record has been inserted  sucessfully!<br>";
}

else{
	echo "the record  was not created sucessfully--->".mysqli_error($conn);
}
}

?>


