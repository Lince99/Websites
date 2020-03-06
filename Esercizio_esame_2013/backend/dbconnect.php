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
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>SUCCESS!</strong> Connected successfully to the database!
        </div>
        <?php
    }

    if ($conn->query($Q_use_database) === TRUE) {
        ?>
        <!-- TODO: REMOVE THIS ON PRODUCTION -->
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>SUCCESS!</strong> Database selected successfully!
        </div>
        <?php
    } else {
        ?>
        <div class="alert alert-danger">
            <strong>ERROR!</strong> Database selection failed!
        </div>
        <div class="alert alert-info">
            <strong>Creating database...</strong>
            <?php
            if ($conn->query($Q_create_database) === TRUE) {
                ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>SUCCESS!</strong> Database created.
                </div>
                <?php
                $conn->query($Q_use_database);
            }
            else {
                ?>
                <div class="alert alert-danger">
                    <strong>ERROR!</strong> NO DATABASE, NO SERVICE :/
                </div>
                <?php
                die("<p>Database creation failed: " . $conn->connect_error . "</p>");
            }
            ?>
        </div>
        <?php
    }
?>
