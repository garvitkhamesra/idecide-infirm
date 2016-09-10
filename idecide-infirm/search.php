<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'mydb';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_POST['firstname'];
    
    //get matched data from skills table
    $query = $db->query("SELECT * FROM blog WHERE firstname LIKE '%".$searchTerm."%' ");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['firstname'];
    }
    
    //return json data
    echo json_encode($data);
?>