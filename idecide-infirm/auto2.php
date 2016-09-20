<?php
header('Content-type: application/json');
$q = $_GET["search"];
//check $q, get results from your database and put them in $arr
 //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'garvit';
    $dbPassword = 'hellogarvit';
    $dbName = 'garvit';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
  //  $searchTerm = $_POST['firstname'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM blog WHERE firstname LIKE '%".$q."%' ");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['firstname'];
    }


$arr[] = 'tag1';
$arr[] = 'tag2';
$arr = $data;
echo json_encode($arr);
?>