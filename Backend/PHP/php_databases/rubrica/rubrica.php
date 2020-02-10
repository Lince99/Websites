<?php
    include_once 'db_config.php';
    include_once 'query.php';

    $conn = NULL;
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <title>Rubrica</title>
    </head>
    <body>
        <div class="header container">
            <div class="title">
                <h1>Database Rubrica</h1>
            </div>
            <div class="navbar">
                menu
            </div>
        </div>
        <div class="container">
            <div class="container data_form">
                <h3>Connection setup</h3>
                <!-- Pulsante di connessione al db -->
                <!-- TODO Pulsante di disconnessione dal db  (nasconde data_management) -->
                <!-- Dati per connettersi al db (non molto sicuro)-->
                <!--<form>
                    <div class="form-group">
                        <label for="inputServer">Server</label>
                        <input type="text" class="form-control" id="inputServer">
                    </div>
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <input type="text" class="form-control" id="inputUsername">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>

                    <button type="submit" class="btn btn-primary" id="SubmitButton">Submit</button>
                    <button type="submit" class="btn btn-primary btn-danger" id="DisconnectButton">Disconnect</button>
                </form>-->
                <?php
                    //if(isset($_POST['SubmitButton'])) { //check if form was submitted
                        //$servername = $_POST['inputServer'];
                        //$username = $_POST['inputUsername'];
                        //$password = $_POST['inputPassword'];

                        //check for older connection
                        if($conn)
                            $conn->close();
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $database_name);

                        // Check connection
                        if ($conn->connect_error) {
                            ?>
                            <script type="text/javascript">alert("Connection failed!");</script>
                            <?php
                            die("<p>Connection failed: " . $conn->connect_error . "</p>");
                        }
                        echo "<p>Connected successfully</p>";

                        //connect to database
                        if ($conn->query($use_database) === TRUE) {
                            echo "<p>Personal database selected successfully</p>";
                        } else {
                            ?>
                            <script type="text/javascript">alert("Error entering database!");</script>
                            <?php
                            echo "<p>Error selecting database: " . $conn->error . "</p>";
                        }

                        //create table
                        if ($conn->query($q_create_table) === TRUE) {
                            echo "<p>Table Rubrica created successfully</p>";
                        } else {
                            ?>
                            <script type="text/javascript">alert("Error creating table!");</script>
                            <?php
                            echo "<p>Error creating table: " . $conn->error . "</p>";
                        }
                    //}

                    if(isset($_POST['DisconnectButton'])) {
                        if($conn)
                            $conn->close();
                    }
                ?>
            </div>
            <!-- Mostra i dati solo se si è connessi -->
            <?php if($conn) { ?>
            <div class="container data_view">
                <h3>Data view</h3>
                <!-- Lista delle tabelle (tendina) -->
                <!-- Select dei dati -->
                <?php
                    if($conn) {
                        $select_result = $conn->query($q_select_all);

                        if ($select_result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo "id: " . $row["ID"]. " - Nome: " . $row["nome"]. " " . $row["cognome"]. " - Indirizzo: " . $row["indirizzo"]. " - Telefono: " . $row["telefono"]. " - Data di nascita: " . $row["dataNascita"]. " - Email: " . $row["email"]. "<br>";
                            }
                        } else {
                            echo "<p>0 risultati</p>";
                        }
                    }
                ?>
                <!-- Filtro che esegue select personalizzate -->
            </div>
            <div class="container data_insert">
                <h3>Data insert</h3>
                <!-- Abilita opzione di modifica dei dati -->
                <form>
                    <div class="form-group">
                        <label for="in_nome">Nome</label>
                        <input type="text" class="form-control" id="in_nome">
                    </div>
                    <div class="form-group">
                        <label for="in_cognome">Cognome</label>
                        <input type="text" class="form-control" id="in_cognome">
                    </div>
                    <div class="form-group">
                        <label for="in_indirizzo">Indirizzo</label>
                        <input type="text" class="form-control" id="in_indirizzo">
                    </div>
                    <div class="form-group">
                        <label for="in_telefono">Telefono</label>
                        <input type="tel" class="form-control" id="in_telefono">
                    </div>
                    <div class="form-group">
                        <label for="in_dataNascita">Telefono</label>
                        <input type="date" class="form-control" id="in_dataNascita">
                    </div>
                    <!-- Pulsante di connessione al db -->
                    <button type="submit" class="btn btn-primary" id="Submit_insert">Insert</button>
                </form>
                <?php
                    if(isset($_POST['Submit_insert'])) { //check if form was submitted
                        $in_nome = $_POST['in_nome'];
                        $in_cognome = $_POST['in_cognome'];
                        $in_indirizzo = $_POST['in_indirizzo'];
                        $in_telefono = $_POST['in_telefono'];
                        $in_dataNascita = $_POST['in_dataNascita'];
                        $in_email = $_POST['in_email'];

                        if ($conn->query($q_insert_data) === TRUE) {
                            echo "<p>New record created successfully</p>";
                        } else {
                            ?>
                            <script type="text/javascript">alert("Error insert into table!");</script>
                            <?php
                            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
                        }
                    }
                ?>
            </div>
            <!-- Abilita cancellazione delle righe -->
            <div class="containter data_remove">
                <h3>Data remove</h3>
                <form>
                    <div class="form-group">
                        <label for="remove_id">ID</label>
                        <input type="number" class="form-control" id="remove_id">
                    </div>
                    <!-- Pulsante di connessione al db -->
                    <button type="submit" class="btn btn-primary" id="Submit_remove">Remove</button>
                </form>
                <?php
                    if(isset($_POST['Submit_remove'])) { //check if form was submitted
                        $delete_id = $_POST['remove_id'];
                        if ($conn->query($q_delete_row) === TRUE) {
                            echo "<p>Record deleted successfully</p>";
                        } else {
                            ?>
                            <script type="text/javascript">alert("Error delete into table!");</script>
                            <?php
                            echo "<p>Error deleting record: " . $conn->error . "</p>";
                        }
                    }
                ?>
            </div>
            <!-- mostra i dati solo se si è connessi -->
            <?php } ?>
        </div>
        <div class="footer">
            <div class="container copyright">
                This software is under MIT license
                <div class="author">
                    Created by <span class="name"><?php echo $username; ?></span> - 5^AI
                </div>
            </div>
        </div>
    </body>
</html>
