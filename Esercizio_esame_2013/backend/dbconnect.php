<?php
    include_once 'db_config.php';
    include_once 'queries.php';

    $conn = NULL;

    //check for older connection
    if($conn)
        $conn->close();
    //create connection
    $conn = new mysqli($DBservername, $DBusername, $DBpassword, $DBdatabase_name);

    //check connection
    if ($conn->connect_error) {
        ?>
        <div class="alert alert-danger">
            <strong>ERROR!</strong> Connection to the database failed!
        </div>
        <?php
        die("<p>Connection failed: " . $conn->connect_error . "</p>");
    }
?>
<!-- TODO: REMOVE THIS ON PRODUCTION -->
<div class="alert alert-success" style="margin-bottom:0px">
    <strong>SUCCESS!</strong> Connected successfully to the database!
</div>
