<?php
    include_once 'db_config.php';
    include_once 'query.php';
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
                <!-- Dati per connettersi al db (non molto sicuro)-->
                <form>
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
                    <!-- Pulsante di connessione al db -->
                    <button type="submit" class="btn btn-primary" id="SubmitButton">Submit</button>
                    <!-- TODO Pulsante di disconnessione dal db  (nasconde data_management) -->

                </form>
                <?php
                    if(isset($_POST['SubmitButton'])) { //check if form was submitted
                        $servername = $_POST['inputServer'];
                        $username = $_POST['inputUsername'];
                        $password = $_POST['inputPassword'];
                    }
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $database_name);

                    // Check connection
                    if ($conn->connect_error) {
                        ?>
                        <script type="text/javascript">alert("Connection failed!");</script>
                        <?php
                        die("Connection failed: " . $conn->connect_error);
                    }
                    echo "Connected successfully";
                    //create database
                    if ($conn->query($q_create_table) === TRUE) {
                        echo "Table Rubrica created successfully";
                    } else {
                        ?>
                        <script type="text/javascript">alert("Error creating table!");</script>
                        <?php
                        echo "Error creating table: " . $conn->error;
                    }
                ?>
            </div>
            <div class="container data_view">
                <!-- Lista delle tabelle (tendina) -->
                <!-- Select dei dati -->
                <?php
                $select_result = $conn->query($q_select_all);

                if ($select_result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "id: " . $row["ID"]. " - Nome: " . $row["nome"]. " " . $row["cognome"]. " - Indirizzo: " . $row["indirizzo"]. " - Telefono: " . $row["telefono"]. " - Data di nascita: " . $row["dataNascita"]. " - Email: " . $row["email"]. "<br>";
                    }
                } else {
                    echo "0 risultati";
                }
                ?>
                <!-- Filtro che esegue select personalizzate -->
            </div>
            <div class="container data_insert">
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
                    }
                    if ($conn->query($q_insert_data) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        ?>
                        <script type="text/javascript">alert("Error insert into table!");</script>
                        <?php
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                ?>
            </div>
            <!-- Abilita cancellazione delle righe -->
            <div class="containter data_remove">
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
                            echo "Record deleted successfully";
                        } else {
                            ?>
                            <script type="text/javascript">alert("Error delete into table!");</script>
                            <?php
                            echo "Error deleting record: " . $conn->error;
                        }
                    }
                ?>
            </div>
        </div>
        <div class="footer">
            <div class="container copyright">
                This software is under MIT license
                <div class="author">
                    Created by <span class="name">Basso Nicola</span> - 5^AI
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    $conn->close();
?>
