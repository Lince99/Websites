<?php
    include_once 'db_config.php';
    include_once 'queries.php';


    $conn = NULL;

    //create connection
    $conn = new mysqli($DB_servername, $DB_username, $DB_password, $DB_database_name);

    //check connection
    if ($conn->connect_error) {
        ?>
        <div class="alert alert-danger">
            <strong>ERROR!</strong> Connection to the database failed!
        </div>
        <?php
        die("<p>Connection failed: " . $conn->connect_error . "</p>");
    } else {
        ?>
        <!-- TODO: REMOVE THIS ON PRODUCTION -->
        <div class="alert alert-success">
            <strong>SUCCESS!</strong> Connected successfully to the database!
        </div>
        <?php
    }

    if ($conn->query($use_database) === TRUE) {
        ?>
        <!-- TODO: REMOVE THIS ON PRODUCTION -->
        <div class="alert alert-success">
            <strong>SUCCESS!</strong> Database selected successfully!
        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger">
            <strong>ERROR!</strong> Database selection failed!
        </div>
        <?php
    }
?>
