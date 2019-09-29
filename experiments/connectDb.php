<?php

    //test MyQSL
    $serverName = "localhost";
    $username = "www";
    $password = "www";
    $dbName = "website_db";
    $tableName = "test_table";
    $dbLog = "";
    
    $sqlCreate = 
        "CREATE TABLE $tableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30),
        lastname VARCHAR(30)
        )";
    
    $sqlInsert = 
        "INSERT INTO $tableName (firstname, lastname) 
        VALUES ('John', 'Doe')";
    
    $sqlShow =
        "SELECT firstname, lastname FROM $tableName";
    
    $sqlDeleteAll =
        "DROP TABLE IF EXISTS $tableName";
    
    $dbLog .= date("Y-m-d_h:i:s").'<br>';
    
    try {
        //Connect to database
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName", 
            $username, $password);
        
        if ($conn->connect_error) {
            $dbLog .= "! Connection failed: ".$conn->connect_error."<br>";
            die;
        } else {
            //set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $dbLog .= "Connected successfully to $dbName<br>";
        }
    } catch (PDOException $e) {
        $dbLog .= "! ERROR: " . $e->getMessage();
        die;
    }

    //Create a table if it doesn't exixts
    try {
        $conn->exec($sqlCreate);
        $dbLog .= "Table $tableName created successfully<br>";
    } catch(PDOException $e) {
        if ($e->getCode() != 42) {
            $dbLog .= "! Error creating table $tableName: ".$e->getMessage().
                "<br>";
        }
    }
    
    
    //MENU OPERATIONS
    if($_SERVER['REQUEST_METHOD'] == "POST" and 
        isset($_POST['dropAll'])) {
        //Remove table
        try {
            $conn->exec($sqlDeleteAll);
            $dbLog .= "Table $tableName dropped<br>";
        } catch(PDOException $e) {
            $dbLog .= "! Error on dropping table $tableName: ".$e->getMessage().
                "<br>";
        }
    } else if($_SERVER['REQUEST_METHOD'] == "POST" and 
        isset($_POST['addData'])) {
        //Insert data into table
        if (!isset($_POST['name']) or !isset($_POST['surname'])) {
            $dbLog .= "Warning! For input need more data!<br>";
        } else {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $sqlInsert = "INSERT INTO $tableName (firstname, lastname) VALUES ('$name', '$surname')";
        }
        try {
            $conn->exec($sqlInsert);
            $dbLog .= "New record created successfully<br>";
        } catch(PDOException $e) {
            $dbLog .= "! Error inserting data into table $tableName: ".
                $e->getMessage() . "<br>";
        }
    } else if($_SERVER['REQUEST_METHOD'] == "POST" and
        isset($_POST['readData'])) {
        //Read data from the table
        try {
            $dbLog .= ".------------------.<br>
                       | Name | | Surname |<br>
                       '------------------'<br>";
            $query = $conn->query($sqlShow);
            $result = $query->setFetchMode(PDO::FETCH_NUM);
            while ($row = $query->fetch()) {
                $dbLog .= "|".$row[0]."|\t|".$row[1]."|<br>";
            }
        } catch (PDOException $e) {
            $dbLog .= "! Error reading data from table $tableName: ".
                $e->getMessage()."<br>";
        }
    }
    $conn = null;
?>

