<?php
$type=$_POST['type'];
$dob=$_POST['date'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$complaint=$_POST['complaint'];
$tags=$_POST['tags'];
$medice=$_POST['medice'];
$type_medicie=$_POST['type_medicie'];
$dosage=$_POST['dosage'];
$Num_dats=$_POST['Num_dats'];


?>


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
	<img src="images/idecide.jpg" height="100px" style=" margin-left: 33% ">
	<div>
	<p style="text-align:center	"><b>(A Venture of Olive Touch Health Care Services Limited Thrissur with Health Care Success Finland )<br>
Karshaka Nagar, Ayyanthole Ground, P.O Ayyanthole, Thrissur, Kerala - 680003<br>
Website: www.idecidemycare.in | www.idecidemycare.org | www.idecidemycare.com<br> 
email: registeridecide@gmail.com I customercareidecide@gmail.com<br>
Tel: +91 (0) 487 3211238, Customer Care 9207283027 / 28</b>
</p>
<h1 style=" text-align:center">PRESCRIPTION</h1>
<h2 style=" text-align:center">Medicine </h2>

<div style="margin-left:46%">

</div>
<h3>
<p align = "center">
<b>

<?php
  echo $type; 
?>

</b>
</p>
</h3>
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
echo $from->diff($to)->y;
  ?>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<b>Sex : </b><?php echo $gender;  ?><br><br><br>
<b>Complaint : </b><?php echo $complaint;  ?><br><br><br>
<b>Diagnosis : </b><?php echo $tags;  ?><br><br>
<b>Rx</b>
<div style = "margin-left:10%;margin-right:10%">
<table style="width:100%">
  <tr>
    <th>Name of Medicine</th>
    <th>Type</th>
    <th>Dosage</th>
	<th>No. of Days</th>
  </tr>
  <tr>
    <td><?php echo $medice; ?></td>
    <td><?php echo $type; ?></td>
    <td><?php echo $dosage; ?></td>
	<td><?php echo $Num_dats; ?></td>

  </tr>

</table>



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