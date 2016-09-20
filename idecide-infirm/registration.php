<?php 
session_start();
$dbHost = 'localhost';
    $dbUsername = 'garvit';
    $dbPassword = 'hellogarvit';
    $dbName = 'garvit';
    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


 $p1=$p2=$p3=$p4=$p5=$p6="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
		if(!empty($_POST["firstname"])){
		 $p1=$_POST["firstname"];
		}
		if(!empty($_POST["lastname"])){
		 $p2 = $_POST["lastname"];
		}
		if(!empty($_POST["email"])){
		 $p3 = $_POST["email"];
		}
		if(!empty($_POST["username"])){
		 $p4 = $_POST["username"];
		}
		if(!empty($_POST["password"])){
		 $p5 = $_POST["password"];
		}
		if(!empty($_POST["role"])){
		 $p6 = $_POST["role"];
		}
		
	  }
	  	
	
	$sql = "SELECT * FROM registration WHERE username='$p4' 
			AND password = '$p5'";
			$result = $conn->query($sql);			
			$row = $result->fetch_assoc();
		if(!$row){
			
			if(!empty($p1)&&!empty($p2)&&!empty($p3)&&!empty($p4)&&!empty($p5)&&!empty($p6)){
			$sqlm = "INSERT INTO registration (firstname, lastname,email,username,password,role) 
			VALUES ('$p1','$p2','$p3','$p4','$p5','$p6')";

			if ($conn->query($sqlm) === TRUE) {
				$last_id = $conn->insert_id;
				
			echo "New record created successfully";
				$_SESSION['login']=true;
	if($_SESSION['login'])
	{	
		if($p6 == 'doctor'){
			header ("LOCATION:doctor.php");

		}
		elseif($p6 == 'patient'){
			header ("LOCATION:index.php");

		}
		elseif($p6 == 'admin'){
			echo "hi";
		}

}
	else{
		header ("LOCATION:loginindex.php");
	}
	
	}
	else {
			echo "Error: " . $sqlm . "<br>" . $conn->error;}

			}
		}
		else{
			header ("LOCATION:loginindex.php");
		}
	

	
	

?>