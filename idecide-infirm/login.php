<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doctor";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$rsd=$_POST["username"];
$sd=$_POST["password"];
$role=$_POST["role"] ;

$sql = "SELECT * FROM registration WHERE username = '$rsd' and password = '$sd' and role = '$role' ";
$result = $conn->query($sql);
if($result){
	if($result->num_rows>0){
	$row = $result->fetch_assoc();
		$_SESSION['login']=true;
	if($_SESSION['login'])
	{	
		if($role == 'doctor'){
			header ("LOCATION:doctor.php");

		}
		elseif($role == 'patient'){

			header ("LOCATION:index.php");

		}
		elseif($role == 'admin'){
			echo "hi";
		}

}
	else{
		
		header ("LOCATION:loginindex.php");
	}

	

    }
	else{
		
		header ("LOCATION:loginindex.php");
	}}
	else{
		echo "error";
	}
	

?>