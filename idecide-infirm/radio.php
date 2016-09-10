<?php

$name=$_POST['name'];
$gender=$_POST['gender'];
$bed=$_POST['BedNum'];
$patid=$_POST['PatId'];
$ipop=$_POST['ip/op'];
$ch=$_POST['clihistory'];
$ins=$_POST['Ins'];
$dob=$_POST['date'];
$doc=$_POST['doctor'];
?>


<script>
function myFunction() {
    window.print();
}
</script>
		
 
		

<!DOCTYPE html>
<html>
<head>
	<title>iDecide : Ultrasonography</title>
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
	<img src="images/idecide.jpg" height="100px" style=" margin-left: 33% ">
	<div>
	<p style="text-align:center	"><b>(A Venture of Olive Touch Health Care Services Limited Thrissur with Health Care Success Finland )<br>
Karshaka Nagar, Ayyanthole Ground, P.O Ayyanthole, Thrissur, Kerala - 680003<br>
Website: www.idecidemycare.in | www.idecidemycare.org | www.idecidemycare.com<br> 
email: registeridecide@gmail.com I customercareidecide@gmail.com<br>
Tel: +91 (0) 487 3211238, Customer Care 9207283027 / 28</b>
</p>
<h1 style=" text-align:center">Ultrasonography</h1>


<div style="margin-left:46%">

</div>

<p style="margin-left:10%">
<b>DATE :<?php
  echo date("d/m/Y"); 
?>
</b>
</p>
<p style="margin-left:10%" >
<b>Name of Patient :</b> <?php echo $name;?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Age :</b> <?php
$from = new DateTime($dob);
$to   = new DateTime('today');
echo  $from->diff($to)->y ." year  ";
echo  $from->diff($to)->m." month";
  ?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Sex : </b><?php echo $gender;  ?><br><br>

<b>IP/OP : </b><?php echo $ipop;  ?>
<br><br>
<b>Bed Number : </b><?php echo $bed;  ?>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Patient ID : </b>
<?php 
echo $patid;
 ?>
<br><br>
<b>Clinic History : </b>
<?php 
echo $ch;
 ?>

<br><br>
<b>Investigation Required and Special Instruction if any : </b>

<?php 
echo $ins;  ?><br><br>
<div style = "margin-left:10%;margin-right:10%">

 <br>
<b>Name of Doctor : </b>
<?php 
echo $doc;
 ?>
<br><br><br>
<div align="center">
<button onclick="myFunction()">Print</button>
</div>
</div>
</p>



</page>

</body>
</html>