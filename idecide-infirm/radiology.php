
<script>
function myFunction() {
    window.print();
}
</script>
		
    <script language="Javascript">
function OnEdit()
{
     window.open('index.php');
	
}

</script>
		

<!DOCTYPE html>
<html>
<head>
	<title>iDecide : Prescription</title>
	<style type="text/css">
	body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="portrait"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="portrait"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}

</style>
</head>
<body>

<page size="A4" layout="portrait">
	<img src="idecide.jpg" height="100px" style=" margin-left: 33% ">
	<div>
	<p style="text-align:center	"><b>(A Venture of Olive Touch Health Care Services Limited Thrissur with Health Care Success Finland )<br>
Karshaka Nagar, Ayyanthole Ground, P.O Ayyanthole, Thrissur, Kerala - 680003<br>
Website: www.idecidemycare.in | www.idecidemycare.org | www.idecidemycare.com<br> 
email: registeridecide@gmail.com I customercareidecide@gmail.com<br>
Tel: +91 (0) 487 3211238, Customer Care 9207283027 / 28</b>
</p>
<h1 style=" text-align:center">
RADIOLOGY
<br>
(MRI, CT, X-RAY)
</h1>
<br><br>
<h3>

<p style="margin-left:10%">
<b>
 DATE :</b><?php
  echo date("d/m/Y"); 
?>
<form name="radiology" action="radio.php" method="post">	
	<p style ="margin-left:10%">	
			Name of Patient :
      		<input type="text" name="name" placeholder="Name" class="focus" required>	
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <b>DATE OF BIRTH :</b>
    		<input type="date" name="date" placeholder="DOB" required> <br><br>
 
			GENDER :
			<input type="radio" name="gender" value="male" checked> Male
  			<input type="radio" name="gender" value="female"> Female
  			<input type="radio" name="gender" value="other"> Other
  <br><br>
            IP/OP :
			<input type="radio" name="ip/op" value="IP" checked> IP
  			<input type="radio" name="ip/op" value="OP"> OP
  <br><br>
Bed Number :  
<input type="number" name="BedNum"   required>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Patient Id :  
<input type="number" name="PatId"   required>
<br><br><br>
Clinical History 
<br>
<textarea name="clihistory" style = "width:90%;height:15%"  required></textarea>
<br><br>
Investigation Required and Special Instructions if any 
<br>
<textarea name="clihistory" style = "width:90%;height:15%"  ></textarea>
 
<br><br><br>
Name of Doctor: 
<input type="text" name = "doctor" required>
<br><br><br><br><br><br>
Signature Doctor

<br><br><br><br><input style="margin-left:40%" type="submit"  value="Submit"></input>
	</p>
</form>

</div>

</p>
<br><br><br>
<div style="margin-left:30%">
<button onclick="myFunction()">Print</button>
<button style="margin-left:50%" id = "edit" onclick="OnEdit()">Edit</button>
</div>
</div>
</p>



</page>

</body>
</html>