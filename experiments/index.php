<?php
    /*include 'connectDb.php';
    //https://stackoverflow.com/questions/13980883/how-to-separate-html-from-php-files
    $founderName = "Basso Nicola";
    $nameListPrint = "";
    $nameList = array("Model", "View", "Controller", "database", "D.R.Y.", "user");
    
    echo ("After init!");
    
    $html = file_get_contents("index.html");
    //riempie la lista
    foreach($nameList as $person) {
        if (strcmp($person, "") == 0) {
            $person = "-- VOID STRING! --";
        }
        $nameListPrint .= "<li>$person</li>\n\t\t";
    }

    echo("After list");
    
    //rimpiazza le variabili php nel file html
    $html = str_replace("{{dbLog}}", $dbLog, $html);
    $html = str_replace("{{nameList}}", $nameListPrint, $html);
    $html = str_replace("{{founderName}}", $founderName, $html);
    
    echo $html;*/
    echo("
        <html>
            <head>
                <title> Experiments </title>
            </head>
            <body>
                <h1>Hello World!</h1>");
    echo("
        <div id=\"dbButtons\">
            <form id=\"addForm\" action=\"index.php\" method=\"post\">
                <p>QUERY:   <input type=\"text\" name=\"user_query\"/></p>
                <input id=\"submit\" type=\"submit\" name=\"submit\" value=\"Submit\" />
            </form>
        </div>
        ");
    
    $server_name = "192.168.1.8";
    $db_username = "www-data";
    $db_password = "www-data";
    $db_name = "website_db";
    $db_log = "";    
    
    $db_log .= date("Y-m-d_h:i:s").'<br>';
    
    //DB CONNECTION
    try {
        //Connect to database
        $conn = new PDO("mysql:host=$server_name;dbname=$db_name", 
            $db_username, $db_password);
        
        if($conn->connect_error) {
            $db_log .= "! Connection failed: ".$conn->connect_error."<br>";
            echo("<p>ERROR!</p>");
            die;
        }
        else {
            //set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db_log .= "Connected successfully to $db_name<br>";
        }
    } catch (PDOException $e) {
        $db_log .= "! ERROR: " . $e->getMessage();
        echo $db_log;
        die;
    }
    
    
    
    try {
        $db_list = array();
        $index = 0;
        //GET DATABASES
        $ret_query = $conn->query("SHOW DATABASES;");
        $result = $ret_query->setFetchMode(PDO::FETCH_NUM);
        $db_log .= "Query show db run successfully!<br>";
        while ($row = $ret_query->fetch()) {
            foreach ($row as $item) {
                $db_list[] = $item;
            }
        }
        print_r($db_list);
        echo("<br>");
        echo("
        <div id=\"selectDbButtons\">
            <form id=\"selectForm\" action=\"index.php\" method=\"post\">
                <p>INPUT DB INDEX:   <input type=\"number\" name=\"select_db\"/></p>
                <input id=\"submit\" type=\"submit\" name=\"submit_select\" value=\"Submit\" />
            </form>
        </div>
        ");
        //Save data
        if($_SERVER['REQUEST_METHOD'] == "POST" and 
            isset($_POST['submit_select'])) {
            if (!isset($_POST['select_db'])) {
                $dbLog .= "Warning! Invalid input!<br>";
            } else {
                $index = $_POST['select_db'];
                if($index < 0 || $index > sizeof($db_list))
                    $index = 0;
            }
        }
        else
            $index = 0;
        
        //GET TABLE FOR EACH DB
        $table_list = array();
        $conn->query("USE website_db;");
        $ret_query = $conn->query("SHOW TABLES;");
        $result = $ret_query->setFetchMode(PDO::FETCH_NUM);
        $db_log .= "Query show tables run successfully!<br>";
        while ($row = $ret_query->fetch()) {
            foreach ($row as $item) {
                $table_list[] = $item;
            }
        }
        print_r($table_list);
        echo("<br><br>");
        
        //PRINT TABLES STRUCT
        foreach ($table_list as $table_item) {
            echo("<h4>$table_item</h4>");
            $ret_query = $conn->query("DESC $table_item;");
            $result = $ret_query->setFetchMode(PDO::FETCH_NUM);
            $db_log .= "Query desc run successfully!<br>";
            while ($row = $ret_query->fetch()) {
                foreach ($row as $item) {
                    echo("<span> $item </span>");
                }
                echo("<br>");
            }
            //PRINT TABLE ROWS
            $ret_query = $conn->query("SELECT * FROM $table_item;");
            $result = $ret_query->setFetchMode(PDO::FETCH_NUM);
            $db_log .= "Query select run successfully!<br>";
            while ($row = $ret_query->fetch()) {
                foreach ($row as $item) {
                    echo("<span> $item </span>");
                }
                echo("<br><br>");
            }
        }
    } catch(PDOException $e) {
        if ($e->getCode()) {
            $db_log .= "! Error on running sql show: ".$e->getMessage()."<br>";
        }
    }

    //Save data
    if($_SERVER['REQUEST_METHOD'] == "POST" and 
        isset($_POST['submit'])) {
        if (!isset($_POST['user_query'])) {
            $dbLog .= "Warning! Invalid input!<br>";
        } else {
            $sql_query = $_POST['user_query'];
        }
    }
    else
        $sql_query = "";
    //run custom query
    try {
        if($sql_query != null) {
            //$conn->exec($sql_query);
            $query = $conn->query($sql_query);
            $result = $query->setFetchMode(PDO::FETCH_NUM);
            $db_log .= "Query $sql_query run successfully! $result<br>";
            while ($row = $query->fetch()) {
                foreach ($row as $item) {
                    $db_log .= " $item ";
                }
                $db_log .= "<br>";
            }
            echo("<h4>Query: $sql_query</h4>");
        }
        else {
            $db_log .= "Void user query!<br>";
        }
    } catch(PDOException $e) {
        if ($e->getCode()) {
            $db_log .= "! Error on running sql $sql_query: ".$e->getMessage()."<br>";
        }
    }
    
    //end connection
    $conn = null;
    
    echo("<h4>Console:</h4>");
    echo $db_log;
    echo ("    </body>
          </html>");
?>

